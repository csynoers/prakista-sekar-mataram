<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Categories_model');
	}
	public function index()
	{
		$this->pages='categories/default';
		$this->Categories_model->post_categories=9;
		$this->Categories_model->categories_seo= 'pelayanan-dan-harga';
		$this->contents['contents']=$this->Categories_model->default_categories();
		$this->render_pages();
	}
	public function pelayanan_dan_harga()
	{
		if ( $this->uri->segment(3)=='detail' ) {
			$this->pages='categories/default_detail';
			$this->Categories_model->post_id= $this->uri->segment(4);
			$this->contents['contents']=$this->Categories_model->default_detail();
			$this->header['seo_title']= $this->contents['contents'][0]['post_title']; 
			$this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['contents'][0]['post_contents'])); 
			$this->render_pages();						
		}else{
			$this->pages='categories/default';
			$this->Categories_model->post_categories=9;
			$this->Categories_model->categories_seo= 'pelayanan-dan-harga';
			$this->contents['contents']=$this->Categories_model->default_categories();
			$this->render_pages();			
		}
	}
	public function proyek()
	{
		if ( $this->uri->segment(3)=='detail' ) {
			$this->pages='categories/default_detail';
			$this->Categories_model->post_id= $this->uri->segment(4);
			$this->contents['contents']= $this->Categories_model->default_detail();
			$this->header['seo_title']= $this->contents['contents'][0]['post_title']; 
			$this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['contents'][0]['post_contents'])); 
			$this->render_pages();						
		}else{
			$this->pages= 'categories/default';
			$this->Categories_model->post_categories= 87;
			$this->Categories_model->categories_seo= 'proyek';
			$this->contents['contents']= $this->Categories_model->default_categories();
			$this->render_pages();
		}
	}
	public function artikel()
	{
		if ( $this->uri->segment(3)=='detail' ) {
			$this->pages='categories/default_detail';
			$this->Categories_model->post_id= $this->uri->segment(4);
			$this->contents['contents']=$this->Categories_model->default_detail();
			$this->header['seo_title']= $this->contents['contents'][0]['post_title']; 
			$this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['contents'][0]['post_contents'])); 
			$this->render_pages();						
		}else{
			$this->pages='categories/default';
			$this->Categories_model->post_categories=8;
			$this->Categories_model->categories_seo= 'artikel';
			$this->contents['contents']=$this->Categories_model->default_categories();
			$this->render_pages();			
		}
	}
}
