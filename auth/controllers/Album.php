<?php
class Album extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Album_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data= array(
			'album'=>$this->Album_model->select_album()->result()
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

		$this->parser->parse('album/index',$data);
		$this->load->view('footer');

		// echo "<pre>";
		// print_r($data);
	}

	function add(){
		$this->load->view('header');
		$this->load->view('navigation');
		$this->load->view('album/add',array('error' => ' ' ));
		$this->load->view('footer');
	}

	function insert(){
		$data = [];
		$data['table'] = 'album';

		$this->load->helper('string');
		$data['post']	= array(
			'album_title'     	=> $this->input->post('title'),
			'album_seo' 		=> seo_title($this->input->post('title')),
			'album_date'		=> date('Y-m-d'),
		);
		$last_id = $this->Album_model->insert_album($data['table'],$data['post']);

		// image
		$filesCount = count($_FILES['userFiles']['name']);
		for($i = 0; $i < $filesCount; $i++){
			$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
			$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
			$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
			$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
			$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

			$uploadPath = '../assets/images/photo/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('userFile')){
				$fileData = $this->upload->data();
				$uploadData[$i]['photo_src'] = $fileData['file_name'];
				$uploadData[$i]['album_id'] = $last_id;

				// image resize
	            $this->load->library('image_lib');
			    $config['image_library'] = 'gd2';
			    $config['source_image'] = $fileData['full_path'];
			    $config['new_image'] = '../assets/images/photo/thumb/256/'.$fileData['file_name'];
			    $config['create_thumb'] = FALSE;
			    $config['maintain_ratio'] = TRUE;
			    $config['max-width']     = 256;
			    $config['height']   = 256;

			    $this->image_lib->clear();
			    $this->image_lib->initialize($config);
			    $this->image_lib->resize();
	            // end image resize

	            // image resize
	            $this->load->library('image_lib');
			    $config['image_library'] = 'gd2';
			    $config['source_image'] = $fileData['full_path'];
			    $config['new_image'] = '../assets/images/photo/thumb/128/'.$fileData['file_name'];
			    $config['create_thumb'] = FALSE;
			    $config['maintain_ratio'] = TRUE;
			    $config['max-width']     = 128;
			    $config['height']   = 128;

			    $this->image_lib->clear();
			    $this->image_lib->initialize($config);
			    $this->image_lib->resize();
	            // end image resize

			}
		}

		if(!empty($uploadData)){
			//Insert file information into the database
			$insert = $this->Album_model->insert_photo($uploadData);
			$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
			$this->session->set_flashdata('statusMsg',$statusMsg);
		}


		redirect(base_url("album/edit/$last_id/success"));
		// echo "<pre>";
		// print_r($data);
		// print_r($uploadData);
		// echo "<pre>";


	}

	function edit(){
		$where = array('album_id' => $this->uri->segment('3'));

		$data 	= array(
			'album' 	=> $this->Album_model->edit_album($where,'album')->result(),
			'photo' 	=> $this->Album_model->edit_album_photo($where,'photo')->result(),
			// 'error' 	=> '',
		);

		$this->load->view('header');
		$this->load->view('navigation');
		$this->parser->parse('album/edit',$data);
		$this->load->view('footer');

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}

	function update(){

		$data = [];
		$data['table'] 	= 'album';
		$this->load->helper('string');
		$data['post'] 	= array('album_title'=>$this->input->post('title'),'album_seo'=>seo_title($this->input->post('title')));
		$data['where'] 	= array('album_id'=>$this->input->post('id'));
		$this->Album_model->update_album($data['table'],$data['post'],$data['where']);

		$id = $this->input->post('id');
		$filesCount = count($_FILES['userFiles']['name']);
		for($i = 0; $i < $filesCount; $i++){
			$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
			$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
			$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
			$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
			$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

			$uploadPath = '../assets/images/photo/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('userFile')){
				$fileData = $this->upload->data();
				$uploadData[$i]['photo_src'] = $fileData['file_name'];
				$uploadData[$i]['album_id'] = $id;


				// image resize
				$this->load->library('image_lib');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $fileData['full_path'];
				$config['new_image'] = '../assets/images/photo/thumb/256/'.$fileData['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['max-width']     = 256;
				$config['height']   = 256;

				$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				// end image resize

				// image resize
				$this->load->library('image_lib');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $fileData['full_path'];
				$config['new_image'] = '../assets/images/photo/thumb/128/'.$fileData['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['max-width']     = 128;
				$config['height']   = 128;

				$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				// end image resize


			}
		}

		if(!empty($uploadData)){
			//Insert file information into the database
			$insert = $this->Album_model->insert_photo($uploadData);
			$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
			$this->session->set_flashdata('statusMsg',$statusMsg);
		}


		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		redirect(base_url("album/edit/$id/success"));
	}

	function delete(){
		$where 	= array('album_id' => $this->uri->segment('3'));

		$this->Album_model->delete_album('album',$where);
		redirect(base_url("album/index/delete/success"));
	}

	public function delete_photo(){
		$data = [];
        $data['path']= '../assets/images/photo/';
        $data['data_id'] = $this->input->post('id');
        foreach ($data['data_id'] as $value) {
            $data['data_foto'] = $this->Album_model->select_where_photo('photo',array('photo_id' => $value))->result_object();
            foreach ($data['data_foto'] as $key => $value_data_foto) {

                if (file_exists($data['path'].$value_data_foto->photo_src)) {
                    unlink($data['path'].$value_data_foto->photo_src);
                    	if (file_exists($data['path']."thumb/256/".$value_data_foto->photo_src)) {
							unlink($data['path']."thumb/256/".$value_data_foto->photo_src);
								if (file_exists($data['path']."thumb/128/".$value_data_foto->photo_src)) {
									unlink($data['path']."thumb/128/".$value_data_foto->photo_src);
								}
						}

                    $query= $this->Album_model->delete_where_photo('photo',array('photo_id'=>$value));
                } else {
                    echo "The $value_data_foto->photo_src file  does not exist";

                }

				print_r($value_data_foto);
            }
        }
    }
}
