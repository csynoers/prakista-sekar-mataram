<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array(
            'Options_model',
            'Post_model',
        ));
        $this->load->helper(['date','text']);
    }

    /* profil */
    public function profil()
    {
        $post_seo = $this->uri->segment(3);
        $this->contents['options'] = $this->Options_model->get('options_id',168);
        $this->contents['post'] = $this->Post_model->get('post_seo',$post_seo);
        $this->header['seo_title']= $this->contents['post'][0]->post_title; 
        $this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['post'][0]->post_contents)); 
        
        /* render this page */
        $this->pages='post/profil';
        $this->render_pages();
    }

    /* produk */
    public function produk()
    {
        if ( $this->uri->segment(4) && ($this->uri->segment(4)=='detail') ) { # call detail post produk
            echo "halaman post detail produk";
        }
        else { # call post produk by kategori
            echo "halaman post produk by kategori";
        }
    }

    /* artikel */
    public function artikel()
    {
        if ( $this->uri->segment(3) && ($this->uri->segment(3)=='detail') ) { # call detail post artikel
            $this->contents['options'] = $this->Options_model->get('options_id',8);
            $this->contents['post'] = $this->Post_model->get('post_categories',8);
            foreach ($this->contents['post'] as $key => $value) {
                $this->contents['post'][$key]->post_timestamp = tanggal_indo($value->post_timestamp,TRUE);
            }
            $this->header['seo_title']= $this->contents['post'][0]->post_title; 
            $this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['post'][0]->post_contents)); 
            
            /* render this page */
            $this->pages='post/artikel_detail';
            $this->render_pages();
        }
        else { # call post artikel
            $this->contents['options'] = $this->Options_model->get('options_id',8);
            $this->contents['post'] = $this->Post_model->get('post_categories',8);
            foreach ($this->contents['post'] as $key => $value) {
                $this->contents['post'][$key]->post_timestamp = tanggal_indo($value->post_timestamp,TRUE);
                $this->contents['post'][$key]->post_contents = character_limiter(strip_tags($value->post_contents), 300);
            }
            $this->header['seo_title']= $this->contents['options'][0]->options_title; 
            $this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['options'][0]->options_contents)); 
            
            /* render this page */
            $this->pages='post/artikel';
            $this->render_pages();
        }
    }
}