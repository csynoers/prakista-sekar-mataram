<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hukum_model extends CI_Model {
 	public function select_hukum_where($where_clause)
 	{
 		$this->db->select('*');
 		$this->db->from('hukum');
 		$this->db->join('kategori_hukum','kategori_hukum.kategori_hukum_id = hukum.hukum_kategori');
 		$this->db->join('laws_status','laws_status.laws_status_id = hukum.hukum_status_id');
 		$this->db->where($where_clause);
 		$query = $this->db->get()->result_object();
 		// $data = [];


 		return $query;
 	}

	protected function update_hukum_dilihat($where)
	{
		$this->db->set('hukum_dilihat','hukum_dilihat + 1',FALSE); 
		$this->db->where($where);
		$query= $this->db->update('hukum', $where);
	}

	public function update_hukum_download($where)
	{
		$this->db->set('hukum_download','hukum_download + 1',FALSE); 
		$this->db->where($where);
		$query= $this->db->update('hukum', $where);
	}

	// function select_hukum_where($where)
	// {
	// 	return $this->db->get_where('hukum',$where)->result_object();
	// }

	function select_kategori_hukum_where($where)
	{
		return $this->db->get_where('kategori_hukum',$where)->result_object();
	}

	protected function data_hukum_ref($data_hukum)
	{
		$data = [];
		$data['ref'] = [];
		$data['hukum'] = $data_hukum;
		$data['status_id'] = $data['hukum'][0]->hukum_status_id;
		if ($data['status_id'] != 0) {
			$data['status_title'] = $data['hukum'][0]->laws_status_title;
			$data['link'] = base_url().'hukum/detail/'.$data["hukum"][0]->kategori_hukum_seo.'/'.$data["hukum"]["0"]->hukum_nomor.'/'.$data["hukum"]["0"]->hukum_tahun;
			$data['title'] = $data["hukum"][0]->kategori_hukum_judul.' No '.$data["hukum"][0]->hukum_nomor.' Tahun '.$data["hukum"][0]->hukum_tahun;
			$data['ref']= "<input type='text' readonly class='form-control-plaintext' value='{$data["status_title"]}'><a href='{$data["link"]}'>{$data["title"]}</a>";
		
		}else{
			$data['ref']= '<input type="text" readonly class="form-control-plaintext" value="-">';
		
		}

		return $data['ref'];
		// return $data;
		
	}

	public function data_detail($data_get)
	{
		$data = [];
		$data['get'] = $data_get;
		$data['update-hukum-dilihat'] = $this->update_hukum_dilihat(['hukum_nomor'=>$data_get['hukum-nomor'],'hukum_tahun'=>$data_get['hukum-tahun']]);
		$data['hukum'] = $this->select_hukum_where(['hukum.hukum_nomor'=>$data['get']['hukum-nomor'],'hukum.hukum_tahun'=>$data['get']['hukum-tahun'],'kategori_hukum.kategori_hukum_seo'=>$data['get']['hukum-kategori']]);
 		
 		$data['result'] = [];
 		foreach ($data['hukum'] as $key => $value) {
			$data['result'][]=[
				'hukum_id' => $value->hukum_id,
				'hukum_deskripsi' => strip_tags($value->hukum_deskripsi),
				'hukum_nomor' => $value->hukum_nomor,
				'hukum_tahun' => $value->hukum_tahun,
				'hukum_status_id' => $value->hukum_status_id,
				'hukum_status_deskripsi' => $value->hukum_status_deskripsi,
				// 'hukum-ref' => $this->data_hukum_ref($value->hukum_status_id), 
				'hukum_katalog' => strip_tags($value->hukum_katalog), 
				'hukum_abstraks' => strip_tags($value->hukum_abstraks), 
				'hukum_src' => $value->hukum_src, 
				'hukum_dilihat' => $value->hukum_dilihat, 
				'hukum_download' => $value->hukum_download,
				'hukum_date' => $value->hukum_date, 
				'hukum_timestime' => $value->hukum_timestime, 
				'hukum_kategori' => $value->hukum_kategori, 
				'kategori_hukum_id' => $value->kategori_hukum_id, 
				'kategori_hukum_judul' => $value->kategori_hukum_judul, 
				'kategori_hukum_seo' => $value->kategori_hukum_seo, 
				'kategori_hukum_timestime' => $value->kategori_hukum_timestime, 
				'laws_status_id' => $value->laws_status_id, 
				// 'laws_status_title' => $value->laws_status_title, 
				'laws_status_title' => $this->data_hukum_ref($data['hukum']), 
				'laws_status_seo' => $value->laws_status_seo, 
			];
 		}
		return $data['result'];
	}

	public function select_hukum_terbaru($where=0)
	{
		$this->db->order_by('hukum_id','DESC');
		// $this->db->limit(4);
		if ($where==0) {
			$query = $this->db->get('hukum');
		}else{
			$this->db->where($where);
			$query = $this->db->get_where('hukum');
			
		}
		return $query;
	}

	public function select_kategori_hukum($where=0)
	{
		$this->db->select('*');
		if ($where==0) {
			$this->db->order_by('kategori_hukum_id', 'DESC');
			$query = $this->db->get('kategori_hukum');
		}else{
			$this->db->where($where);
			$this->db->order_by('kategori_hukum_id', 'DESC');
			$query = $this->db->get_where('kategori_hukum');
			
		}

		return $query;
	}

	function select_status_edit()
	{
		$data = [];
		$data['status'] = [
			'1' => ['status_id'=> '1', 'status_title'=> 'Dicabut' ,'status_seo'=>'dicabut'], 
			'2' => ['status_id'=> '2', 'status_title'=> 'Mencabut' ,'status_seo'=>'mencabut'], 
			'3' => ['status_id'=> '3', 'status_title'=> 'Diubah' ,'status_seo'=>'diubah'], 
			'4' => ['status_id'=> '4', 'status_title'=> 'Mengubah' ,'status_seo'=>'mengubah'], 
			'5' => ['status_id'=> '5', 'status_title'=> 'Batal' ,'status_seo'=>'batal'], 
		];
		return $data['status'];

	}

	public function data_hukum_kategori($where)
 	{
 		$data = [];
 		$data['hukum'] = $this->select_hukum_terbaru($where['hukum'])->result_object();
 		$data['kategori-hukum'] = $this->select_kategori_hukum($where['kategori'])->result_object();
 		$data['status'] = $this->select_status_edit();
 		$data['mp'] = [];
 		foreach ($data['hukum'] as $key => $value) {
 			foreach ($data['kategori-hukum'] as $keykh => $valuekh) {
 			 	if ($value->hukum_kategori==$valuekh->kategori_hukum_id) {
 			 		$hukum_kategori = $valuekh->kategori_hukum_judul;
 			 		$hukum_kategori_seo = $valuekh->kategori_hukum_seo;
 			 	}
 			}

 			foreach ($data['status'] as $key_status => $value_status) {
 				if ($value->hukum_status_id==0) {
 					$hukum_status = '-';
 				}elseif ($value->hukum_status_id == $key_status){
 					$hukum_status = $value_status['status_title'];
 				}
 			}

 			$data['mp'][]= [
 				'hukum_id' 			=> $value->hukum_id,
 				'hukum_kategori' => $hukum_kategori,
 				'hukum_kategori_seo' => $hukum_kategori_seo,
 				'hukum_nomor' => $value->hukum_nomor,
 				'hukum_tahun' => $value->hukum_tahun,
 				'hukum_deskripsi' => $value->hukum_deskripsi,
 				'hukum_status' => $hukum_status,
 				'hukum_dilihat' => $value->hukum_dilihat,
 				'hukum_diunduh' => $value->hukum_download,
 			];
 		}
 		return $data['mp'];
 	}

 	public function data_hukum_tahun($where)
 	{
 		$data = [];
 		$data['hukum'] = $this->select_hukum_terbaru($where)->result_object();
 		$data['kategori-hukum'] = $this->select_kategori_hukum()->result_object();
 		$data['status'] = $this->select_status_edit();
 		$data['mp'] = [];
 		foreach ($data['hukum'] as $key => $value) {
 			foreach ($data['kategori-hukum'] as $keykh => $valuekh) {
 			 	if ($value->hukum_kategori==$valuekh->kategori_hukum_id) {
 			 		$hukum_kategori = $valuekh->kategori_hukum_judul;
 			 		$hukum_kategori_seo = $valuekh->kategori_hukum_seo;
 			 	}
 			}

 			foreach ($data['status'] as $key_status => $value_status) {
 				if ($value->hukum_status_id==0) {
 					$hukum_status = '-';
 				}elseif ($value->hukum_status_id == $key_status){
 					$hukum_status = $value_status['status_title'];
 				}
 			}

 			$data['mp'][]= [
 				'hukum_id' 			=> $value->hukum_id,
 				'hukum_kategori' => $hukum_kategori,
 				'hukum_kategori_seo' => $hukum_kategori_seo,
 				'hukum_nomor' => $value->hukum_nomor,
 				'hukum_tahun' => $value->hukum_tahun,
 				'hukum_deskripsi' => $value->hukum_deskripsi,
 				'hukum_status' => $hukum_status,
 				'hukum_dilihat' => $value->hukum_dilihat,
 				'hukum_diunduh' => $value->hukum_download,
 			];
 		}
 		return $data['mp'];
 	}

 	protected function select_hukum_search($where)
 	{	
 		$this->db->order_by('hukum_id','DESC');
 		$this->db->like($where);
 		$query= $this->db->get('hukum')->result_object();
 		return $query;
 	}

 	public function data_hukum_cari($where_hukum)
 	{
 		$data = [];
 		$data['hukum'] = $this->select_hukum_search($where_hukum);
 		$data['kategori-hukum'] = $this->select_kategori_hukum()->result_object();
 		$data['status'] = $this->select_status_edit();
 		$data['mp'] = [];
 		foreach ($data['hukum'] as $key => $value) {
 			foreach ($data['kategori-hukum'] as $keykh => $valuekh) {
 			 	if ($value->hukum_kategori==$valuekh->kategori_hukum_id) {
 			 		$hukum_kategori = $valuekh->kategori_hukum_judul;
 			 		$hukum_kategori_seo = $valuekh->kategori_hukum_seo;
 			 	}
 			}

 			foreach ($data['status'] as $key_status => $value_status) {
 				if ($value->hukum_status_id==0) {
 					$hukum_status = '-';
 				}elseif ($value->hukum_status_id == $key_status){
 					$hukum_status = $value_status['status_title'];
 				}
 			}

 			$data['mp'][]= [
 				'hukum_id' 			=> $value->hukum_id,
 				'hukum_kategori' => $hukum_kategori,
 				'hukum_kategori_seo' => $hukum_kategori_seo,
 				'hukum_nomor' => $value->hukum_nomor,
 				'hukum_tahun' => $value->hukum_tahun,
 				'hukum_deskripsi' => $value->hukum_deskripsi,
 				'hukum_status' => $hukum_status,
 				'hukum_dilihat' => $value->hukum_dilihat,
 				'hukum_diunduh' => $value->hukum_download,
 			];
 		}
 		return $data['mp'];
 	}


 	public function data_query_hukum()
 	{
 		$data = [];
 		$data['hukum'] = $this->db->get('hukum')->result_object();
 		$data['update']= "";
 		foreach ($data['hukum'] as $key => $value) {
 			$data['update'] .= 'UPDATE hukum SET 
 				\'hukum_deskripsi\''.'= \''.strip_tags($value->hukum_deskripsi).'\' '.',
 				\'hukum_katalog\''.'= \''.strip_tags($value->hukum_katalog).'\' '.',
 				\'hukum_abstraks\''.'= \''.strip_tags($value->hukum_abstraks).'\' '
 				.'WHERE \'hukum_id\'= \''.$value->hukum_id.'\';'
			; 
 		}
 		return $data['update'];
 	}

}