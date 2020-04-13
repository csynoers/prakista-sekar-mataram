<?php

class Video_model extends CI_Model{
	function select_video()
	{
		$this->db->select('*');
		$this->db->order_by('links_no_src_id', 'DESC');
		$query = $this->db->get_where('links_no_src',['links_category_id'=>4]);
		// $query = $this->db->get('video');
		return $query;
	}

	function insert_video($table,$data)
	{
		$this->db->insert($table,$data);
		return $this;
	}

	function edit_video($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function update_video($table,$data,$where)
	{
		$this->db->update($table, $data, $where);
		return $this;
	}

	function delete_video($table,$where)
	{
		$this->db->delete($table,$where);
	}
}
