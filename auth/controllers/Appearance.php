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
		$data['categories'] = $this->Post_model->select_categories();
		foreach ($data['categories'] as $key => $value) {
			// $this->Post_model->where_parents= ['options_id'=>0];
			$this->Post_model->where_parents= ['options_parent'=>$value['options_id']];
			$data['categories'][$key]['rows'] = $this->Post_model->categories_sub();
		}
		$data['pages'] = $this->Pages_model->select_pages();
		
		// $this->Gallery_model->where= ['options_parent'=>187];
		// $data['photo_rows']= $this->Gallery_model->edit_photo();
		// $data['video']= $this->Gallery_model->select_video();

		
		$data['navs'] = [];
		foreach ($data['categories'] as $key => $value) {
			$level_1 = [];
			foreach ($value['rows'] as $key_level_1 => $value_level_1) {
				$level_1[] = [
					'pages' => 'category_level_1',
					'href' => "category/{$value['options_id']}/{$value_level_1['options_id']}",
					'title' => $value_level_1['options_title'],
				];
			}
			$nav = [
				'pages' => 'category',
				'href' => count($level_1) > 0 ? '#' : "category/{$value['options_id']}",
				'li_class' => count($level_1) > 0 ? 'dropdown' : NULL ,
				'a_class' => count($level_1) > 0 ? 'dropdown-toggle' : NULL ,
				'a_data_toggle' => count($level_1) > 0 ? 'dropdown' : NULL ,
				'title' => $value['options_title'],
				'rows' => $level_1,
			];
			$nav['json'] = json_encode($nav);
			$data['navs'][] = $nav; 
		}

		foreach ($data['pages'] as $key => $value) {
			$nav = [
				'pages' => 'page',
				'href' => "page/{$value['pages_id']}",
				'li_class' => NULL ,
				'a_class' => NULL ,
				'a_data_toggle' => NULL ,
				'title' => $value['pages_title'],
				'rows' => [],
			];
			$nav['json'] = json_encode($nav);
			$data['navs'][] = $nav;
		}
		$nav = [
			'pages' => 'gallery',
			'href' => '#',
			'li_class' => 'dropdown',
			'a_class' => 'dropdown-toggle',
			'a_data_toggle' => 'dropdown',
			'title' => 'Galeri',
			'rows' => [
				[
					'pages' => 'gallery',
					'href' => "gallery/foto",
					'title' => 'Galeri Foto',
				],
				[
					'pages' => 'gallery',
					'href' => "gallery/video",
					'title' => 'Galeri Video',
				],
			]
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