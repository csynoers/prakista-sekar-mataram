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

		$this->load->model(['Post_model','Pages_model','Gallery_model','Options_model']);
    }

    public function menus()
    {
		$data['navs'] = [];

		/* initialize pages uri static */
		$category = array(
			'8' => 'artikel',
			'165' => 'produk',
			'168' => 'profil',
			'page' => 'halaman',
			'gallery' => 'galeri',
		);

		$data['categories'] = $this->Post_model->select_categories();
		foreach ($data['categories'] as $key => $value) {
			
			$nav = [
				'id' => $value['options_id'],
				'pages' => $category[ $value['options_id'] ],
				'title' => $value['options_title'],
			];
			$nav['json'] = json_encode($nav);
			$data['navs'][] = $nav; 
		}
		
		$data['pages'] = $this->Pages_model->select_pages();	
		foreach ($data['pages'] as $key => $value) {
			$nav = [
				'id' => $value['pages_id'],
				'pages' => $category['page'],
				'title' => $value['pages_title'],
			];
			$nav['json'] = json_encode($nav);
			$data['navs'][] = $nav;
		}

		$nav = [
			'id' => '10',
			'pages' => $category['gallery'],
			'title' => 'Galeri',
		];
		$nav['json'] = json_encode($nav);
		$data['navs'][] = $nav;

		// echo '<pre>';
		// print_r(json_encode($data['navs'],JSON_PRETTY_PRINT));
		// echo '</pre>';
        $this->pages = 'appearance/menus';
		$this->contents['base_url']= base_url();
		$this->contents['navs']= $data['navs'];
		$this->render_pages();
	}
	
	public function store()
	{
		$post = array(
			'options_contents' => $this->input->get('data')
		);

		# send post to model
		$this->Options_model->post = $post;

		# this id is statis
		$id = 189;

		# call store update
		if ( $this->Options_model->store( $id ) ) {
			echo 'TRUE';
		} else {
			echo 'FALSE';
		}
	}
}