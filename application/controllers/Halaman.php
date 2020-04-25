<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */

class Halaman extends MY_Controller {

	/*
	*/
	function __construct(){
		parent::__construct();
		$this->load->model([ 'Seo_model', 'Pages_model']);
	}

	public function index()
	{
		$this->pages='pages/single';
		$this->Pages_model->seo= $this->uri->segment(2);
		$this->contents['content']= $this->Pages_model->select_detail_pages();
		if ( $this->contents['content'][0]->pages_media != '' ) {
			$this->form_embed= $this->contents['content'][0]->pages_media;
		}
		// echo "<pre>";
		// print_r($this->Pages_model->select_detail_pages());
		// echo "</pre>";
		$this->render_pages();
	}
}
