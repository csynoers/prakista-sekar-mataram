<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
#
#
#
*/
class Admin extends MY_Controller{
 
	function __construct()
	{
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index()
	{
		$this->pages = 'admin';
		$this->render_pages();
	}
}