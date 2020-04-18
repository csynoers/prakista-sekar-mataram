<?php
class Slide_show extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Slide_show_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->pages='slide_show/index';
		$this->contents=['slide_show'=>$this->Slide_show_model->select_slide_show()];
		$this->render_pages();
	}

	function insert(){
		$config['upload_path']          = '../assets/images/slide_show/';
		$config['allowed_types']        = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('fupload')){
			$this->pages= 'slide_show/index';
			$this->contents['slide_show'] = $this->Slide_show_model->select_slide_show();
			# flashdata
			$message = array(
				'alert' => 'alert-success',
				'msg' => $this->upload->display_errors(),
			);
			
			$this->session->set_flashdata('msg', $message);	
			$this->render_pages();

		}else{
			# get data upload
			$image = $this->upload->data();

			$data['table'] = 'options';

			$this->load->helper('string');
			$data['post']	= array(
				'options_contents' 		=> json_encode([
					'options_caption'=>$this->input->post('caption'),
					'options_image'=>$image['file_name']
				]),
				'options_parent'		=> '11',
			);

			$this->Slide_show_model->insert_slide_show($data['table'],$data['post']);
			# flashdata
			$message = array(
				'alert' => 'alert-success',
				'msg' => 'Data berhasil ditambahkan',
			);
			
			$this->session->set_flashdata('msg', $message);	
			redirect(base_url("slide_show"));
		}

	}

	public function edit(){
		$this->pages= 'slide_show/edit';
		$this->Slide_show_model->where = ['options_id' => $this->uri->segment('3')];
		$this->contents['slide_show'] = $this->Slide_show_model->edit_slide_show();
		$this->render_pages();
	}

	function update(){
		if (empty($_FILES['fupload']['name'])) {#update without image

			$this->Slide_show_model->where= ['options_id'=>$this->input->post('id')];
			$this->rows= $this->Slide_show_model->edit_slide_show();
			$this->load->helper('string');
			$this->post= [
				// 'options_title'=>$this->input->post('title'),
				'options_contents'=>json_encode([
					// 'options_link'=>$this->input->post('link'),
					'options_caption'=>$this->input->post('caption'),
					'options_image'=>$this->rows[0]['options_image'],
				]),
				// 'options_seo'=>seo_title($this->input->post('title'))
			];
			if ( $this->Slide_show_model->update_slide_show() ) {
				redirect(base_url("slide_show/index/update/?act=update"));
			}

		}else{#update with image
			$config['upload_path']          = '../assets/images/slide_show';
			$config['allowed_types']        = 'gif|jpg|png';
	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('fupload')){
				$this->pages= 'slide_show/edit';
				$this->messages['message']= $this->upload->display_errors()."max_width : 1500px and max_height : 600px";
				$this->Slide_show_model->where= ['options_id' => $this->input->post('id')];
				$this->contents['slide_show']= $this->Slide_show_model->edit_slide_show();
				$this->render_page_messages();
			}else{
				$this->Slide_show_model->where= ['options_id' => $this->input->post('id')];
				$this->data= $this->Slide_show_model->edit_slide_show();
				$image 	= $this->data[0]['options_image'];
				$file 	= "../assets/images/slide_show/$image";

				if ( file_exists($file) ) {
					unlink($file);
				}

				$image = $this->upload->data();
				$this->load->helper('string');
				$this->Slide_show_model->post= [
					// 'options_title'=> $this->input->post('title'),
					'options_contents'=> json_encode([
						// 'options_link'=> $this->input->post('link'),
						'options_caption'=> $this->input->post('caption'),
						'options_image'=> $image['file_name'],
					]),
					// 'options_seo' => seo_title($this->input->post('title')),
				];

				if ( $this->Slide_show_model->update_slide_show() ) {
					redirect(base_url("slide_show/index/update/?act=update"));
				}
			}
		}
	}

	function delete(){
		$this->Slide_show_model->where = ['options_id' => $this->uri->segment('3')];
		$this->data= $this->Slide_show_model->edit_slide_show();
		$image 	= $this->data[0]['options_image'];
		$file 	= "../assets/images/slide_show/$image";

		if ( file_exists($file) ) {
			unlink($file);
		}
		if ( $this->Slide_show_model->delete_slide_show() ) {
			redirect(base_url("slide_show/index/?act=delete"));
		}

	}
}