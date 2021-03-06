<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Support extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Support_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	/*====================================contents_no_image====================================*/
	public function contents_no_image()
	{
		$this->pages= 'support/contents_no_image';
		$this->Support_model->id= $this->uri->segment(3);
		$this->contents['support']= $this->Support_model->contents_no_image_edit();
		$this->render_pages();
	}
	public function contents_no_image_update()
	{
		$id = $this->input->post('id');
		$this->Support_model->id= $id;
		$this->Support_model->post= [
			'options_title'=> $this->input->post('title'),
			'options_contents'=> $this->input->post('contents'),
		];
		if ( $this->Support_model->contents_no_image_update() ) {
			# flashdata
			$message = array(
				'alert' => 'alert-success',
				'msg' => 'Data berhasil diubah',
			);

			$this->session->set_flashdata('msg', $message);
			redirect( base_url('support/contents-no-image/'.$id) );
		}
	}
	/*====================================end contents_no_image====================================*/

	/*====================================image_link====================================*/
	public function image_link()
	{
		$this->pages= 'support/image_link';
		$this->Support_model->id= $this->uri->segment(3);
		$this->contents['categories']= $this->Support_model->image_link();
		$this->Support_model->where= $this->uri->segment(3);
		$this->contents['support']= $this->Support_model->image_link();
		$this->render_pages();
	}

	public function image_link_insert()
	{
		# get option parent
		$options_parent = $this->input->post('options_parent');

		$config['upload_path']= '../assets/images/image_link/';
		$config['allowed_types']= 'gif|jpg|png';
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('fupload')){
			$this->pages= "support/image_link";
			
			# send to model
			$this->Support_model->id= $options_parent;
			$this->contents['categories']= $this->Support_model->image_link();
			
			# send to model
			$this->Support_model->where= $options_parent;
			$this->contents['support']= $this->Support_model->image_link();

			# flashdata
			$message = array(
				'alert' => 'alert-warning',
				'msg' => $this->upload->display_errors(),
			);

			$this->session->set_flashdata('msg', $message);
			$this->render_pages();	

		}else{
			$fileData = $this->upload->data();
			// image resize
			$this->load->library('image_lib');
			$config['image_library']= 'gd2';
			$config['source_image']= $fileData['full_path'];
			$config['new_image']= '../assets/images/image_link/thumb/'.$fileData['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= TRUE;
			$config['height']= empty($this->input->post('height_thumb')) ? 0 : $this->input->post('height_thumb');

			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			// end image resize

			# load string helper
			$this->load->helper('string');

			# send to model
			$this->Support_model->post	= [
				'options_title'     	=> $this->input->post('title'),
				'options_contents' 		=> json_encode(['options_link'=>$this->input->post('link'),'options_image'=>$fileData['file_name']]),
				'options_seo' 			=> seo_title($this->input->post('title')),
				'options_parent'		=> $this->input->post('options_parent'),
			];

			# proses store if TRUE 
			if ( $this->Support_model->image_link_insert() ) {
				# flashdata
				$message = array(
					'alert' => 'alert-success',
					'msg' => 'Data berhasil disimpan',
				);

				$this->session->set_flashdata('msg', $message);
				redirect(base_url("support/image-link/{$options_parent}"));
			}

		}
	}

	public function image_link_edit()
	{
		$this->pages= 'support/image_link_edit';
		$this->Support_model->id= $this->uri->segment(3);
		$this->contents['support']= $this->Support_model->image_link_edit();
		$this->render_pages();
	}

	public function image_link_update()
	{
		if (empty($_FILES['fupload']['name'])) {#update without image
			$this->Support_model->id= $this->input->post('id');
			$this->rows= $this->Support_model->image_link_edit();
			
			$this->load->helper('string');
			$this->Support_model->post 	= [
				'options_title'=>$this->input->post('title'),
				'options_contents'=>json_encode([
					'options_link'=>$this->input->post('link'),
					'options_image'=>$this->rows[0]['options_image'],
				]),
				'options_seo'=>seo_title($this->input->post('title'))
			];

			if ( $this->Support_model->image_link_update() ) {
				# flashdata
				$message = array(
					'alert' => 'alert-success',
					'msg' => 'Data berhasil diubah',
				);

				$this->session->set_flashdata('msg', $message);
				redirect(base_url("support/image-link/".$this->rows[0]['options_parent']));
			}

		}else{#update with image
			$config['upload_path']          = '../assets/images/image_link/';
			$config['allowed_types']        = 'gif|jpg|png';	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('fupload')){
				$this->pages= 'support/image_link_edit';
				$this->Support_model->id= $this->input->post('id');

				$this->contents['support']= $this->Support_model->image_link_edit();
				$message = array(
					'alert' => 'alert-warning',
					'msg' => $this->upload->display_errors(),
				);

				$this->session->set_flashdata('msg', $message);
				$this->render_pages();

			}else{
				$this->Support_model->id= $this->input->post('id');
				$this->rows= $this->Support_model->image_link_edit();

				# unlink image
				if ( file_exists($config['upload_path'].$this->rows[0]['options_image']) ) {
					unlink($config['upload_path'].$this->rows[0]['options_image']);
					if ( file_exists($config['upload_path'].'thumb/'.$this->rows[0]['options_image']) ) {
						unlink($config['upload_path'].'thumb/'.$this->rows[0]['options_image']);
					}
				}

				# do upload image
				$fileData = $this->upload->data();

				// image resize
				$this->load->library('image_lib');
				$config['image_library']= 'gd2';
				$config['source_image']= $fileData['full_path'];
				$config['new_image']= "{$config['upload_path']}thumb/{$fileData['file_name']}";
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= TRUE;
				$config['height']= empty($this->input->post('height_thumb')) ? 0 : $this->input->post('height_thumb');

				$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				// end image resize

				$this->load->helper('string');
				$this->Support_model->post	= [
					'options_title' 	=> $this->input->post('title'),
					'options_contents'	=> json_encode(
						array(
							'options_link' 	=> $this->input->post('link'),
							'options_image' => $fileData['file_name'],
						)
					),
					'options_seo' 		=> seo_title($this->input->post('title')),
				];
				if ( $this->Support_model->image_link_update() ) {
					$message = array(
						'alert' => 'alert-success',
						'msg' => 'Data berhasil diubah',
					);
	
					$this->session->set_flashdata('msg', $message);
					redirect(base_url("support/image-link/".$this->rows[0]['options_parent']));
				}

			}
		}
	}

	public function image_link_delete()
	{
		$config['upload_path']          = '../assets/images/image_link/';

		# get id
		$this->Support_model->id= $this->uri->segment(3);

		# get rows from model
		$this->rows= $this->Support_model->image_link_edit();

		# unlink image
		if ( file_exists($config['upload_path'].$this->rows[0]['options_image']) ) {
			unlink($config['upload_path'].$this->rows[0]['options_image']);
			if ( file_exists($config['upload_path'].'thumb/'.$this->rows[0]['options_image']) ) {
				unlink($config['upload_path'].'thumb/'.$this->rows[0]['options_image']);
			}
		}
		if ( $this->Support_model->image_link_delete() ) {
			# flashdata
			$message = array(
				'alert' => 'alert-success',
				'msg' => 'Data berhasil dihapus',
			);

			$this->session->set_flashdata('msg', $message);
			redirect(base_url("support/image-link/".$this->rows[0]['options_parent']));
		}

	}
	/*====================================end image_link====================================*/

	/*====================================logo====================================*/
	public function logo_edit()
	{
		$this->pages= 'support/logo_edit';
		$this->contents['support']= $this->Support_model->logo_edit();
		$this->render_pages();
	}
	public function logo_update()
	{
		$config['upload_path']= '../assets/images/website';
		$config['allowed_types']= 'gif|jpg|png';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fupload'))
		{
			$this->pages= 'support/logo_edit';
			$this->contents['support']= $this->Support_model->logo_edit();
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
			$config['height']= $this->input->get('n')==74 ? 116 : 32;

			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			// end image resize

			$this->Support_model->options_id= $this->input->get('n');
			$this->rows= $this->Support_model->logo_edit();
			if ( file_exists('../assets/images/website/'.$this->rows[0]['options_image']) ) {
				unlink('../assets/images/website/'.$this->rows[0]['options_image']);
				if ( file_exists('../assets/images/website/thumb/'.$this->rows[0]['options_image']) ) {
					unlink('../assets/images/website/thumb/'.$this->rows[0]['options_image']);
				}
			}

			$this->post= ['options_contents'=>json_encode(['options_image'=> $fileData['file_name'] ])];

			if ( $this->Support_model->logo_update() ) {
				# flashdata
				$message = array(
					'alert' => 'alert-success',
					'msg' => 'Data berhasil diubah',
				);

				$this->session->set_flashdata('msg', $message);
				redirect(base_url('support/logo-edit'));
			}
		}
	}
	/*====================================end logo====================================*/
	
	/*====================================start informasi footer====================================*/
	public function contact_footer()
	{
		$this->pages= 'support/contact_footer';
		$this->contents['contents']= $this->Support_model->contact_footer();
		$this->render_pages();
	}
	public function contact_footer_update()
	{
		$this->Support_model->post= ['options_contents'=> $this->input->post('contents')];
		if ( $this->Support_model->contact_footer_update() ) {
		# flashdata
		$message = array(
			'alert' => 'alert-success',
			'msg' => 'Informasi footer berhasil diubah',
		);

		$this->session->set_flashdata('msg', $message);
			redirect(base_url('support/contact-footer'));
		}
	}
	/*====================================end informasi footer====================================*/

	/*====================================end video footer====================================*/
	public function video_footer()
	{
		$this->pages= 'support/video_footer';
		$this->contents['contents']= $this->Support_model->video_footer();
		$this->render_pages();
	}
	public function video_footer_update()
	{
		$this->Support_model->post= ['options_contents'=> $this->input->post('contents')];
		if ( $this->Support_model->video_footer_update() ) {
			redirect(base_url('support/video-footer/?act=update'));
		}
	}
	/*====================================end video footer====================================*/
}