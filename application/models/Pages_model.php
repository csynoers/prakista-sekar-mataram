<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Pages_model extends CI_Model
{
	protected $table = 'pages';
	protected $primaryKey = 'pages.pages_id';
	protected $pages_title ;
	protected $pages_seo ;
	protected $pages_contents ;
	protected $pages_media ;
	protected $pages_src ;
	protected $pages_timestamp ;

	public function get($field=NULL,$key=NULL)
	{
		$this->db->select("*,IF(pages.pages_src='','d-none',NULL) AS display_src");
		
		if ( $field ) {
			$this->db->where($field,$key);
		}

		return $this->db->get( $this->table )->result_object();
	}
	
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