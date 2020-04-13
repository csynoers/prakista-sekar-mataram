<?php
class Website extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Website_model');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function title()
	{
		$this->pages = 'website/title';
		$this->contents = ['title' => $this->Website_model->select_title()];
		$this->render_pages();
	}

	function keyword()
	{
		$this->pages = 'website/keyword';
		$this->contents = ['keyword' => $this->Website_model->select_keyword()];
		$this->render_pages();
	}

	function description()
	{
		$this->pages = 'website/description';
		$this->contents = ['description' => $this->Website_model->select_description()];
		$this->render_pages();
	}

	function update()
	{
		$this->Website_model->where = ['options_id'=>$this->uri->segment(3)];
		$this->Website_model->post = ['options_contents' => $this->input->post('options_contents')];

		if ( $this->Website_model->update_website() )
		{
			switch ($this->uri->segment(3))
			{
				case 1:
					#redirect title
					redirect(base_url("website/title/?act=update"));
					break;
				case 2:
					# redirect keyword
					redirect(base_url("website/keyword/?act=update"));
					break;
				case 3:
					# redirect description
					redirect(base_url("website/description/?act=update"));
					break;
				
				default:
					# code...
					break;
			}
			
		}

	}
}