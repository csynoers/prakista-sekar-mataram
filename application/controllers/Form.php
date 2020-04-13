<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	protected $post=[];
	protected $data=[];

	/*
	*/
	function __construct(){
		parent::__construct();

		$this->load->model(['Form_model']);
		// $this->load->model(['Seo_model','Navigation_model','Home_model','Agenda_model','Sidebar_right_model','Footer_model']);
	}

	public function aksi_daftar(){
		$this->post['nama_lengkap']= strip_tags($this->input->post('nama_lengkap'));
		$this->post['contents']['tempat_lahir']= strip_tags($this->input->post('tempat_lahir'));
		$this->post['contents']['tanggal_lahir']= strip_tags($this->input->post('tanggal_lahir'));
		$this->post['contents']['usia']= strip_tags($this->input->post('usia'));
		$this->post['contents']['agama']= strip_tags($this->input->post('agama'));
		$this->post['contents']['berat_badan']= strip_tags($this->input->post('berat_badan'));
		$this->post['contents']['tinggi_badan']= strip_tags($this->input->post('tinggi_badan'));
		$this->post['contents']['alamat_rumah_tetap']= strip_tags($this->input->post('alamat_rumah_tetap'));
		$this->post['contents']['no']= strip_tags($this->input->post('no'));
		$this->post['contents']['rt']= strip_tags($this->input->post('rt'));
		$this->post['contents']['rw']= strip_tags($this->input->post('rw'));
		$this->post['contents']['dusun']= strip_tags($this->input->post('dusun'));
		$this->post['contents']['desa']= strip_tags($this->input->post('desa'));
		$this->post['contents']['kec']= strip_tags($this->input->post('kec'));
		$this->post['contents']['kab']= strip_tags($this->input->post('kab'));
		$this->post['contents']['prop']= strip_tags($this->input->post('prop'));
		$this->post['contents']['kode_pos']= strip_tags($this->input->post('kode_pos'));
		$this->post['contents']['telepon']= strip_tags($this->input->post('telepon'));
		$this->post['contents']['handphone']= strip_tags($this->input->post('handphone'));
		$this->post['contents']['email']= strip_tags($this->input->post('email'));
		$this->post['contents']['asal_sekolah']= strip_tags($this->input->post('asal_sekolah'));
		$this->post['contents']['jurusan']= strip_tags($this->input->post('jurusan'));
		$this->post['contents']['nama_bapak']= strip_tags($this->input->post('nama_bapak'));
		$this->post['contents']['usia_bapak']= strip_tags($this->input->post('usia_bapak'));
		$this->post['contents']['pekerjaan_bapak']= strip_tags($this->input->post('pekerjaan_bapak'));
		$this->post['contents']['nama_ibu']= strip_tags($this->input->post('nama_ibu'));
		$this->post['contents']['usia_ibu']= strip_tags($this->input->post('usia_ibu'));
		$this->post['contents']['pekerjaan_ibu']= strip_tags($this->input->post('pekerjaan_ibu'));
		$this->post['contents']['no_ot']= strip_tags($this->input->post('no_ot'));
		$this->post['contents']['rt_ot']= strip_tags($this->input->post('rt_ot'));
		$this->post['contents']['rw_ot']= strip_tags($this->input->post('rw_ot'));
		$this->post['contents']['dusun_ot']= strip_tags($this->input->post('dusun_ot'));
		$this->post['contents']['desa_ot']= strip_tags($this->input->post('desa_ot'));
		$this->post['contents']['kec_ot']= strip_tags($this->input->post('kec_ot'));
		$this->post['contents']['kab_ot']= strip_tags($this->input->post('kab_ot'));
		$this->post['contents']['prop_ot']= strip_tags($this->input->post('prop_ot'));
		$this->post['contents']['kode_pos_ot']= strip_tags($this->input->post('kode_pos_ot'));
		$this->post['contents']['quest_a']= strip_tags($this->input->post('quest_a'));
		$this->post['contents']['quest_a_ket']= strip_tags($this->input->post('quest_a_ket'));
		$this->post['contents']['quest_b']= strip_tags($this->input->post('quest_b'));
		$this->post['contents']['quest_b_ket']= strip_tags($this->input->post('quest_b_ket'));
		$this->post['contents']['quest_c']= strip_tags($this->input->post('quest_c'));
		$this->post['contents']['quest_c_ket']= strip_tags($this->input->post('quest_c_ket'));
		$this->post['contents']['alasan']= strip_tags($this->input->post('alasan'));

		$config['upload_path']          = 'assets/images/form';
		$config['allowed_types']        = 'jpg';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library( 'upload' , $config );
 
		if ( ! $this->upload->do_upload('fupload') ){
			$this->data['message'] = $this->upload->display_errors();
			redirect( base_url("pages/formulir-pendaftaran/?p=0&msg=".$this->data['message']) );

		}else{
			$image = $this->upload->data();
            // image resize
            $this->load->library('image_lib');
		    $config['image_library'] = 'gd2';
		    $config['source_image'] = $image['full_path'];
		    $config['new_image'] = 'assets/images/form/thumb/256/'.$image['file_name'];
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
		    $config['new_image'] = 'assets/images/form/thumb/128/'.$image['file_name'];
		    $config['create_thumb'] = FALSE;
		    $config['maintain_ratio'] = TRUE;
		    $config['width']     = 128;
		    $config['height']   = 128;

		    $this->image_lib->clear();
		    $this->image_lib->initialize($config);
		    $this->image_lib->resize();
            // end image resize

			// $this->load->helper('string');
			// $data['post']	= array(
			// 	'post_title'     		=> $this->input->post('title'),
			// 	'post_categories'		=> $this->input->post('categories'),
			// 	'post_contents' 		=> $this->input->post('contents'),
			// 	'post_seo' 				=> seo_title($this->input->post('title')),
			// 	'post_src' 				=> $image['file_name'],
			// );
			$this->post['contents']['file_name'] = $image['file_name'];
			$this->post['form_parent']= 2;
		}
		$this->data['insert']=[
			'form_title'=>$this->post['nama_lengkap'],
			'form_contents'=>json_encode($this->post['contents']),
			'form_parent'=>$this->post['form_parent'],
		];
		$this->Form_model->insert_form($this->data['insert']);
		redirect(base_url( "pages/formulir-pendaftaran?p=1&mail=".$this->post['contents']['email'] ));

		// echo "<pre>";
		// print_r($this->post);
		// print_r($this->data);
	}

	public function contact_send()
	{
		$this->post['title'] = strip_tags($this->input->post('title'));
		$this->post['contents']['email'] = strip_tags($this->input->post('email'));
		$this->post['contents']['no_telp'] = strip_tags($this->input->post('no_telp'));
		$this->post['contents']['contents'] = strip_tags($this->input->post('contents'));
		$this->post['contents']['tahu_kami_dari'] = strip_tags($this->input->post('tahu_kami_dari'));
		$this->post['contents']['pendapat_tentang_kami'] = strip_tags($this->input->post('pendapat_tentang_kami'));
		$this->post['form_parent'] = 1;

		$this->data['insert'] = [
			'form_title' => $this->post['title'],
			'form_contents' => json_encode( $this->post['contents'] ),
			'form_parent' => $this->post['form_parent'],
		];

		$this->Form_model->insert_form($this->data['insert']);
		redirect(base_url( "pages/kontak/?p=1&mail=".$this->post['contents']['email'] ));

		// echo "<pre>";
		// print_r($this->post);
		// print_r($this->data);
	}

}