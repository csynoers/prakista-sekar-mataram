<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Appearance extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Data_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
    }

    public function menus()
    {
        $this->pages = 'appearance/menus';
		$this->contents= [];
		$this->render_pages();
    }
}