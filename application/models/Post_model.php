<?php
/**
* 
*/
class Post_model extends CI_Model
{
	protected $table = 'post';
	protected $primaryKey = 'post.post_id';
	protected $post_title ;
	protected $post_seo ;
	protected $post_contents ;
	protected $post_media ;
	protected $post_src ;
	protected $post_categories ;
	protected $post_tags ;
	protected $post_timestamp ;

	public function get($field=NULL,$key=NULL)
	{
		if ( $field ) {
			$this->db->where($field,$key);
		}

		return $this->db->get( $this->table )->result_object();
	}
	
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