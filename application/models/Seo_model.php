<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo_model extends CI_Model {
	public function seo_title()
	{
		$this->db->select('options_contents');
		$this->db->from('options');
		$this->db->where(['options_id'=>'1']);
		$query= $this->db->get()->result_object();
		return $query;
	}

	public function seo_keywords()
	{
		$this->db->select('options_contents');
		$this->db->from('options');
		$this->db->where(['options_id'=>'2']);
		$query= $this->db->get()->result_object();
		return $query;
	}

	public function seo_description()
	{
		$this->db->select('options_contents');
		$this->db->from('options');
		$this->db->where(['options_id'=>'3']);
		$query= $this->db->get()->result_object();
		return $query;
	}

	public function seo_website()
	{
		$data= array();
		$data['seo']=[
			'title' => $this->seo_title(),
			'description' => $this->seo_description(),
			'keywords' => $this->seo_keywords(),
		];

		return $data['seo'];
	}
}