<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Search_model extends CI_Model
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
				case 'search':
					# mp post
					$this->mp[]=[
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"post_contents"=> character_limiter(strip_tags($value->post_contents), 336),
						"post_src"=> base_url().'assets/images/post/'.$value->post_src.'?v='.$value->post_timestamp,
						"post_timestamp"=> tanggal_indo($value->post_timestamp,TRUE),
						"options_title"=> $value->options_title,
						// "base_href"=> base_url().'categories/'.$this->categories_seo.'/detail/'.$value->post_id.'/'.$value->post_seo,
						"base_href"=> base_url().'search/?a=detail&id='.$value->post_id,
					];
					break;
				case 'search_detail':
					# mp post
					$this->mp[]=[
						"post_id"=> $value->post_id,
						"post_title"=> $value->post_title,
						"post_contents"=> $value->post_contents,
						"display_src"=> $value->display_src,
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
	public function search()
	{
		$this->db->select('post.post_id,post.post_title,post.post_contents,post.post_src,post.post_seo,post.post_timestamp,options.options_title,options.options_seo');
		$this->db->order_by('post.post_timestamp', 'DESC');
		$this->db->join('options', 'options.options_id = post.post_categories','left');
		// $this->db->where('post.post_categories',$this->post_categories);
		$this->db->like('post.post_title', $this->match);
		$this->db->or_like('post.post_contents', $this->match);
		$this->rows = $this->db->get('post')->result_object();
		$this->actions = 'search';
		return $this->data_mp();
	}
	public function search_detail()
	{
		$this->db->select("post.post_id,post.post_title,post.post_contents,post.post_src,post.post_timestamp,options.options_title,options.options_seo,IF(post.post_src='','d-none',NULL) AS display_src");
		$this->db->order_by('post.post_timestamp', 'DESC');
		$this->db->join('options', 'options.options_id = post.post_categories','left');
		$this->db->where('post.post_id',$this->post_id);
		$this->rows = $this->db->get('post')->result_object();
		$this->actions = 'search_detail';
		return $this->data_mp();
	}
}