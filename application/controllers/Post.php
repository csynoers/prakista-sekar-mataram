<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Categories_model');
    }

    /* profil */
    public function profil()
    {
        echo "halaman profil";
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
            echo "halaman post detail artikel";
        }
        else { # call post artikel
            echo "halaman artikel";
        }
    }
}