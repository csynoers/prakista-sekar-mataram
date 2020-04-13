<?php 
 
class Form_model extends CI_Model{
	public function insert_form($data)
	{
		$this->db->insert('form', $data);
		return $this;
	}

}