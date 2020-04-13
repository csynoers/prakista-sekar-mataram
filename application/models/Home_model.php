<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * data slider
 * data service
 * data welcome
 * data testimoni
 */
class Home_model extends CI_Model {

	/*==var for manipulation==*/
	protected	$actions;
	protected 	$rows;
	protected 	$mp;
	protected 	$rows_sub;
	/*==var for manipulation==*/

	/*====================================data manipulation====================================*/
	protected function data_mp()
	{	
		$this->mp=[];
		$this->load->helper(['date','text']);
		foreach ( $this->rows as $key => $value ) {
			switch ( $this->actions ) {
				case 'home_slide':
					# mp feeds
					$this->sub_val= json_decode($value->options_contents, TRUE);
					$this->sub_val['base_url']=base_url();
					$this->mp[]=[
						// 'base_url'=> base_url(),
	                    'options_title' => $value->options_title,
	                    'options_contents' => [$this->sub_val],
					];
					break;
				case 'home_service':
					$this->mp[]=[
						'post_title'=> $value->post_title,
						'post_contents'=> character_limiter(strip_tags($value->post_contents), 150),
						'post_src'=> base_url().'assets/images/post/'.$value->post_src.'?v='.$value->post_timestamp,
						'base_href'=> base_url().'categories/pelayanan-dan-harga/detail/'.$value->post_id.'/'.$value->post_seo,
					];
					break;
				case 'home_artikel':
					$this->mp[]=[
						'post_title'=> $value->post_title,
						'post_contents'=> character_limiter(strip_tags($value->post_contents), 250),
						'post_src'=> base_url().'assets/images/post/'.$value->post_src.'?v='.$value->post_timestamp,
						'base_href'=> base_url().'categories/artikel/detail/'.$value->post_id.'/'.$value->post_seo,
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

	/*====================================Slide====================================*/
	public function home_slide()
	{
		$this->db->order_by('options_id','DESC');
		$this->rows= $this->db->get_where('options',['options_parent'=>11])->result_object();
		$this->actions='home_slide';
		return $this->data_mp();
	}
	/*====================================end Slide====================================*/

	/*====================================Welcome====================================*/
	public function home_welcome(){
		return $this->db->get_where('options',['options_id'=>47])->result_object();
	}
	/*====================================end Welcome====================================*/

	/*====================================services====================================*/
	public function home_service()
	{
		$this->actions= 'home_service';
		$this->db->order_by('post_id','DESC');
		$this->rows= $this->db->get_where("post",['post_categories'=>9])->result_object();
		return $this->data_mp();
	}
	/*====================================end services====================================*/
	
	/*====================================artikel====================================*/
	public function home_artikel()
	{
		$this->actions= 'home_artikel';
		$this->rows= $this->db->get_where("post",['post_categories'=>8])->result_object();
		return $this->data_mp();
	}
	/*====================================end artikel====================================*/
}