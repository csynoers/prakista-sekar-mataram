<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Header_model extends CI_Model{

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
				case 'icon':
					$this->json=json_decode($value->options_contents);
					$this->mp= $this->json->options_image.'?v='.$value->options_timestamp;
					break;
				
				default:
					# code...
					break;
			}
		}
		return $this->mp;
	}
	/*====================================end data manipulation====================================*/

	/*====================================Icon Website====================================*/
	public function icon(){
		$this->actions= 'icon';
		$this->db->select('options_contents, options_timestamp');
		$this->rows= $this->db->get_where('options', ['options_id'=> 75])->result_object();
		return $this->data_mp();
	}
	/*====================================end Icon Website====================================*/
}