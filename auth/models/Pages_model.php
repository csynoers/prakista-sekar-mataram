<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Pages_model extends CI_Model{
	/*==var for manipulation==*/
	protected	$actions;
	protected 	$rows;
	protected 	$mp;
	protected	$categories;
	protected   $title;
	/*==var for manipulation==*/

	/*====================================data manipulation====================================*/
	protected function data_mp()
	{
		$this->load->helper(['date','text']);
		foreach ( $this->rows as $key => $value ) {
			switch ( $this->actions ) {
				case 'pages':
					# mp pages
					$this->mp[]=[
						"pages_id"=> $value->pages_id,
						"pages_title"=> $value->pages_title,
						"pages_timestamp"=> tanggal_indo($value->pages_timestamp,TRUE),
					];
					break;
				case 'edit_pages':
					# mp pages edit
					$this->embed='';
					$this->mp[]=[
	                    'pages_id' => $value->pages_id, 
	                    'pages_title' => $value->pages_title,
	                    'pages_contents' => $value->pages_contents,
	                    'embed'=> $this->embed, 
	                    'last_update' => timespan(strtotime($value->pages_timestamp), time(), 2),
					];
					break;
				
				default:
					# code...
					break;
			}
		}
		return $this->mp;
	}
	/*====================================end data manipulation====================================*/

	public function last_update(){
		$this->load->helper('date');
		foreach ($this->select_last_pages() as $key => $value)
		{
			$this->last_update= timespan(strtotime($value->pages_timestamp), time(), 2);
		}
		return $this->last_update;
	}

	protected function select_last_pages()
	{
		$this->db->select('pages_timestamp');
		$this->db->order_by('pages_timestamp', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pages');
		return $query->result_object();
	}

	public function select_pages()
	{
		$this->db->select('*');
		$this->db->order_by('pages_title', 'ASC');
		$this->rows = $this->db->get('pages')->result_object();
		$this->actions = 'pages';
		return $this->data_mp();
	}

	public function insert_pages()
	{
		return $this->db->insert('pages', $this->post);
	}

	public function edit_pages()
	{
		$this->actions = 'edit_pages';
		$this->rows = $this->db->get_where('pages', $this->where)->result_object();
		return $this->data_mp();
	}

	public function update_pages()
	{
		return $this->db->update('pages', $this->post, $this->where);
	}

	public function delete_pages()
	{
		return $this->db->delete('pages', $this->where);
	}

	public function contact_footer(){
		return $this->db->get_where('options',['options_id'=>46])->result_object();
	}
	public function update_contact_footer(){
		return $this->db->update('options', $this->post, ['options_id'=>46]);
	}
}