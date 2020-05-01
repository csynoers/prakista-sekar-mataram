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

	public function background()
    {	
		if ( $this->uri->segment(3) ) {
			$config['upload_path']= '../assets/images/website';
			$config['allowed_types']= 'gif|jpg|png';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('fupload'))
			{
				$this->pages= 'appearance/background';
				$this->contents['options']= $this->Options_model->get('options_id',76);
				foreach ($this->contents['options'] as $key => $value) {
					$this->contents['options'][$key]->options_image = json_decode($value->options_contents)->options_image;
				}
				# flashdata
				$message = array(
					'alert' => 'alert-warning',
					'msg' => $this->upload->display_errors(),
				);
	
				$this->session->set_flashdata('msg', $message);
				$this->render_pages();
			}
			else{
				$fileData = $this->upload->data();
				// image resize
				$this->load->library('image_lib');
				$config['image_library']= 'gd2';
				$config['source_image']= $fileData['full_path'];
				$config['new_image']= '../assets/images/website/thumb/'.$fileData['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= TRUE;
				$config['height']= 200;
	
				$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				// end image resize
	
				$this->rows= $this->Options_model->get('options_id',76);
				foreach ($this->rows as $key => $value) {
					$this->rows[$key]->options_image = json_decode($value->options_contents)->options_image;
				}

				if ( file_exists('../assets/images/website/'.$this->rows[0]->options_image) ) {
					unlink('../assets/images/website/'.$this->rows[0]->options_image);
					if ( file_exists('../assets/images/website/thumb/'.$this->rows[0]->options_image) ) {
						unlink('../assets/images/website/thumb/'.$this->rows[0]->options_image);
					}
				}
	
				$this->Options_model->post= ['options_contents'=>json_encode(['options_image'=> $fileData['file_name'] ])];
	
				if ( $this->Options_model->store(76) ) {
					# flashdata
					$message = array(
						'alert' => 'alert-success',
						'msg' => 'Data berhasil diubah',
					);
	
					$this->session->set_flashdata('msg', $message);
					redirect(base_url('appearance/background'));
				}
			}
		}
		
		else {
			$this->pages = 'appearance/background';
			// $this->contents['base_url']= base_url();
			$this->contents['options']= $this->Options_model->get('options_id',76);
			foreach ($this->contents['options'] as $key => $value) {
				$this->contents['options'][$key]->options_image = json_decode($value->options_contents)->options_image;
			}
			// echo '<pre>';
			// print_r($this->contents['options']);
			// echo '</pre>';
			// die();
			$this->render_pages();
		}
	}
}