<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Post_model extends CI_Model{
	/*==var for manipulation==*/
	protected	$actions;
	protected 	$rows;
	protected 	$mp;
	protected	$categories;
	protected   $title;
	protected   $selected;
	protected   $no;
	/*==var for manipulation==*/

	/*====================================data manipulation====================================*/
	protected function data_mp()
	{
		$this->load->helper(['date','text']);
		$this->mp=[]; // set refresh default data mp
		$this->no= 1; // set refresh default data mp
		foreach ( $this->rows as $key => $value ) {
			switch ( $this->actions ) {
				case 'post':
					# mp post
					$this->mp[]=[
						"post_number"=> $this->no,
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"options_title"=> $value->options_title,
						"post_timestamp"=> tanggal_indo($value->post_timestamp,TRUE),
					];
					$this->no++;
					break;
				case 'post_add':
					# code...
					$this->db->select('options_id, options_title');
					$this->mp[]=[
						'options_id' => $value->options_id,
						'options_title' => $value->options_title,
						'options_disable' => $this->db->get_where('options',['options_parent'=> $value->options_id])->num_rows() > 0 ? 'disabled' : FALSE ,
					];
					foreach ($this->db->get_where('options',['options_parent'=> $value->options_id])->result_object() as $key_sub => $value_sub) {
						$this->mp[]=[
							'options_id' => $value_sub->options_id,
							'options_title' => '-- '.$value_sub->options_title,
							'options_disable' => FALSE ,
						];
					}
					break;
				case 'edit_post':
					# mp pages edit
					$this->db->select('options_id, options_title');
					foreach ($this->db->get_where('options',['options_parent'=>4])->result_object() as $key_c => $value_c) {
						$this->db->select('options_id, options_title');
						$this->categories[]=[
							'options_id' => $value_c->options_id,
							'options_title' => $value_c->options_title,
							'options_disable' => $this->db->get_where('options',['options_parent'=>$value_c->options_id])->num_rows() > 0 ? 'disabled' : FALSE ,
							'options_selected' => $value_c->options_id == $value->post_categories ? 'selected' : FALSE ,
						];
						foreach ($this->db->get_where('options',['options_parent'=>$value_c->options_id])->result_object() as $key_s => $value_s) {
							$this->categories[]=[
								'options_id' => $value_s->options_id,
								'options_title' => '-- '.$value_s->options_title,
								'options_disable' => FALSE ,
								'options_selected' => $value_s->options_id == $value->post_categories ? 'selected' : FALSE ,
							];
						}
					}
					$this->mp[]=[
	                    'post_id' => $value->post_id,
	                    'post_title' => $value->post_title,
	                    'post_contents' => $value->post_contents,
	                    'post_src' => $value->post_src,
	                    'post_categories' => $this->categories,
	                    'post_timestamp' => timespan(strtotime($value->post_timestamp), time(), 2),
					];
					break;
				case 'categories':
					# categories
					$this->cek_rows_parents= $this->db->query("SELECT post_id FROM post WHERE post_categories='{$value->options_id}' ")->num_rows();
					$this->cek_rows_parents+= $this->db->query("SELECT options_id FROM options WHERE options_parent='{$value->options_id}' ")->num_rows();
					$this->mp[]=[
						"options_id"=> $value->options_id,
						"options_title"=> $value->options_title,
						"options_parent"=> $value->options_parent,
						"options_timestamp"=> tanggal_indo($value->options_timestamp,TRUE),
						"options_delete"=> $this->cek_rows_parents > 0 ? 'd-none' : FALSE,
					];
					break;
				case 'edit_categories':
					# code...
					$this->mp[]=[
						"options_id"=> $value->options_id,
						"options_title"=> $value->options_title,
						"options_contents"=> $value->options_contents,
						"options_timestamp"=> tanggal_indo($value->options_timestamp,TRUE),
					];
					break;
				case 'categories_sub':
					# code...
					$this->cek_rows_parents= $this->db->query("SELECT post_id FROM post WHERE post_categories='{$value->options_id}' ")->num_rows();
					$this->mp[]=[
						"options_id"=> $value->options_id,
						"options_title"=> $value->options_title,
						"options_parent"=> $value->options_parent,
						"options_timestamp"=> tanggal_indo($value->options_timestamp,TRUE),
						"options_delete"=> $this->cek_rows_parents > 0 ? 'd-none' : FALSE,
					];
					break;
				case 'edit_categories_sub':
					# code...
					$this->json= json_decode($value->options_contents);
					$this->mp[]=[
						"options_id"=> $value->options_id,
						"options_title"=> $value->options_title,
						"options_parent"=> $value->options_parent,
						"options_contents"=> $this->json->options_desc,
						"options_image"=> $this->json->options_image,
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
	public function last_update(){
		$this->load->helper('date');
		foreach ($this->select_last_post() as $key => $value)
		{
			$this->last_update= timespan(strtotime($value->post_timestamp), time(), 2);
		}
		return $this->last_update;
	}
	public function last_update_categories(){
		$this->load->helper('date');
		foreach ($this->select_last_categories() as $key => $value)
		{
			$this->last_update= timespan(strtotime($value->options_timestamp), time(), 2);
		}
		return $this->last_update;
	}

	protected function select_last_post()
	{
		$this->db->select('post_timestamp');
		$this->db->order_by('post_timestamp', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('post');
		return $query->result_object();
	}
	protected function select_last_categories()
	{
		$this->db->select('*');
		$this->db->where(['options_parent'=>4]);
		$this->db->order_by('options_id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('options');

		return $query->result_object();
	}

	public function select_post()
	{
		$this->db->select('post.post_id,post.post_title,post.post_timestamp,options.options_title');
		$this->db->order_by('post.post_timestamp', 'DESC');
		$this->db->join('options', 'options.options_id = post.post_categories','left');
		$this->rows = $this->db->get('post')->result_object();
		$this->actions = 'post';
		return $this->data_mp();
	}
	public function select_categories(){
		$this->db->select('*');
		$this->db->where(['options_parent'=>4]);
		$this->db->order_by('options_id','DESC');
		$this->rows = $this->db->get('options')->result_object();
		$this->actions= 'categories';

		return $this->data_mp();
		
	}
	public function insert_post()
	{
		return $this->db->insert('post', $this->post);
	}
	public function edit_post()
	{
		$this->actions= 'edit_post';
		$this->db->select('post_id, post_title, post_contents, post_src, post_categories, post_timestamp');
		$this->rows= $this->db->get_where('post',$this->where)->result_object();
		return $this->data_mp();
	}
	public function update_post()
	{
		return $this->db->update('post', $this->post, $this->where);
	}
	public function delete_post()
	{
		return $this->db->delete('post',$this->where);
	}
	public function insert_categories()
	{
		return $this->db->insert('options', $this->post);
	}
	public function edit_categories(){
		$this->actions= 'edit_categories';
		$this->rows = $this->db->get_where('options', $this->where)->result_object();
		return $this->data_mp();
	}

	public function categories_sub($id=NULL){
		$this->actions= 'categories_sub';
		if ($id) {
			$this->rows= $this->db->get_where('options', ['options_parent'=>$id])->result_object();
		} else {
			$this->rows= $this->db->get_where('options', $this->where_parents)->result_object();
		}
		return $this->data_mp();

	}
	public function edit_categories_sub(){
		$this->actions= 'edit_categories_sub';
		$this->rows = $this->db->get_where('options', $this->where)->result_object();
		return $this->data_mp();
	}
	public function update_categories(){
		return $this->db->update('options', $this->post, ['options_id'=> $this->options_id]);
	}
	public function delete_categories()
	{
		return $this->db->delete('options',['options_id'=>$this->id]);
	}
	public function post_add()
	{
		$this->actions= 'post_add';
		$this->db->select('options_id, options_title');
		$this->rows= $this->db->get_where('options',['options_parent'=>4])->result_object();
		return $this->data_mp();
	}
	public function post_data()
	{
		return $this->db->get_where('post',$this->where)->result_object();
	}

}