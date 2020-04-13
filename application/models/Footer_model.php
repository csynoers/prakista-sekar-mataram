<?php
	defined('BASEPATH') OR exit ('no direct script access allowed');
	/**
	 * 
	 */
	class Footer_model extends CI_Model
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }
		public function contact_footer ()
		{
			$this->db->select('options_contents');
			$this->row = $this->db->get_where('options', ['options_id'=> 46])->row();
			return $this->row->options_contents;
		}
	}