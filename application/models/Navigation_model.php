<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Navigation_model extends CI_Model {
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
		$this->load->helper(['date','text']);
		foreach ( $this->rows as $key => $value ) {
			switch ( $this->actions ) {
				case 'logo':
					$this->json=json_decode($value->options_contents);
					$this->mp= $this->json->options_image.'?v='.$value->options_timestamp;
					break;
				
				default:
					# code...
					break;
			}
		}
		return $this->mp;
	}
	/*====================================end data manipulation====================================*/

	/*====================================logo Website====================================*/
	public function logo(){
		$this->actions= 'logo';
		$this->db->select('options_contents, options_timestamp');
		$this->rows= $this->db->get_where('options', ['options_id'=> 74])->result_object();
		return $this->data_mp();
	}
	/*====================================end logo Website====================================*/
	public function nav_service()
	{
		return $this->db->get_where("options",['options_parent'=>68])->result_object();
	}
	function select_tentang_kami()
	{
		$this->db->select('contents_no_src_title,contents_no_src_seo');
		$this->db->order_by('contents_no_src_title','ASC');
		$query = $this->db->get_where('contents_no_src',['contents_category_id'=>3]);
		return $query;
	}

	function select_kategori()
	{
		$this->db->select('kategori_hukum_judul,kategori_hukum_seo');
		$this->db->order_by('kategori_hukum_judul','ASC');
		$query = $this->db->get('kategori_hukum');
		return $query;
	}

	function select_tahun_produk_hukum()
	{
		$data = [];
		$data['min'] = '2005';
		$data['max'] = '2018';
		$data['mp']= "";
		for ($i=$data['max']; $i >= $data['min'] ; $i--) { 
			$data['mp'][]= ['years_desc'=>$i];
		}
		// $rsort= rsort($data['mp']);
		return $data['mp'];
		// return $rsort;
	}

	function select_date_now()
	{
		return date('Y-m-d');
	}

	public function data_rules_center()
	{
		$this->db->select('*');
		$this->db->from('links_no_src');
		$this->db->where(['links_category_id'=>3]);
		$this->db->order_by('links_no_src_title','ASC');
		$query = $this->db->get()->result_object();
		return $query;
	}

	public function select_running_text()
	{
		$this->db->select('*');
		$this->db->order_by('contents_no_src_id', 'DESC');
		$query = $this->db->get_where('contents_no_src',['contents_category_id'=>4]);

		return $query;
	}

	public function data_navigation()
	{
		$this->load->helper('date');
		$data = [];
		$data['running-text'] = $this->select_running_text()->result_object();
		$data['date-now'] = tanggal_indo($this->select_date_now(),TRUE);
		$data['tentang-kami'] = $this->select_tentang_kami()->result_object();
		$data['kategori'] = $this->select_kategori()->result_object();
		$data['tahun'] = $this->select_tahun_produk_hukum();
		$data['peraturan-pusat'] = $this->data_rules_center();
		return $data;
	}

}