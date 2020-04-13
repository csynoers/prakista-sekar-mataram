<?php
class Pages extends MY_Controller{
	
	protected $data=[]; 
	function __construct(){
		parent::__construct();
		$this->load->model('Pages_model');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->pages 					= 'pages/index';
		$this->contents['pages']		= $this->Pages_model->select_pages();
		$this->contents['last_update']	= $this->Pages_model->last_update();
		$this->render_pages();
	}

	public function add(){
		$this->pages = 'pages/add';
		$this->render_pages();
	}

	public function insert(){
 
		$this->load->helper('string');
		$this->Pages_model->post = [
			'pages_title'     	=> $this->input->post('title'),
			'pages_contents' 	=> $this->input->post('contents'),
			'pages_seo' 		=> seo_title($this->input->post('title')),
			'pages_media' 		=> json_encode( ['form_embed'=>$this->input->post('embed')] ), 
		];

		if ( $this->Pages_model->insert_pages() )
		{
			redirect(base_url("pages/index/insert/?act=insert"));
		}
	}

	function edit(){
		$this->pages = 'pages/edit';
		$this->Pages_model->where = ['pages_id' => $this->uri->segment('3')];
		$this->contents['pages'] = $this->Pages_model->edit_pages();
		$this->render_pages();
	}

	function update()
	{
		$this->load->helper('string');
		$this->Pages_model->where = ['pages_id'=>$this->input->post('id')];
		$this->Pages_model->post = [
			'pages_title'     	=> $this->input->post('title'),
			'pages_contents' 	=> $this->input->post('contents'),
			'pages_seo' 		=> seo_title($this->input->post('title')),
		];

		if ( !empty($this->input->post('embed')) ) {
			$this->Pages_model->post['pages_media'] = json_encode( ['form_embed'=>$this->input->post('embed')] );
		}else{
			$this->Pages_model->post['pages_media']= NULL;
		}


		if ( $this->Pages_model->update_pages() )
		{
			redirect(base_url("pages/index/?act=update"));
		}

	}

	function delete(){
		$this->Pages_model->where = ['pages_id' => $this->uri->segment('3')];
		if ( $this->Pages_model->delete_pages() ) {
			redirect(base_url("pages/index/delete/?act=delete"));
		}
	}

	public function contact_footer()
	{
		$this->data['contents'] = $this->Pages_model->contact_footer();
		$this->load->view('header');
		$this->load->view('navigation');
		if ( !empty($this->input->get('act')=='update') ) {
			$this->Pages_model->post= [
				'options_contents' => $this->input->post('contents'), 
			];
			$this->data['update']= $this->Pages_model->update_contact_footer();
			$this->parser->parse('website/message', ['message'=>'Data Berhasil Diupdate']);
		}
		$this->parser->parse('pages/contact_footer',$this->data);
		$this->load->view('footer');

	}
}