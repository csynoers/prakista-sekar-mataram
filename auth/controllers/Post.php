<?php
class Post extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Post_model');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	public function index()
	{
		$this->pages = 'post/index';
		$this->contents['post']= $this->Post_model->select_post();
		$this->contents['last_update']= $this->Post_model->last_update();
		$this->render_pages();
	}

	public function add()
	{
		$this->pages= 'post/add';
		$this->contents['categories']= $this->Post_model->post_add();
		$this->render_pages();
	}

	public function insert()
	{
		$config['upload_path']          = '../assets/images/post/';
		$config['allowed_types']        = 'gif|jpg|png';
		$sizes = [256,128];
			
		# load library upload
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('fupload')){
			$this->pages= 'post/add';
			$this->contents['categories']= $this->Post_model->post_add();
			# flashdata
			$message = array(
				'alert' => 'alert-warning',
				'msg' => $this->upload->display_errors()
			);

			$this->session->set_flashdata('msg', $message);
			$this->render_pages();

		}else{
			$image = $this->upload->data();
			$this->load->helper('img');
			$this->load->library('image_lib');
            foreach ($sizes as $size) {
				$this->image_lib->clear();
				$this->image_lib->initialize( resize($size, $config['upload_path'], $image['file_name']) );
				$this->image_lib->resize();
			}

			$this->load->helper('string');
			$this->Post_model->post	= array(
				'post_title'     		=> $this->input->post('title'),
				'post_categories'		=> $this->input->post('categories'),
				'post_contents' 		=> $this->input->post('contents'),
				'post_seo' 				=> seo_title($this->input->post('title')),
				'post_src' 				=> $image['file_name'],
			);
			if ( $this->Post_model->insert_post() ) {
				# flashdata
				$message = array(
					'alert' => 'alert-success',
					'msg' => 'Data berhasil ditambahkan'
				);

				$this->session->set_flashdata('msg', $message);
				redirect(base_url("post/index"));
			}

		}
	}

	public function edit()
	{
		$this->pages='post/edit';
		$this->Post_model->where=['post_id' => $this->uri->segment('3')];
		$this->contents['post'] 	= $this->Post_model->edit_post();
		$this->render_pages();
	}

	public function update(){
		if (empty($_FILES['fupload']['name'])){#update without image
			$this->load->helper('string');
			# get post form action
			$post = [
				'post_title'=>$this->input->post('title'),
				'post_categories'=>$this->input->post('categories'),
				'post_contents'=>$this->input->post('contents'),
				'post_seo'=>seo_title($this->input->post('title')),
			];

			# send data to model
			$this->Post_model->post = $data;

			$this->Post_model->where= ['post_id'=>$this->input->post('id')];

			if ( $this->Post_model->update_post() )
			{
				# flashdata
				$message = array(
					'alert' => 'alert-success',
					'msg' => 'Data berhasil diubah'
				);

				$this->session->set_flashdata('msg', $message);
				redirect(base_url('post'));
			}

		}else{#update with image
			# code...with upload file
			$config['upload_path']          = '../assets/images/post/';
			$config['allowed_types']        = 'gif|jpg|png';
			$sizes = [256,128];
			
			# load library upload
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('fupload')){
				$this->pages= 'post/edit';
				$this->Post_model->where= ['post_id' => $this->input->post('id')];
				$this->contents['post']= $this->Post_model->edit_post();
				# flashdata
				$message = array(
					'alert' => 'alert-warning',
					'msg' => $this->upload->display_errors()
				);

				$this->session->set_flashdata('msg', $message);
				$this->render_pages();
			}else{
				$this->Post_model->where= ['post_id' => $this->input->post('id')];
				$this->rows= $this->Post_model->post_data();
				$image 	= $this->rows[0]->post_src;
				$file 	= "{$config['upload_path']}{$image}";

				if ( file_exists($file) ) {
					unlink($file);
					foreach ($sizes as $size) {
						if ( file_exists("{$config['upload_path']}{$size}/{$image}") ) {
							unlink("{$config['upload_path']}{$size}/{$image}");
						}
					}
				}

				$image = $this->upload->data();
                /* start image resize */
                $this->load->helper('img');
                $this->load->library('image_lib');
                foreach ($sizes as $size) {
                    $this->image_lib->clear();
                    $this->image_lib->initialize( resize($size, $config['upload_path'], $image['file_name']) );
                    $this->image_lib->resize();
                }
				/* end image resize */

				# load string helper
				$this->load->helper('string');
				$this->Post_model->post	= array(
					'post_title'     	=> $this->input->post('title'),
					'post_categories'  	=> $this->input->post('categories'),
					'post_contents' 	=> $this->input->post('contents'),
					'post_seo' 			=> seo_title($this->input->post('title')),
					'post_src' 			=> $image['file_name'],
				);
				if ( $this->Post_model->update_post() ) {
					# flashdata
					$message = array(
						'alert' => 'alert-success',
						'msg' => 'Data berhasil diubah'
					);

					$this->session->set_flashdata('msg', $message);
					redirect(base_url("post"));
				};

			}

		}

	}

	public function delete(){
		$this->Post_model->where 	= ['post_id' => $this->uri->segment('3')];
		$this->rows= $this->Post_model->post_data();
		$image 	= $this->rows[0]->post_src;
		$file 	= "../assets/images/post/$image";

		if ( file_exists($file) ) {
			unlink($file);
			if ( file_exists("../assets/images/post/thumb/256/$image") ) {
				unlink("../assets/images/post/thumb/256/$image");
				if ( file_exists("../assets/images/post/thumb/128/$image") ) {
					unlink("../assets/images/post/thumb/128/$image");
				}
			}
		}

		if ( $this->Post_model->delete_post() ) {
			redirect(base_url("post/index/?act=delete"));
		}
	}

	public function categories(){
		$this->pages='post/categories';
		$this->contents['categories']=$this->Post_model->select_categories();
		$this->contents['last_update']=$this->Post_model->last_update_categories();
		$this->render_pages();
		// echo "<pre>";
		// print_r($this->contents);
	}
	public function add_sub_categories()
	{
		$this->pages= 'post/add_sub_categories';
		$this->contents['options_parent']= $this->uri->segment(3);
		$this->render_pages();
	}
	public function insert_sub_categories()
	{
		$this->load->helper('string');
		$config['upload_path']= '../assets/images/categories';
		$config['allowed_types']= 'gif|jpg|png';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fupload'))
		{
			$this->messages['message']= $this->upload->display_errors();
			$this->pages= 'post/add_sub_categories';
			$this->contents['options_parent']= $this->input->post('options_parent');
			$this->render_page_messages();
		}
		else{
			$fileData = $this->upload->data();
			// image resize
			$this->load->library('image_lib');
			$config['image_library']= 'gd2';
			$config['source_image']= $fileData['full_path'];
			$config['new_image']= '../assets/images/categories/thumb/120/'.$fileData['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= TRUE;
			$config['height']= 120;

			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			// end image resize

			$this->Post_model->post =[
				'options_title' => $this->input->post('title'),
				'options_contents' => json_encode(['options_desc'=>$this->input->post('contents'),'options_image'=>$fileData['file_name'] ]),
				'options_seo' => seo_title( $this->input->post('title')),
				'options_parent'=> $this->input->post('options_parent'),
			];

			if ( $this->Post_model->insert_categories() ) {
				redirect(base_url("post/edit-categories/".$this->input->post('options_parent').'/?act=update' ));
			}
		}
	}
	public function insert_categories(){
		$this->load->helper('string');
		$this->Post_model->post =[
			'options_title' => $this->input->post('title'),
			'options_parent' => $this->input->post('categories')=='null' ? '4':$this->input->post('categories'),
			'options_contents' => $this->input->post('categories')=='null' ? $this->input->post('contents') : json_encode(['options_desc'=>$this->input->post('contents'),'options_image'=>'1234567890.jpg']),
			'options_seo' => seo_title( $this->input->post('title')),
		];
		if ( $this->Post_model->insert_categories() ) {
			redirect(base_url("post/categories/?act=insert"));
		}
	}
	public function edit_categories(){
		$this->Post_model->where= ['options_id'=>$this->uri->segment(3)];
		$this->contents['content']= empty($this->input->get('sub')) ? $this->Post_model->edit_categories() : $this->Post_model->edit_categories_sub();
		$this->Post_model->where_parents= ['options_parent'=>$this->uri->segment(3)];
		$this->contents['categories']= $this->Post_model->categories_sub();
		$this->contents['options_parent']= $this->uri->segment(3);
		
		if ( empty($this->input->get('sub')) ) {
			if ( count($this->contents['categories']) > 0 ) {
				$this->pages= 'post/edit_categories_list' ;
			}else{
				$this->pages= 'post/edit_categories' ;
			}
		}else{
			$this->pages= 'post/edit_categories_sub' ;
		}
		// echo "<pre>";
		// print_r($this->contents);
		// echo "<pre>";
		$this->render_pages();
	}
	public function update_categories(){
		$this->load->helper('string');
		if ( empty($this->input->post('options_parent')) ) {
			$this->Post_model->options_id= $this->input->post('id');
			$this->Post_model->post =[
				'options_title' => $this->input->post('title'),
				'options_contents' =>  $this->input->post('contents'),
				'options_seo' => seo_title( $this->input->post('title')),
			];
			if ( $this->Post_model->update_categories() ) {
				redirect(base_url("post/categories/?act=update"));
			}
						
		}
		else{
			if ( empty($_FILES['fupload']['name']) ){#update without image
				$this->Post_model->options_id= $this->input->post('id');
				$this->Post_model->where= ['options_id'=>$this->input->post('id')];
				$this->rows= $this->Post_model->edit_categories_sub();
				$this->Post_model->post =[
					'options_title' => $this->input->post('title'),
					'options_contents' => json_encode(['options_desc'=>$this->input->post('contents'),'options_image'=>$this->rows[0]['options_image'] ]),
					'options_seo' => seo_title( $this->input->post('title')),
				];
				if ( $this->Post_model->update_categories() ) {
					redirect(base_url("post/edit-categories/".$this->input->post('options_parent').'/?act=update' ));
				}

			}else{#update with image
				$this->Post_model->options_id= $this->input->post('id');
				$config['upload_path']= '../assets/images/categories';
				$config['allowed_types']= 'gif|jpg|png';
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('fupload'))
				{
					$this->messages['message']= $this->upload->display_errors();
					$this->pages= 'post/edit_categories_sub';
					$this->Post_model->where= ['options_id'=>$this->input->post('id')];
					$this->contents['content']= $this->Post_model->edit_categories_sub();
					$this->render_page_messages();
				}
				else{
					$fileData = $this->upload->data();
					// image resize
					$this->load->library('image_lib');
					$config['image_library']= 'gd2';
					$config['source_image']= $fileData['full_path'];
					$config['new_image']= '../assets/images/categories/thumb/120/'.$fileData['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['height']= 120;

					$this->image_lib->clear();
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
					// end image resize

					$this->Post_model->where= ['options_id'=>$this->input->post('id')];
					$this->rows= $this->Post_model->edit_categories_sub();
					if ( file_exists('../assets/images/categories/'.$this->rows[0]['options_image']) ) {
						unlink('../assets/images/categories/'.$this->rows[0]['options_image']);
						if ( file_exists('../assets/images/categories/thumb/120/'.$this->rows[0]['options_image']) ) {
							unlink('../assets/images/categories/thumb/120/'.$this->rows[0]['options_image']);
						}
					}

					$this->Post_model->post =[
						'options_title' => $this->input->post('title'),
						'options_contents' => json_encode(['options_desc'=>$this->input->post('contents'),'options_image'=>$fileData['file_name'] ]),
						'options_seo' => seo_title( $this->input->post('title')),
					];

					if ( $this->Post_model->update_categories() ) {
						redirect(base_url("post/edit-categories/".$this->input->post('options_parent').'/?act=update' ));
					}
				}
			}
		}
		// echo "<pre>";
		// print_r($this->Post_model->post);
		// print_r($this->upload->do_upload('fupload'));
		// echo "<pre>";
	}
	public function delete_categories(){
		if ( empty( $this->input->get('sub') ) ) {
			$this->Post_model->id= $this->uri->segment(3);
			if ( $this->Post_model->delete_categories() ) {
				redirect(base_url("post/categories/?act=delete"));
			}
		}else{
			$this->Post_model->id= $this->uri->segment(3);
			$this->Post_model->where= ['options_id'=>$this->uri->segment(3)];
			$this->rows= $this->Post_model->edit_categories_sub();
			if ( file_exists('../assets/images/categories/'.$this->rows[0]['options_image']) ) {
				unlink('../assets/images/categories/'.$this->rows[0]['options_image']);
				if ( file_exists('../assets/images/categories/thumb/120/'.$this->rows[0]['options_image']) ) {
					unlink('../assets/images/categories/thumb/120/'.$this->rows[0]['options_image']);
				}
			}
			if ( $this->Post_model->delete_categories() ) {
				redirect(base_url('post/edit-categories/'.$this->input->get('sub').'/?act=delete'));
			}
		}
	}
}