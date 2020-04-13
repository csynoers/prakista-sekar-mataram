<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
	public $fill= '';
	public $limit= '';

	function select_data($table,$fill='')
	{
		if ($fill!='') {
			$this->db->select($fill);
		}else{
			$this->db->select('*');
		}

		$query = $this->db->get($table);

		return $query;
	}

	public function select_data_where()
	{
		if ($this->fill!='') {
			$this->db->select($this->fill);
		}else{
			$this->db->select('*');
		}

		if ($this->limit!='') {
			$this->db->limit($this->limit);
		}

		$query = $this->db->get_where($this->table, $this->where);

		return $query->result_object();
	}

	public function update_data_where()
	{
		return $this->db->update($this->table, $this->post, $this->where);
	}
	function delete_data_where($table,$where){
		// $data = array(
		//         'title' => $title,
		//         'name' => $name,
		//         'date' => $date
		// );

		$this->db->where($where);
		$query = $this->db->delete($table);
		return $query;
	}
}