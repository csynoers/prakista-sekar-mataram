<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MY_Controller extends CI_Controller {

	public $pages= 'welcome_message';
	public $header= [];
	public $contents= [];
	public $messages;

    public function __construct()
    {
        parent::__construct();
        $this->load->model( ['Header_model'] );
        $this->header['base_url'] = base_url();
        $this->header['icon'] = $this->Header_model->icon();
        $this->contents['base_url'] = base_url();
        $this->navigation['base_url']= base_url();
        // now('Asia/Jakarta');
        // $this->load->model( ['Seo_model','Navigation_model','Sidebar_right_model','Footer_model'] );
    }

    public function render_pages()
    {
		$this->parser->parse( 'header', $this->header );
		$this->parser->parse( 'navigation', [ 'base_url' => base_url() ] );

		if ( !empty( $this->input->get('act') ) )
		{
			switch ( $this->input->get('act') ) {
				case 'insert':
					$message= [ 'message' => 'Data Berhasil Ditambahkan' ];
					# code...
					break;
				case 'update':
					$message= [ 'message' => 'Data Berhasil Diupdate' ];
					# code...
					break;
				case 'delete':
					$message= [ 'message' => 'Data Berhasil Dihapus' ];
					# code...
					break;
				
				default:
					# code...
					break;
			}

			$this->parser->parse('website/message', $message);
		}

		$this->parser->parse( $this->pages, $this->contents );
		$this->parser->parse( 'footer', [ 'base_url' => base_url() ] );
		
		// echo "<pre>";
		// print_r($this->contents);
		// echo "</pre>";
    }
    public function render_page_messages()
    {
		$this->parser->parse( 'header', [ 'base_url' => base_url() ] );
		$this->parser->parse( 'navigation', $this->navigation );
		$this->parser->parse('website/message',$this->messages);
		$this->parser->parse( $this->pages, $this->contents );
		$this->parser->parse( 'footer', [ 'base_url' => base_url() ] );
		
		// echo "<pre>";
		// print_r($this->contents);
		// echo "</pre>";
    }

}