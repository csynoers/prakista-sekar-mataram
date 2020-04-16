<?php

class Gallery_model extends CI_Model{
	protected $table = 'options';
	protected $primaryKey = 'options_id';
	public function get($id=NULL)
	{
		if ( $id ) {
			$this->db->where($this->primaryKey,$id);
		}
		return $this->db->get( $this->table )->result_object();
	}
	public function delete($id)
	{
		$this->db->where($this->primaryKey,$id);
		return $this->db->delete( $this->table );
	}

	public function select_photo()
	{
		$this->db->select('*');
		// $this->db->group_by('options_id');
		return $this->db->get_where('options',['options_parent'=>13])->result_object();
	}
	public function insert_photo()
	{
		if ( empty($this->where) ) {
			$this->db->insert('options',$this->post);
			return $this->db->insert_id();
		}else{
			return $this->db->insert('options',$this->post,$this->where);
		}
	}
	public function edit_photo()
	{
		return $this->db->get_where('options',$this->where)->result_object();
	}
	public function update_photo()
	{
		return $this->db->update('options',$this->post,$this->where);
	}
	public function delete_photo()
	{
		return $this->db->delete('options',$this->where);
	}
	public function select_video()
	{
		return $this->db->get_where('options',['options_parent'=>14])->result_object();
	}
	public function insert_video($data)
	{
		return $this->db->insert('options',$data);
	}
	public function edit_video($where)
	{
		return $this->db->get_where('options',$where)->result_object();
	}
	public function update_video($data,$where)
	{
		return $this->db->update('options',$data,$where);
	}
	public function delete_video($where)
	{
		return $this->db->delete('options',$where);
	}

	
}
