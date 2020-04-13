<?php 
 
class Banner_model extends CI_Model{
	protected function data_banner(){
		$this->db->select('*');
		$this->db->order_by('options_id', 'DESC');
		$query = $this->db->get_where('options',['options_parent'=>12]);
		return $query->result_object();
	}
	function select_banner()
	{
		$data=[];
		$data['banner']= $this->data_banner();
		$data['rows']=[];
		foreach ($data['banner'] as $key => $value) {
			$json= json_decode($value->options_contents);
			$rows=[
				'options_id'=> $value->options_id,
				'options_title'=> $value->options_title,
				'options_link'=> $json->options_link,
				'options_image'=> $json->options_image,
				'options_seo'=> $value->options_seo,
				'options_timestamp'=> $value->options_timestamp,
			];
			array_push($data['rows'], $rows);
		}
		return $data['rows'];
	}

	function insert_banner($table,$data)
	{
		$this->db->insert($table,$data);
		return $this;
	}

	function edit_banner($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function update_banner($table,$data,$where)
	{
		$this->db->update($table, $data, $where);
		return $this;
	}

	function delete_banner($table,$where)
	{
		$this->db->delete($table,$where);
	}
}