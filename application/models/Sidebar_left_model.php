<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar_left_model extends CI_Model {
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
				case 'sidebar_left_informasi':
					# mp post
					// $this->count_post= ;
					$this->mp= $value->options_contents;
					break;
				case 'sidebar_right_post':
					$this->mp[]=[
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"post_src"=> $value->post_src,
						"post_timestamp"=> tanggal_indo($value->post_timestamp,TRUE),
						"options_title"=> $value->options_title,
						"options_seo"=> $value->options_seo,
						"base_url"=> base_url(),
					];
					break;
				case 'image_link':
					$json= json_decode($value->options_contents);
					$this->mp[]=[
						'options_title'=> $value->options_title,
						'options_link'=> $json->options_link,
						'img_src'=> base_url('assets/images/image_link/thumb/'.$json->options_image.'?v='.$value->options_timestamp),
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
	
	/*====================================sidebar_left_informasi====================================*/
	public function sidebar_left_informasi()
	{
		$this->actions= 'sidebar_left_informasi';
		$this->rows= $this->db->get_where("options",['options_id'=>89])->result_object();
		return $this->data_mp();
	}
	/*====================================end sidebar_left_informasi====================================*/

	/*====================================sidebar_right_post====================================*/
	public function sidebar_right_post()
	{
		$this->db->select('post.post_id,post.post_title,post.post_src,post.post_timestamp,options.options_title,options.options_seo');
		$this->db->order_by('post.post_timestamp', 'DESC');
		$this->db->join('options', 'options.options_id = post.post_categories','left');
		$this->db->where('post.post_categories',8);
		$this->db->limit(9);
		$this->rows = $this->db->get('post')->result_object();
		$this->actions = 'sidebar_right_post';
		return $this->data_mp();
	}
	/*====================================end sidebar_right_post====================================*/

	/*====================================image_link====================================*/
	public function image_link($options_parent){
		$this->actions= 'image_link';
		$this->rows= $this->db->get_where('options',['options_parent'=> $options_parent])->result_object();
		return $this->data_mp();
	}
	/*====================================end image_link====================================*/
}