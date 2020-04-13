<?php 
 
class Website_model extends CI_Model{

	public function get( $id ){
		$this->db->select('options_id,options_contents');
		$this->db->where('options_id',$id);

		return $this->db->get('options')->result_object();
	}
	public function update( $id )
	{
		$this->options_contents = $this->post['options_contents'];
		$data = array(
			'options_contents' => $this->options_contents
		);
		$this->db->where('options_id', $id);

		return $this->db->update('options',$data);
	}

}