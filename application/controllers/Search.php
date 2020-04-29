<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller {

	/*
	*/
	function __construct(){
		parent::__construct();
		$this->load->model(['Search_model']);
		$data=[];
	}

	public function index()
	{	

		if ( $this->input->get('a') ) {
			$this->pages='categories/default_detail';
			$this->Search_model->post_id= $this->input->get('id');
			$this->contents['contents']=$this->Search_model->search_detail();
			$this->header['seo_title']= $this->contents['contents'][0]['post_title']; 
			$this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['contents'][0]['post_contents'])); 
		}else{
			$this->pages= 'search/search';
			// $this->Search_model->categories_seo= 'artikel';
			$this->Search_model->match= $this->input->get('search');
			$this->contents['result_search']= count($this->Search_model->search()) > 0 ? '('.count($this->Search_model->search()).') search: '.$this->input->get('search') : $this->input->get('search').' tidak ditemukan'; 
			$this->contents['contents']= $this->Search_model->search(); 
			// $this->render_pages();
		}
		$this->render_pages();						
		// echo "<pre>";
		// print_r($this->contents);
		// echo "</pre>";
	}
}
