<?php
/**
* 
*/
class Hubungi_kami_model extends CI_Model
{
	
	protected function select_map(){
		$query= $this->db->get_where('modul',['id_modul'=>6])->result_object();
		return $query;
	}
	protected function select_contact()
	{
		$query= $this->db->get_where('modul',['id_modul'=>8])->result_object();
		return $query;
	}
	public function data_hubungi_kami()
	{
		$data = [
			'map' => $this->select_map(),
			'contact' => $this->select_contact(),
		];
		return $data;
	}
}