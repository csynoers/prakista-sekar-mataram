<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */

class Halaman extends MY_Controller {

	/*
	*/
	function __construct(){
		parent::__construct();
		$this->load->model(array(
			'Pages_model',
		));
		// echo 'dasd';
	}

	public function index()
	{
		$pages_seo = $this->uri->segment(2);
		$this->contents['pages'] = $this->Pages_model->get('pages_seo',$pages_seo);

		/* set default message */
		$this->contents['pages'][0]->msg = NULL;

		if ( $this->session->userdata('msg') ) {
			$this->contents['pages'][0]->msg = "
				<div class='alert alert-success fade in alert-dismissible show' style='margin-top:18px;'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true' style='font-size:20px'>×</span>
					</button>    <strong>Success!</strong> ".$this->session->userdata('msg')['msg'].".
				</div>
			";
		}
		
		if ( $this->contents['pages'][0]->pages_media != '' ) {
			$this->contents['pages'][0]->pages_media = $this->form_embed("halaman/{$pages_seo}");
		}
			// echo "<pre>";
			// print_r($this->Pages_model->select_detail_pages());
			// echo "</pre>";

		$this->pages='pages/single';
		$this->render_pages();
	}

	public function form_embed($page)
	{
		return "
			<div class='container mt-5 mb-5'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='form boxOne'>
							<h4>Kirim Pesan</h4>
							<hr>
							<div id='errormessage'></div>
							<form method='POST' action='".base_url('contact-send')."' role='form' class='contactForm'>
							<div class='form-group'>
								<label for='exampleInputEmail1'>Nama</label>
								<input name='title' type='nama' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter Your Name' required=' '>
							</div>
							<div class='form-group'>
								<label for='exampleInputPassword1'>Email</label>
								<input name='email' type='email' class='form-control' id='exampleInputPassword1' placeholder='Enter Your mail' required=' '>
							</div>
							<div class='form-group'>
								<label for='exampleInputPassword1'>No Telp</label>
								<input name='no_telp' type='telp' class='form-control' id='exampleInputPassword1' placeholder='Enter Your number' required=' '>
							</div>
							<div class='form-group'>
								<label for='pesan'>Pesan</label>
								<textarea name='contents' class='form-control' id=' cols='30' rows='10' placeholder='Enter Your Message' required=' '></textarea>
							</div>
							<!--<p><strong>Tahu Kami Dari :</strong></p>
							<div class='form-check'>
								<input class='form-check-input' type='radio' name='tahu_kami_dari' id='exampleRadios1' value='Facebook'>
								<label class='form-check-label' for='exampleRadios1' required='>
									Facebook
								</label>
								</div>
								<div class='form-check'>
									<input class='form-check-input' type='radio' name='tahu_kami_dari' id='exampleRadios2' value='Twitter'>
									<label class='form-check-label' for='exampleRadios2' required=' '>
										Twiter
									</label>
								</div>
								<div class='form-check'>
									<input class='form-check-input' type='radio' name='tahu_kami_dari' id='exampleRadios3' value='Google' required=' '>
									<label class='form-check-label' for='exampleRadios3'>
										Google
									</label>
								</div>
								<br>
								<p><strong>Pendapat Tentang Kami :</strong></p>
								<div class='form-group'>
									<select class='form-control' id='exampleFormControlSelect1' required=' ' name='pendapat_tentang_kami'>
									<option value='Sangat Ramah'>Sangat Ramah</option>
									<option value='Ramah'>Ramah</option>
									<option value='Tidak Menyenaangkan'>Tidak Menyenangkan</option>
									</select>
								</div>-->

								<div class='form-group'>
									<label>Human verification</label>
									<input type='text' class='form-control' name='captcha' placeholder='Are you human? 2 + 5 =' required=' ' onkeypress='if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,\'\')' onkeyup='if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,\'\')' autocomplete='off'>
								</div>
								<input type='hidden' name='a' value='2'>
								<input type='hidden' name='b' value='5'>
								
								
								<input type='hidden' name='page' value='{$page}'>
								<button type='submit' class='btn btn-primary'>Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		";
	}
}
