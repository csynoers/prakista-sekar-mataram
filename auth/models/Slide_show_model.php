<?php 
 
class Slide_show_model extends CI_Model{
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
				case 'edit_slide_show':
					# mp feeds
					$this->json= json_decode($value->options_contents);
					$this->mp[]=[
						'options_id'=> $value->options_id,
						// 'options_title'=> $value->options_title,
						// 'options_link'=> $this->json->options_link,
						'options_caption'=> $this->json->options_caption,
						'options_image'=> $this->json->options_image,
						// 'options_seo'=> $value->options_seo,
						'options_timestamp'=> $value->options_timestamp,
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
	protected function data_slide_show(){
		$this->db->select('*');
		$this->db->order_by('options_id', 'DESC');
		$query = $this->db->get_where('options',['options_parent'=>11]);
		return $query->result_object();
	}
	function select_slide_show()
	{
		$data=[];
		$data['slide_show']= $this->data_slide_show();
		$data['rows']=[];
		foreach ($data['slide_show'] as $key => $value) {
			$json= json_decode($value->options_contents);
			$rows=[
				'options_id'=> $value->options_id,
				// 'options_title'=> $value->options_title,
				// 'options_link'=> $json->options_link,
				'options_caption'=> $json->options_caption,
				'options_image'=> $json->options_image,
				// 'options_seo'=> $value->options_seo,
				'options_timestamp'=> $value->options_timestamp,
			];
			array_push($data['rows'], $rows);
		}
		return $data['rows'];
	}

	function insert_slide_show($table,$data)
	{
		$this->db->insert($table,$data);
		return $this;
	}

	public function edit_slide_show()
	{
		$this->rows= $this->db->get_where('options',$this->where)->result_object();
		$this->actions= 'edit_slide_show';
		return $this->data_mp();
	}

	public function update_slide_show()
	{
		return $this->db->update('options', $this->post, $this->where);
	}

	function delete_slide_show()
	{
		return $this->db->delete('options',$this->where);
	}
}