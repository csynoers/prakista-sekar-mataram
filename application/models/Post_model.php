<?php
/**
* 
*/
class Post_model extends CI_Model
{
	
	function select_post($where,$limit=NULL){
		$this->db->from('post');
		$this->db->order_by('post_timestamp', 'DESC');
		$this->db->where($where);
		if ($limit!=NULL) {
			$this->db->limit($limit);
		}
		return $this->db->get()->result_object();
	}
}