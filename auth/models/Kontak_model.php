<?php 
 
class Kontak_model extends CI_Model{
	function select_kontak(){
		$this->db->select('*');
		$query= $this->db->get_where('modul', ['id_modul' => '8']);
		return $query;
	}

	function update_kontak($table,$data,$where)
	{
		$this->db->update($table, $data, $where);
		return $this;
	}
}