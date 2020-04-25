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
		$this->pages= 'galeri/foto';
		$this->contents= ['foto'=>$this->data_mp($this->Gallery_model->select_gallery(['options_parent'=>13]),'photo')];
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
		$this->data['seo'] = $this->Seo_model->seo_website();
		$this->data['footer'] = $this->Footer_model->data_footer();
		$this->data['contents']= [
			'video'=>$this->data_mp($this->Gallery_model->select_gallery(['options_id'=>14]),'detail-photo')];

		$this->parser->parse('header',$this->data['seo']);
		$this->parser->parse('navigation',[]);
		$this->parser->parse('gallery/video',$this->data['contents']);
		$this->parser->parse('footer',$this->data['footer']);

	}
}