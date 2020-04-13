<?php 
 
class Form_model extends CI_Model{
	var $table = 'form';
	var $form_id;

	public function pendaftaran(){
		$this->db->select('form_id,form_title,form_timestamp');
		return $this->db->get_where('form',['form_parent'=>2])->result_object();
	}
	public function contact_send(){
		$this->db->select('form_id,form_title,form_timestamp');
		return $this->db->get_where('form',['form_parent'=>1])->result_object();
	}
	public function view_form(){
		$this->db->select('form_id,form_title,form_contents,form_timestamp');
		return $this->db->get_where('form',['form_id'=>$this->form_id])->result_object();
	}
	public function delete_form(){
		return $this->db->delete( $this->table, ['form_id'=>$this->form_id] );
	}
}