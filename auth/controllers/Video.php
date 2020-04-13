<?php
class Video extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Video_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data= array(
			'video'=>$this->Video_model->select_video()->result(),
		);
		$this->load->view('header');
		$this->load->view('navigation');

		if ($this->uri->segment(4)=='success') {
			if ($this->uri->segment(3)=='delete') {
				$message_fill= 'Data Berhasil Dihapus';

			}elseif ($this->uri->segment(3)=='insert') {
				$message_fill= 'Data Berhasil Ditambahkan';
			}elseif ($this->uri->segment(3)=='update') {
				$message_fill= 'Data Berhasil Diupdate';
			}

			$message= array(
				'message' => $message_fill,
			);

			$this->parser->parse('website/message',$message);
		}

		$this->parser->parse('video/index',$data);
		$this->load->view('footer');
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
	}

	function insert(){

		$data = [];
		// $image = $this->upload->data();
		$data['table'] = 'links_no_src';

		$this->load->helper('string');
		$data['post']	= array(
			'links_no_src_title'     	=> $this->input->post('title'),
			'links_no_src_description'          => $this->input->post('link'),
			'links_no_src_seo' 	=> seo_title($this->input->post('title')),
			'links_category_id' => 4,
		);
		$this->Video_model->insert_video($data['table'],$data['post']);
		redirect(base_url("video/index/insert/success"));
		// echo "<pre>";
		// print_r($data);

		// }

	}

	function edit(){
		$where = array('links_no_src_id' => $this->uri->segment('3'));

		$data 	= array(
			'video' 	=> $this->Video_model->edit_video($where,'links_no_src')->result(),
			// 'error' 	=> '',
		);

		$this->load->view('header');
		$this->load->view('navigation');
		$this->parser->parse('video/edit',$data);
		$this->load->view('footer');
	}

	function update(){

		$data = [];
		$data['table'] 	= 'links_no_src';
		$this->load->helper('string');
		$data['post'] 	= array('links_no_src_title'=>$this->input->post('title'),'links_no_src_description'=>$this->input->post('link'),'links_no_src_seo'=>seo_title($this->input->post('title')));
		$data['where'] 	= array('links_no_src_id'=>$this->input->post('id'));
		$this->Video_model->update_video($data['table'],$data['post'],$data['where']);
		redirect(base_url("video/index/update/success"));

	}

	function delete(){
		$where 	= array('links_no_src_id' => $this->uri->segment('3'));

		$this->Video_model->delete_video('links_no_src',$where);
		redirect(base_url("video/index/delete/success"));
	}
}
