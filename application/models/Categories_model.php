<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Categories_model extends CI_Model
{
	/*==var for manipulation==*/
	protected	$actions;
	protected 	$rows;
	protected 	$mp;
	protected   $title;
	/*==var for manipulation==*/

	/*====================================data manipulation====================================*/
	protected function data_mp()
	{
		$this->mp=[];
		$this->load->helper(['date','text']);
		foreach ( $this->rows as $key => $value ) {
			switch ( $this->actions ) {
				case 'default_categories':
					# mp post
					$this->mp[]=[
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"post_contents"=> character_limiter(strip_tags($value->post_contents), 336),
						"post_src"=> base_url().'assets/images/post/'.$value->post_src.'?v='.$value->post_timestamp,
						"post_timestamp"=> tanggal_indo($value->post_timestamp,TRUE),
						"options_title"=> $value->options_title,
						"base_href"=> base_url().'categories/'.$this->categories_seo.'/detail/'.$value->post_id.'/'.$value->post_seo,
					];
					break;
				case 'default_detail':
					# mp post
					$this->mp[]=[
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"post_contents"=> $value->post_contents,
						"post_src"=> base_url().'assets/images/post/'.$value->post_src.'?v='.$value->post_timestamp,
						"post_timestamp"=> tanggal_indo($value->post_timestamp,TRUE),
						"options_title"=> $value->options_title,
						"options_seo"=> $value->options_seo,
						"base_url"=> base_url(),
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
	public function default_categories()
	{
		$this->db->select('post.post_id,post.post_title,post.post_contents,post.post_src,post.post_seo,post.post_timestamp,options.options_title,options.options_seo');
		$this->db->order_by('post.post_timestamp', 'DESC');
		$this->db->join('options', 'options.options_id = post.post_categories','left');
		$this->db->where('post.post_categories',$this->post_categories);
		$this->rows = $this->db->get('post')->result_object();
		$this->actions = 'default_categories';
		return $this->data_mp();
	}

	public function default_detail()
	{
		$this->db->select('post.post_id,post.post_title,post.post_contents,post.post_src,post.post_timestamp,options.options_title,options.options_seo');
		$this->db->order_by('post.post_timestamp', 'DESC');
		$this->db->join('options', 'options.options_id = post.post_categories','left');
		$this->db->where('post.post_id',$this->post_id);
		$this->rows = $this->db->get('post')->result_object();
		$this->actions = 'default_detail';
		return $this->data_mp();
	}

	/*====================================categories sub====================================*/
	public function categories_sub()
	{
		$this->actions= 'categories_sub';
		$this->rows= $this->db->get_where('options', ['options_id'=> $this->post_categories])->result_object();
		return $this->data_mp();
	}
	/*====================================end categories sub====================================*/
}