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

	public function panduan_web()
	{
		$this->load->helper('download');

		force_download('../assets/pdf/prakasitasekarmataram.id.pdf',NULL);

		# flashdata
		// $message = array(
		// 	'alert' => 'alert-info',
		// 	'msg' => 'jika tidak ada proses download silahkan menghubungi jogjasite.com kembali, Terimakasih'
		// );

		// $this->session->set_flashdata('msg', $message);
		// redirect(base_url("admin"));
		echo "<script>window.alert('jika tidak ada proses download silahkan menghubungi jogjasite.com kembali, Terimakasih');window.location.href='".base_url('admin')."';</script>";
	}
}