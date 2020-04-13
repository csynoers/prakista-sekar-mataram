<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Support_model extends CI_Model{

	/*==var for manipulation==*/
	protected	$actions;
	protected 	$rows;
	protected 	$mp;
	protected	$categories;
	protected   $title;
	/*==var for manipulation==*/

	/*====================================data manipulation====================================*/
	protected function data_mp()
	{
		$this->mp=[];
		$this->load->helper(['date','text']);
		foreach ( $this->rows as $key => $value ) {
			switch ( $this->actions ) {
				case 'post':
					# mp post
					$this->mp[]=[
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"options_title"=> $value->options_title,
						"post_timestamp"=> tanggal_indo($value->post_timestamp,TRUE),
					];
					break;
				case 'contents_no_image_edit':
					$this->mp[]=[
	                    'options_id' => $value->options_id, 
	                    'options_title' => $value->options_title, 
	                    'options_contents' => $value->options_contents, 
	                    'options_timestamp' => timespan(strtotime($value->options_timestamp), time(), 2),
					];
					break;
				case 'image_link':
					$json= json_decode($value->options_contents);
					$this->mp[]=[
						'options_id'=> $value->options_id,
						'options_title'=> $value->options_title,
						'options_link'=> $json->options_link,
						'options_image'=> base_url('../assets/images/image_link/thumb/'.$json->options_image.'?v='.$value->options_timestamp),
						'options_seo'=> $value->options_seo,
						'options_timestamp'=> $value->options_timestamp,
					];
					break;
				case 'image_link_edit':
					$json= json_decode($value->options_contents);
					$this->mp[]=[
						'options_id'=> $value->options_id,
						'options_title'=> $value->options_title,
						'options_link'=> $json->options_link,
						'options_image'=> $json->options_image,
						'options_seo'=> $value->options_seo,
						'options_timestamp'=> $value->options_timestamp,
						'options_parent'=> $value->options_parent,
						'img_src'=> base_url('../assets/images/image_link/thumb/'.$json->options_image.'?v='.$value->options_timestamp),
						'height_thumb'=> $value->height_thumb,
						'parent_title'=> $value->parent_title,
					];
					break;
				case 'logo_edit':
					$this->json=json_decode($value->options_contents);
					$this->mp[]=[
	                    'options_id' => $value->options_id, 
	                    'options_title' => $value->options_title, 
	                    'options_image' => $this->json->options_image, 
	                    'options_timestamp' => timespan(strtotime($value->options_timestamp), time(), 2),
					];
					break;
				case 'categories':
					# categgories
					$this->mp[]=[
						"options_id"=> $value->options_id,
						"options_title"=> $value->options_title,
						"options_timestamp"=> tanggal_indo($value->options_timestamp,TRUE),
					];
					break;
				
				default:
					# code...
					break;
			}
		}
		return $this->mp;
	}
	/*====================================end data manipulation====================================*/

	/*====================================last updated====================================*/
	public function last_update(){
		$this->load->helper('date');
		foreach ($this->select_last_post() as $key => $value)
		{
			$this->last_update= timespan(strtotime($value->post_timestamp), time(), 2);
		}
		return $this->last_update;
	}
	/*====================================end last updated====================================*/

	/*====================================contents_no_image edit====================================*/
	public function contents_no_image_edit(){
		$this->actions= 'contents_no_image_edit';
		$this->rows= $this->db->get_where('options',['options_id'=> $this->id])->result_object();
		return $this->data_mp();
	}
	/*====================================end contents_no_image edit====================================*/

	/*====================================contens_no_image update====================================*/
	public function contents_no_image_update(){
		return $this->db->update('options', $this->post, ['options_id'=> $this->id]);
	}
	/*====================================end contens_no_image update====================================*/

	/*====================================image_link====================================*/
	public function image_link(){
		if ( !empty($this->where ) ) {
			$this->actions= 'image_link';
			$this->rows= $this->db->get_where('options',['options_parent'=> $this->where])->result_object();
			return $this->data_mp();
		}
		if ( !empty($this->id) ) {
			return $this->db->get_where('options',['options_id'=> $this->id])->result_object();
		}
	}

	public function image_link_insert(){
		return $this->db->insert('options', $this->post, $this->where);
	}

	public function image_link_edit(){
		$this->db->select('option.*, parent.options_contents AS height_thumb, parent.options_title AS parent_title');
		$this->db->from('options AS option ');
		$this->db->join('options AS parent', 'parent.options_id = option.options_parent');
		$this->db->where('option.options_id', $this->id);
		$this->actions= 'image_link_edit';
		$this->rows= $this->db->get()->result_object();
		return $this->data_mp();
	}

	public function image_link_update(){
		return $this->db->update('options', $this->post, ['options_id'=>$this->id]);
	}

	public function image_link_delete(){
		return $this->db->delete('options', ['options_id'=>$this->id]);
	}
	/*====================================end image_link====================================*/

	/*====================================Logo & Icon Website====================================*/
	public function logo_edit(){
		$this->actions= 'logo_edit';
		if ( empty($this->options_id )) {
			$this->db->where_in('options_id',[74,75]);
		}else{
			$this->db->where(['options_id'=>$this->options_id]);
		}
		$this->rows= $this->db->get_where('options')->result_object();
		return $this->data_mp();
	}
	/*====================================end Logo & Icon Website====================================*/
	
	/*====================================Logo & Icon Website Update====================================*/
	public function logo_update()
	{
		return $this->db->update('options', $this->post, ['options_id'=> $this->options_id]);
	}
	/*====================================end Logo & Icon Website Update====================================*/

	/*====================================contact footer====================================*/
	public function contact_footer(){
		return $this->db->get_where('options',['options_id'=>46])->result_object();
	}
	
	public function contact_footer_update(){
		return $this->db->update('options', $this->post, ['options_id'=>46]);
	}
	/*====================================end contact footer update====================================*/

	/*====================================video footer====================================*/
	public function video_footer(){
		return $this->db->get_where('options',['options_id'=>88])->result_object();
	}

	public function video_footer_update(){
		return $this->db->update('options', $this->post, ['options_id'=>88]);
	}
	/*====================================end video footer update====================================*/
}