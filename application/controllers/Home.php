<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/*
	*/
	function __construct(){
		parent::__construct();
		$this->load->model(['Home_model']);
		// $data= [];
	}

	public function index()
	{	
		$this->pages= 'home';
		$this->contents['slider']= $this->Home_model->home_slide();
		$this->contents['home_page']= $this->Home_model->home_welcome();
		$this->render_pages();
		// echo "<pre>";
		// print_r($this->contents);
		// echo "</pre>";
	}
}
