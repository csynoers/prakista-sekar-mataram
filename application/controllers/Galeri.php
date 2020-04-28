<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends MY_Controller {

	/*
	*/
	protected $data = [];

	function __construct(){
		parent::__construct();
		$this->load->model(['Gallery_model']);
	}

	protected function data_mp($fetch,$params=NULL){
		$this->data['rows']=[];
		$this->load->helper('date');
		foreach ($fetch as $key => $value) {
			if ($params=='photo') {
				$detail= $this->Gallery_model->select_gallery(['options_parent'=>$value->options_id]);
				$rows=[
					"options_id" => $value->options_id,
					"options_title" => $value->options_title,
					"options_contents" => $value->options_contents,
					"options_seo" => $value->options_seo,
					"options_parent" => $value->options_parent,
					"options_image" => $detail[0]->options_contents,
					"options_timestamp" => tanggal_indo($value->options_timestamp,TRUE),
				];
				array_push($this->data['rows'], $rows);
			}elseif ($params=='detail-photo' || $params=='video') {
				foreach ($this->Gallery_model->select_gallery(['options_parent'=>$value->options_id]) as $key => $value_photo) {
					# code...
					$rows=[
						"options_id" => $value_photo->options_id,
						"options_title" => $value_photo->options_title,
						"options_contents" => $value_photo->options_contents,
						"options_seo" => $value_photo->options_seo,
						"options_parent" => $value_photo->options_parent,
						"options_timestamp" => tanggal_indo($value_photo->options_timestamp,TRUE),
					];
					array_push($this->data['rows'], $rows);
				}
			}else{
				$rows=[
					"options_id" => $value->options_id,
					"options_title" => $value->options_title,
					"options_contents" => $value->options_contents,
					"options_seo" => $value->options_seo,
					"options_parent" => $value->options_parent,
					"options_timestamp" => tanggal_indo($value->options_timestamp,TRUE),
				];
				array_push($this->data['rows'], $rows);
			}
		}
		return $this->data['rows'];
	}
	public function foto()
	{
		$this->contents['options'] = $this->Options_model->get('options_parent',187);

		/* mod $this->contents['options'] */
		$this->load->helper('date');
		foreach ($this->contents['options'] as $key => $value) {
			$this->contents['options'][$key]->options_timestamp = tanggal_indo($value->options_timestamp,TRUE);
			$this->contents['options'][$key]->image_src = $value->options_contents;
		}
		// echo '<pre>';
		// print_r($this->contents['options']);
		// echo '</pre>';
		// die();
		/* render this page */
		$this->pages='galeri/foto';
		$this->render_pages();
	}
	public function detail_foto(){
		$this->pages= 'galeri/detail_foto';
		$this->data['id'] = $this->uri->segment(3);
		$this->contents= [
			'album'=>$this->Gallery_model->select_gallery(['options_id'=>$this->data['id']]),
			'photo'=>$this->data_mp($this->Gallery_model->select_gallery(['options_id'=>$this->data['id']]),'detail-photo')
		];
		$this->render_pages();
	}
	public function video(){
		$this->contents['options'] = $this->Options_model->get('options_parent',14);

		/* mod $this->contents['options'] */
		$this->load->helper('date');
		foreach ($this->contents['options'] as $key => $value) {
			$this->contents['options'][$key]->options_timestamp = tanggal_indo($value->options_timestamp,TRUE);
		}

		/* render this page */
		$this->pages='galeri/video';
		$this->render_pages();
	}
}