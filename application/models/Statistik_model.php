<?php
/**
* 
*/
class Statistik_model extends CI_model
{	
	/*====== Statistik user ====== */
	public function hit_counter()
	{
		// $this->load->helper('date');
		$data = [];
		$data['now'] 			= date_default_timezone_set('Asia/Jakarta');
        $data['ip']      		= $this->input->server('REMOTE_ADDR'); // Mendapatkan IP komputer user
        $data['tanggal'] 		= date("Y-m-d"); // Mendapatkan tanggal sekarang
        $data['waktu']   		= time(); //
        $data['jam']     		= date("H:i");
        $data['batas-waktu'] 	= time() - 300;

        // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
        $data['cek-ip'] = $this->db->query("SELECT * FROM statistik WHERE ip='{$data["ip"]}' AND tanggal='{$data["tanggal"]}'")->num_rows();

		// Kalau belum ada, simpan data user tersebut ke database
		if($data['cek-ip'] == 0)
		{
			$this->db->query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('{$data["ip"]}','{$data["tanggal"]}','1','{$data["waktu"]}')");
		
		}else{
			$this->db->query("UPDATE statistik SET hits=hits+1, online='{$data["waktu"]}' WHERE ip='{$data["ip"]}' AND tanggal='{$data["tanggal"]}'");
		
		}
        $data['data-hits-hari-ini']		= $this->db->query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='{$data["tanggal"]}' GROUP BY tanggal")->result_object();
        $data['data-total-hits'] 		= $this->db->query("SELECT SUM(hits) as sum_hits FROM statistik")->result_object();
        $data['data-total-pengunjung'] 	= $this->db->query("SELECT COUNT(hits) as count_hits FROM statistik")->result_object();

        $this->statistik = [
	        'pengunjung_hari_ini' 	=> $this->db->query("SELECT * FROM statistik WHERE tanggal='{$data["tanggal"]}' GROUP BY ip")->num_rows(),
	        'total_pengunjung'		=> $data['data-total-pengunjung'][0]->count_hits,
	        'hits_hari_ini'			=> $data['data-hits-hari-ini'][0]->hitstoday,
	        'total_hits'			=> $data['data-total-hits'][0]->sum_hits,
	        'pengunjung_online' 	=> $this->db->query("SELECT * FROM statistik WHERE online > '{$data["batas-waktu"]}'")->num_rows(),

        ];
		
		return [$this->statistik];
	}
	/*====== Statistik user ====== */
}