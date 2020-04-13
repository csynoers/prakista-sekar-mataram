<?php
/**
* model galeri foto
*/
class Gallery_model extends CI_Model
{
	
	public function gallery_limit($params=NULL,$limit){
		$this->db->select('*');
		$this->db->from('options');
		// $this->db->order_by('photo.photo_id', 'RANDOM');
		if ($params=='photo') {
			$this->db->where(['options_parent'=>13]);
		}
		$this->db->order_by('options_timestamp', 'DESC');
		$this->db->limit($limit);
		$query = $this->db->get()->result_object();
		return $query;
		# return object
	}

	public function gallery_photo($where=NULL,$limit=NULL)
	{
		if ($limit!=NULL) {
			$this->db->limit($limit);
		}
		$query = $this->db->get_where('photo',['album_id'=>$where])->result_object();
		return $query;
		#return object
	}
	public function select_gallery($where=NULL){
		$this->db->order_by('options_timestamp','DESC');
		if ($where!=NULL) {
			return $this->db->get_where('options',$where)->result_object();
		}else{
			return $this->db->get_where('options',['options_parent'=>10])->result_object();
		}

	}
}