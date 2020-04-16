<?php
class Gallery extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','date'));
		$this->load->model('Gallery_model');

		$data=[];

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	protected function data_photo($data_photo){
		$data['rows']=[];
		foreach ($data_photo as $key => $value) {
			$this->Gallery_model->where= ['options_parent'=>$value->options_id];
			$rows=[
				"options_id"=>$value->options_id,
				"options_title"=>$value->options_title,
				"options_contents"=>$value->options_contents,
				"options_seo"=>$value->options_seo,
				"options_parent"=>$value->options_parent,
				"options_count"=> count($this->Gallery_model->edit_photo()),
				"options_timestamp"=>tanggal_indo($value->options_timestamp,TRUE),
			];
			array_push($data['rows'],$rows);
		}
		return $data['rows'];
	}
	public function photo()
	{
		$this->pages= 'photo/index';
		$this->contents['photo']= $this->data_photo($this->Gallery_model->select_photo());
		$this->render_pages();
	}

	public function add_photo()
	{
		$this->pages= 'photo/add';
		$this->render_pages();
	}
	public function insert_photo()
	{
		$this->load->helper('string');
		$this->Gallery_model->post	= array(
			'options_title'     	=> $this->input->post('title'),
			'options_seo' 		=> seo_title($this->input->post('title')),
			'options_parent'	=>13,
		);
		// $data['last_id'] = 19;

		#whith files upload
		$config['upload_path']          = '../assets/images/photo/';
		$config['allowed_types']        = 'jpg';
		$sizes = [256,128];
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('fupload')){
			$this->pages= 'photo/add';
			# flashdata
			$message = array(
				'alert' => 'alert-warning',
				'msg' => $this->upload->display_errors()
			);

			$this->session->set_flashdata('msg', $message);
			$this->render_pages();

		}else{
			// image resize
            $image = $this->upload->data();
			$this->load->helper('img');
			$this->load->library('image_lib');
            foreach ($sizes as $size) {
				$this->image_lib->clear();
				$this->image_lib->initialize( resize($size, $config['upload_path'], $image['file_name']) );
				$this->image_lib->resize();
			}
            // end image resize

			// $this->load->helper('string');
			$this->last_id = $this->Gallery_model->insert_photo();
			$this->Gallery_model->post= [
				'options_contents' 	=> $image['file_name'],
				'options_parent' 	=> $this->last_id,
			];
			$this->Gallery_model->where= ['options_parent'=>$this->last_id];
			if ( $this->Gallery_model->insert_photo() )
			{
				# flashdata
				$message = array(
					'alert' => 'alert-success',
					'msg' => 'Data berhasil ditambahkan'
				);

				$this->session->set_flashdata('msg', $message);
				redirect(base_url('gallery/edit-photo/'.$this->last_id));
			}			
		}
	}
	public	function edit_photo(){
		$this->pages= 'photo/edit'; 
		$this->Gallery_model->where= ['options_id'=>$this->uri->segment('3')];
		$this->contents['edit_photo_album']= $this->Gallery_model->edit_photo();
		$this->Gallery_model->where= ['options_parent'=>$this->uri->segment('3')];
		$this->contents['photo_rows']= $this->Gallery_model->edit_photo();
		$this->render_pages();
	}
	public function update_photo(){
		if (empty($_FILES['fupload']['tmp_name'])) {
			// without files upload
			$this->load->helper('string');
			$this->Gallery_model->where= ['options_id'=>$this->input->post('id')];
			$this->Gallery_model->post=[
				'options_title'=>$this->input->post('title'),
				'options_seo'=>seo_title($this->input->post('title')),
			];
			if ( $this->Gallery_model->update_photo() ) {
				redirect(base_url('gallery/edit-photo/'.$this->input->post('id').'/?action=update'));
			}

		}else{
			#whith files upload
			$this->Gallery_model->where= ['options_parent'=>$this->input->post('id')];
			$config['upload_path']          = '../assets/images/photo';
			$config['allowed_types']        = 'jpg';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('fupload')){
				$this->pages= 'photo/edit'; 
				$this->message['message']= $this->upload->display_errors();
				$this->Gallery_model->where= ['options_id'=>$this->input->post('id')];
				$this->contents['edit_photo_album']= $this->Gallery_model->edit_photo();
				$this->Gallery_model->where= ['options_parent'=>$this->input->post('id')];
				$this->contents['photo_rows']= $this->Gallery_model->edit_photo();
				$this->render_page_messages();

			}else{
				$image = $this->upload->data();
	            // image resize
	            $this->load->library('image_lib');
			    $config['image_library'] = 'gd2';
			    $config['source_image'] = $image['full_path'];
			    $config['new_image'] = '../assets/images/photo/thumb/256/'.$image['file_name'];
			    $config['create_thumb'] = FALSE;
			    $config['maintain_ratio'] = TRUE;
			    $config['width']     = 256;
			    $config['height']   = 256;

			    $this->image_lib->clear();
			    $this->image_lib->initialize($config);
			    $this->image_lib->resize();
	            // end image resize

	            // image resize
	            $this->load->library('image_lib');
			    $config['image_library'] = 'gd2';
			    $config['source_image'] = $image['full_path'];
			    $config['new_image'] = '../assets/images/photo/thumb/128/'.$image['file_name'];
			    $config['create_thumb'] = FALSE;
			    $config['maintain_ratio'] = TRUE;
			    $config['width']     = 128;
			    $config['height']   = 128;

			    $this->image_lib->clear();
			    $this->image_lib->initialize($config);
			    $this->image_lib->resize();
	            // end image resize

				$this->load->helper('string');
				$this->Gallery_model->post= [
					'options_contents' 	=> $image['file_name'],
					'options_parent' 	=> $this->input->post('id'),
				];
				if ( $this->Gallery_model->insert_photo() ) {
					redirect(base_url('gallery/edit_photo/'.$this->input->post('id').'/?act=update'));
				}
			}

		}
		// header('Content-Type: application/json');
		// echo json_encode($data);
	}
	public function delete_photo_album(){
		$this->id = $this->uri->segment(3);
		$this->Gallery_model->where= ['options_id'=>$this->id];
		$this->Gallery_model->delete_photo();

        $data['path']= '../assets/images/photo/';
		$this->Gallery_model->where= ['options_parent'=>$this->id];

        foreach ($this->Gallery_model->edit_photo() as $key => $value_data_foto) {

            if (file_exists($data['path'].$value_data_foto->options_contents)) {
                unlink($data['path'].$value_data_foto->options_contents);
                	if (file_exists($data['path']."thumb/256/".$value_data_foto->options_contents)) {
						unlink($data['path']."thumb/256/".$value_data_foto->options_contents);
							if (file_exists($data['path']."thumb/128/".$value_data_foto->options_contents)) {
								unlink($data['path']."thumb/128/".$value_data_foto->options_contents);
							}
					}
				$this->Gallery_model->where= ['options_id'=>$value_data_foto->options_id];
                $this->Gallery_model->delete_photo();
            }

			// print_r($value_data_foto);
        }
        redirect(base_url('gallery/photo/?act=delete'));
		// header('Content-Type:application/json');
		// echo json_encode($data);
	}

	public function video(){
		$this->pages= 'video/index';
		$this->contents['video']= $this->Gallery_model->select_video();
		$this->render_pages();
	}
	public function insert_video(){
		$data['post']= [
			'options_title' => $this->input->post('title'),
			'options_contents' => $this->input->post('link'),
			'options_parent' => 14,
		];
		$this->Gallery_model->insert_video($data['post']);
		redirect(base_url('gallery/video/?action=insert'));
		// header('Content-Type: application/json');
		// echo json_encode($data);
	}
	public function edit_video(){
		$this->pages= 'video/edit';
		$data['where'] = ['options_id'=>$this->uri->segment(3)];
		$data['video'] = $this->Gallery_model->edit_video($data['where']);
		
		$this->contents = $data;
		$this->render_pages();
	}
	public function update_video(){
		$data['where']=['options_id'=>$this->input->post('id')];
		$data['post']= [
			'options_title' => $this->input->post('title'),
			'options_contents' => $this->input->post('link'),
		];
		$this->Gallery_model->update_video($data['post'],$data['where']);
		redirect(base_url('gallery/video/?action=update'));
		// header('Content-Type: application/json');
		// echo json_encode($data);
	}
	public function delete_video(){
		$data['where']=['options_id'=>$this->uri->segment(3)];
		$this->Gallery_model->delete_video($data['where']);
		redirect(base_url('gallery/video/?action=delete'));
		// header('Content-Type: application/json');
		// echo json_encode($data);
	}

	public function delete_photo(){
        $data['path']= '../assets/images/photo/';
        $data['data_id'] = $this->input->post('id');
        foreach ($data['data_id'] as $value) {
            $data['data_foto'] = $this->Gallery_model->edit_photo(array('options_id' => $value));
            foreach ($data['data_foto'] as $key => $value_data_foto) {

                if (file_exists($data['path'].$value_data_foto->options_contents)) {
                    unlink($data['path'].$value_data_foto->options_contents);
                    	if (file_exists($data['path']."thumb/256/".$value_data_foto->options_contents)) {
							unlink($data['path']."thumb/256/".$value_data_foto->options_contents);
								if (file_exists($data['path']."thumb/128/".$value_data_foto->options_contents)) {
									unlink($data['path']."thumb/128/".$value_data_foto->options_contents);
								}
						}

                    $query= $this->Gallery_model->delete_photo(array('options_id'=>$value));
                } else {
                    echo "The $value_data_foto->options_contents file  does not exist";

                }

				print_r($value_data_foto);
            }
        }
    }
}
