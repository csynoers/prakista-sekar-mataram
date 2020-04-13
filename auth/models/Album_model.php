<?php

class Album_model extends CI_Model{
	function select_album()
	{
// 		$this->db->select('*');
// 		$this->db->order_by('album_id', 'DESC');
// 		$query = $this->db->get('album');
// 		return $query;
        return $this->db->query('SELECT *, (SELECT COUNT(photo_id) FROM photo p WHERE p.album_id = a.album_id) AS jml FROM album a');
	}

	function insert_album($table,$data)
	{
		$this->db->insert($table,$data);
		// return $this;
		$id = $this->db->insert_id();
		return $id;
	}

	function edit_album($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function edit_album_photo($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function insert_photo($data = array()){
        $insert = $this->db->insert_batch('photo',$data);
        return $insert?true:false;
    }

	public function select_where_photo($table,$where){
        $query = $this->db->get_where($table,$where);
        return $query;
    }

	public function delete_where_photo($table,$where){
        $query = $this->db->delete($table,$where);
        return $query;
    }

	function update_album($table,$data,$where)
	{
		$this->db->update($table, $data, $where);
		return $this;
	}

	function delete_album($table,$where)
	{
		$this->db->delete($table,$where);
	}
}
