<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class User extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('Data_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function edit()
	{
		$this->pages = 'users/edit';
		$this->Data_model->table = "users";
		$this->Data_model->where = [ 'users_id'=>'1' ];
		$this->contents= [ 'users' => $this->Data_model->select_data_where() ];
		$this->render_pages();
	}

	public function update()
	{
		$this->Data_model->table 	= "users";
		$this->Data_model->where 	= [ 'users_id'=>$this->input->post('id') ];
		$this->Data_model->post 	= [
			'users_name' 		=> $this->input->post('users_name'),
			'users_password'	=> md5($this->input->post('users_password')),
		];

		if ( $this->Data_model->update_data_where() )
		{
			redirect(base_url('user/edit/?act=update'));
		}

	}
}