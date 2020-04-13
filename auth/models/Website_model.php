<?php 
 
class Website_model extends CI_Model{

	function select_title(){
		$this->db->select('options_id,options_contents');
		$query= $this->db->get_where('options', array('options_id' => '1'));
		return $query->result_object();
	}
	function select_keyword(){
		$this->db->select('options_id,options_contents');
		$query= $this->db->get_where('options', array('options_id' => '2'));
		return $query->result_object();
	}
	function select_description(){
		$this->db->select('options_id,options_contents');
		$query= $this->db->get_where('options', array('options_id' => '3'));
		return $query->result_object();
	}
	public function update_website()
	{
		return $this->db->update('options',$this->post, $this->where);
	}

}