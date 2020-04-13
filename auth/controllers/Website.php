<?php
class Website extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Website_model');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	public function title()
	{
		$this->pages = 'website/title';
		$this->contents = ['title' => $this->Website_model->select_title()];
		$this->render_pages();
	}

	public function keyword()
	{
		$this->pages = 'website/keyword';
		$this->contents = ['keyword' => $this->Website_model->select_keyword()];
		$this->render_pages();
	}

	public function description()
	{
		$this->pages = 'website/description';
		$this->contents = ['description' => $this->Website_model->select_description()];
		$this->render_pages();
	}

	public function update()
	{
		# get key of page
		$options_id = $this->uri->segment(3);

		# send data to model
		$this->Website_model->where = ['options_id'=> $options_id];
		$this->Website_model->post = ['options_contents' => $this->input->post('options_contents')];

		# update process
		$this->Website_model->update_website();

		$page = [
			'1' => 'title',
			'2' => 'keyword',
			'3' => 'description',
		];

		# flashdata
		$message = array(
			'alert' => 'alert-success',
			'msg' => 'Data berhasil diubah'
		);

		$this->session->set_flashdata('msg', $message);
		redirect(base_url("website/{$page[$options_id]}"));
	}
}