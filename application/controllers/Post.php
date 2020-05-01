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
            $options_seo_produk = $this->uri->segment(2);
            $options_seo_kategori = $this->uri->segment(3);

            $this->contents['kategori'] = $this->Options_model->get('options_seo',$options_seo_kategori);
            foreach ($this->contents['kategori'] as $key => $value) {
                $this->contents['kategori'][$key]->href = base_url('post/' .$options_seo_produk .'/' .$value->options_seo);
            }
            $this->contents['produk'] = $this->Options_model->get('options_seo',$options_seo_produk);
            
            $post_id = $this->uri->segment(6);
            $this->contents['post'] = $this->Post_model->get('post_id',$post_id);
            foreach ($this->contents['post'] as $key => $value) {
                $this->contents['post'][$key]->post_timestamp = tanggal_indo($value->post_timestamp,TRUE);
            }
            $this->header['seo_title']= $this->contents['post'][0]->post_title; 
            $this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['post'][0]->post_contents)); 
            
            /* render this page */
            $this->pages='post/produk_detail';
            $this->render_pages();
        }
        else { # call post produk by kategori
            $options_seo_kategori = $this->uri->segment(3);
            $this->contents['kategori'] = $this->Options_model->get('options_seo',$options_seo_kategori);
            $options_seo_produk = $this->uri->segment(2);
            $this->contents['produk'] = $this->Options_model->get('options_seo',$options_seo_produk);

            $this->contents['post'] = $this->Post_model->get('post_categories',$this->contents['kategori'][0]->options_id);
            
            foreach ($this->contents['post'] as $key => $value) {
                $this->contents['post'][$key]->post_timestamp = tanggal_indo($value->post_timestamp,TRUE);
                $this->contents['post'][$key]->post_contents = character_limiter(strip_tags($value->post_contents), 300);
                $this->contents['post'][$key]->kategori = $options_seo_kategori;
            }

            $this->rows_is_empty($this->contents['post']);

            $this->header['seo_title']= $this->contents['kategori'][0]->options_title; 
            $this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['kategori'][0]->options_contents)); 
            
            /* render this page */
            $this->pages='post/produk_kategori';
            $this->render_pages();
        }
    }

    /* artikel */
    public function artikel()
    {
        if ( $this->uri->segment(3) && ($this->uri->segment(3)=='detail') ) { # call detail post artikel
            $this->contents['options'] = $this->Options_model->get('options_id',8);
            $post_id = $this->uri->segment(5);
            $this->contents['post'] = $this->Post_model->get('post_id',$post_id);
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
            $this->rows_is_empty($this->contents['post']);
            $this->header['seo_title']= $this->contents['options'][0]->options_title; 
            $this->header['seo_description']= str_replace('"', '\'', strip_tags($this->contents['options'][0]->options_contents)); 
            
            /* render this page */
            $this->pages='post/artikel';
            $this->render_pages();
        }
    }

    protected function rows_is_empty( $rows )
    {
        /* set default */
        $this->contents['message'] = NULL;
        if ( count($rows) < 1 ) {
            $this->contents['message'] = '
                <div class="alert alert-dismissible alert-warning fade in p-5 text-center show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="font-size:20px">×</span>
                    </button>    <strong>Warning!</strong> Maaf data halaman ini belum tersedia.
                </div>
            ';
        }
    }
}