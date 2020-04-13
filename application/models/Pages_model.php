<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Pages_model extends CI_Model
{
	
	function select_pages(){
		$this->db->order_by('pages_timestamp', 'DESC');
		$query= $this->db->get('pages');
		return $query;
	}

	function data($limit,$offset){
		$this->db->order_by('pages_id', 'DESC');
		$this->db->where('pages_id','1');
		$query = $this->db->get('contents',$limit,$offset);
		return $query;		
	}

	function select_detail_pages(){
		return $this->db->get_where('pages',array('pages_seo'=>$this->seo))->result_object();
	}

	public function select_random($table)
	{
	    $this->db->order_by('rand()');
	    $this->db->limit(5);
	    $query = $this->db->get($table);
	    return $query;
	}
}