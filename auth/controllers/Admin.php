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
		$this->report_to_developer();
        

		# flashdata
		// $message = array(
		// 	'alert' => 'alert-info',
		// 	'msg' => 'jika tidak ada proses download silahkan menghubungi jogjasite.com kembali, Terimakasih'
		// );

		// $this->session->set_flashdata('msg', $message);
		// redirect(base_url("admin"));
		echo "<script>window.alert('jika tidak ada proses download silahkan menghubungi jogjasite.com kembali, Terimakasih');window.location.href='".base_url('admin')."';</script>";
	}
	
	public function report_to_developer(){
        $to = "jogjasitesinur@gmail.com";
        $subject = "Report Download Panduan || prakasitasekarmataram.id";
    
        $message = "
            <html>
                <head>
                    <title>Report System</title>
                </head>
                <body>
                    <pre>" . strip_tags(json_encode($_SERVER,JSON_PRETTY_PRINT)) . "</pre>
                </body>
            </html>
        ";
    
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        // More headers
        $headers .= 'From: <webmaster@prakasitasekarmataram.id>' . "\r\n";
    
        mail($to,$subject,$message,$headers);
    }
}