<?php
class Form extends MY_Controller{

	protected $data=[];
	function __construct(){
		parent::__construct();
		$this->load->helper(['date']);
		$this->load->model('Form_model');
		$data=[];
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	/*===== Data Manipulasi =====*/
	protected function data_mp($fetch,$params=NULL){
		$this->data['rows']=[];
		foreach ($fetch as $key => $value) {
			switch ($params) {
				case 'pendaftaran':
					# code...
					// $json= json_decode($value->form_contents);
					$rows=[
						'form_id'=>$value->form_id,
						'form_title'=>$value->form_title,
						'form_timestamp'=> tanggal_indo( date( 'Y-m-d', strtotime($value->form_timestamp) ),TRUE),
					];
					array_push($this->data['rows'], $rows);
					break;
				case 'view_pendaftaran':
					# code...
					$json= json_decode($value->form_contents);
					$rows=[
						'form_id'=>$value->form_id,
						'form_title'=>$value->form_title,
                        'tempat_lahir' => $json->tempat_lahir,
                        'tanggal_lahir' => tanggal_indo(date('Y-m-d',strtotime($json->tanggal_lahir))),
                        'usia' => $json->usia,
                        'agama' => $json->agama,
                        'berat_badan' => $json->berat_badan,
                        'tinggi_badan' => $json->tinggi_badan,
                        'alamat_rumah_tetap' => $json->alamat_rumah_tetap,
                        'no' => $json->no,
                        'rt' => $json->rt,
                        'rw' => $json->rw,
                        'dusun' => $json->dusun,
                        'desa' => $json->desa,
                        'kec' => $json->kec,
                        'kab' => $json->kab,
                        'prop' => $json->prop,
                        'kode_pos' => $json->kode_pos,
                        'telepon' => $json->telepon,
                        'handphone' => $json->handphone,
                        'email' => $json->email,
                        'asal_sekolah' => $json->asal_sekolah,
                        'jurusan' => $json->jurusan,
                        'nama_bapak' => $json->nama_bapak,
                        'usia_bapak' => $json->usia_bapak,
                        'pekerjaan_bapak' => $json->pekerjaan_bapak,
                        'nama_ibu' => $json->nama_ibu,
                        'usia_ibu' => $json->usia_ibu,
                        'pekerjaan_ibu' => $json->pekerjaan_ibu,
                        'no_ot' => $json->no_ot,
                        'rt_ot' => $json->rt_ot,
                        'rw_ot' => $json->rw_ot,
                        'dusun_ot' => $json->dusun_ot,
                        'desa_ot' => $json->desa_ot,
                        'kec_ot' => $json->kec_ot,
                        'kab_ot' => $json->kab_ot,
                        'prop_ot' => $json->prop_ot,
                        'kode_pos_ot' => $json->kode_pos_ot,
                        'quest_a' => $json->quest_a=='1' ? 'Ya' : 'Tidak',
                        'quest_a_ket' => empty($json->quest_a_ket) ? '-' : $json->quest_a_ket ,
                        'quest_b' => $json->quest_b=='1' ? 'Ya' : 'Tidak',
                        'quest_b_ket' => empty($json->quest_b_ket) ? '-' : $json->quest_b_ket ,
                        'quest_c' => $json->quest_c,
                        'quest_c_ket' => $json->quest_c_ket,
                        'alasan' => empty($json->alasan) ? '-' : $json->alasan ,
                        'file_name' => $json->file_name,
						'form_timestamp'=> tanggal_indo( date( 'Y-m-d', strtotime($value->form_timestamp) ),TRUE),
					];
					array_push($this->data['rows'], $rows);
					break;
				case 'contact_send':
					# code...
					// $json= json_decode($value->form_contents);
					$rows=[
						'form_id'=>$value->form_id,
						'form_title'=>$value->form_title,
						'form_timestamp'=> tanggal_indo( date( 'Y-m-d', strtotime($value->form_timestamp) ),TRUE),
					];
					array_push($this->data['rows'], $rows);
					break;
				case 'view_contact_send':
					# code...
					$json= json_decode($value->form_contents);
					$rows=[
						'form_id'=>$value->form_id,
						'form_title'=>$value->form_title,
						'email'=>$json->email,
						'contents'=>$json->contents,
						'form_timestamp'=> tanggal_indo( date( 'Y-m-d', strtotime($value->form_timestamp) ),TRUE),
					];
					array_push($this->data['rows'], $rows);
					break;
				
				default:
					# code...
					break;
			}
		}
		return $this->data['rows'];
	}
	/*===== Data Manipulasi =====*/

	public function pendaftaran(){
		$this->data['pendaftaran']= $this->data_mp($this->Form_model->pendaftaran(),'pendaftaran');
		$this->load->view('header');
		$this->load->view('navigation');

		if ( !empty( $this->input->get('act') ) )
		{
			switch ( $this->input->get('act') ) {
				case 'delete':
					# code...
					$message_fill= 'Data Berhasil Dihapus';
					break;
				case 'insert':
					# code...
					$message_fill= 'Data Berhasil Ditambahkan';
					break;
				case 'edit':
					# code...
					$message_fill= 'Data Berhasil Diupdate';
					break;
				
				default:
					# code...
					break;
			}

			$message= ['message' => $message_fill,];
			$this->parser->parse('website/message',$message);
		}

		$this->parser->parse('form/pendaftaran',$this->data);
		$this->load->view('footer');
	}

	public function contact_send()
	{
		$this->pages= 'form/contact_send';
		$this->contents['contact_send']= $this->data_mp($this->Form_model->contact_send(),'contact_send');
		$this->render_pages();
	}

	public function view_contact_send()
	{
		$this->pages= 'form/view_contact_send';
		$this->Form_model->form_id= $this->uri->segment(3);
		$this->contents['content'] = $this->data_mp( $this->Form_model->view_form(), 'view_contact_send' );
		$this->render_pages();
	}
	
	public function delete_contact_send()
	{
		// set properties
		$this->Form_model->form_id= $this->uri->segment(3);
		$this->Form_model->delete_form();
		redirect(base_url('form/contact-send/?act=delete'));

	}

	public function view_pendaftaran()
	{
		// set properties
		$this->Form_model->form_id= $this->uri->segment(3);
		
		$this->data['content'] = $this->data_mp( $this->Form_model->view_form(), 'view_pendaftaran' );
		
		$this->load->view('header');
		$this->load->view('navigation');
		$this->parser->parse( 'form/view_pendaftaran', $this->data );
		$this->load->view('footer');
	}
	public function delete_pendaftaran()
	{
		// set properties
		$this->Form_model->form_id= $this->uri->segment(3);
		$this->data['form']= $this->data_mp( $this->Form_model->view_form(),'view_pendaftaran' );
		if ( !empty($this->data['form'][0]['file_name']) ) {
			if ( file_exists('../assets/images/form/'.$this->data['form'][0]['file_name']) )
				unlink('../assets/images/form/'.$this->data['form'][0]['file_name']);
			if ( file_exists('../assets/images/form/thumb/256/'.$this->data['form'][0]['file_name']) )
				unlink('../assets/images/form/thumb/256/'.$this->data['form'][0]['file_name']);
			if ( file_exists('../assets/images/form/thumb/128/'.$this->data['form'][0]['file_name']) )
				unlink('../assets/images/form/thumb/128/'.$this->data['form'][0]['file_name']);
			
		}
		$this->Form_model->delete_form();
		redirect(base_url('form/pendaftaran/?act=delete&m=true'));
	}
}
