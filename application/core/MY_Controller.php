<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MY_Controller extends CI_Controller {

	public $pages= 'welcome_message';
	public $header = [];
	public $navigation = [];
    // public $sidebar= [];
	public $contents= [];
	public $footer= [];
    // public $form_embed;

    public function __construct()
    {
        parent::__construct();
        /*load all modal contructor*/
        $this->load->model( array(
            'Header_model',
            'Navigation_model',
            // 'Sidebar_left_model',
            'Statistik_model',
            'Options_model',
            // 'Footer_model'
        ) );

        /*object construct*/
        $this->url = base_url();
        // $this->nav_menu = [
        //     ['link'=> base_url(), 'title'=>'Home'],
        //     ['link'=> base_url().'pages/layanan', 'title'=>'Layanan'],
        //     ['link'=> base_url().'pages/info', 'title'=>'Info'],
        //     ['link'=> base_url().'galeri/foto', 'title'=>'Galeri'],
        //     ['link'=> base_url().'categories/artikel', 'title'=>'Artikel'],
        //     ['link'=> base_url().'pages/profil', 'title'=>'Profil'],
        //     ['link'=> base_url().'pages/kontak', 'title'=>'Kontak'],
        // ];
        $this->logo = $this->Navigation_model->logo();


        $this->statistik= $this->Statistik_model->hit_counter();
        $this->header['base_url']= $this->url;
        $this->header['icon']= $this->Header_model->icon();
        $this->header['seo_title']= $this->Header_model->seo_title();
        $this->header['seo_keyword']= $this->Header_model->seo_keyword();
        $this->header['seo_description']= $this->Header_model->seo_description();
        $this->header['background']= $this->get_background();
        $this->navigation['base_url']= $this->url;
        $this->navigation['logo']= $this->logo;
        $this->navigation['social_media']= $this->social_media();
        $this->navigation['navs']= $this->navs();
        // $this->sidebar['base_url']= $this->url;
        // $this->sidebar['sidebar_left_informasi']= $this->Sidebar_left_model->sidebar_left_informasi();
        // $this->sidebar['sidebar_left_partner']= $this->Sidebar_left_model->image_link(90);
        // $this->sidebar['sidebar_left_sosmed']= $this->Sidebar_left_model->image_link(91);
        // $this->sidebar['sidebar_left_statistik']= $this->statistik;
        $this->contents['base_url']= $this->url;
        // $this->contents['sidebar_left_statistik']= $this->statistik;
        // $this->contents['sidebar_left_informasi']= $this->Sidebar_left_model->sidebar_left_informasi();
        // $this->contents['sidebar_left_partner']= $this->Sidebar_left_model->image_link(90);
        // $this->contents['sidebar_left_sosmed']= $this->Sidebar_left_model->image_link(91);
        $this->footer['base_url']= $this->url;
        // $this->footer['navigation']= $this->nav_menu;
        // $this->footer['logo']= $this->logo;
        // $this->footer['contact_footer']= $this->Footer_model->contact_footer();
        $this->footer['statistik']= $this->statistik;
        // echo '<pre>';
        // print_r($this->statistik);
        // echo '</pre>';

    }

    // public function render_pages()
    // {
    //     $this->navigation['service'] = $this->Navigation_model->nav_service();
    //     $this->parser->parse( 'header', $this->header );
    //     $this->parser->parse( 'navigation', $this->navigation );

    //     $this->parser->parse( 'open_div', ['class'=>'row'] );
    //         $this->parser->parse( 'open_div', ['class'=>'col-md-3'] );
    //             $this->parser->parse( 'sidebar', $this->sidebar );
    //         $this->parser->parse( 'close_div', [] );
    //         $this->parser->parse( 'open_div', ['class'=>'col-md-9'] );
    //             $this->parser->parse( $this->pages, $this->contents );
    //             if ( !empty($this->form_embed) ) {
    //                 $this->parser->parse( 'pages/form_contact', [] );
    //             }
    //         $this->parser->parse( 'close_div', [] );
    //     $this->parser->parse( 'close_div', [] );
        
    //     $this->parser->parse( 'footer', $this->footer );
        
    // }
    public function render_pages()
    {
        $this->navigation['service'] = $this->Navigation_model->nav_service();
        $this->parser->parse( 'header', $this->header );
        $this->parser->parse( 'navigation', $this->navigation );
        $this->parser->parse( $this->pages, $this->contents );       
        $this->parser->parse( 'footer', $this->footer );
    }

    public function navs()
    {
        $this->load->model(['Post_model']);
        $this->load->helper('string');
        $data = json_decode($this->Options_model->get('options_id',189)[0]->options_contents);

        foreach ($data as $key => $value) {
            switch ($value->pages) {
                case 'profil':
                    # code...
                    $value->href = 'javascript: void(0)';
                    $value->li_class = 'dropdown';
                    $value->a_class = 'dropdown-toggle';
                    $value->a_data_toggle = 'dropdown';
                    foreach ($this->Post_model->get('post_categories',$value->id) as $keySub => $valueSub) {
                        $value->rows[$keySub] = (Object) array(
                            'title' => $valueSub->post_title,
                            'href' => base_url() . "post/{$value->pages}/{$valueSub->post_seo}",
                        );
                    }
                    break;

                case 'produk':
                    # code...
                    $value->href = 'javascript: void(0)';
                    $value->li_class = 'dropdown';
                    $value->a_class = 'dropdown-toggle';
                    $value->a_data_toggle = 'dropdown';
                    foreach ($this->Options_model->get('options_parent',$value->id) as $keySub => $valueSub) {
                        $value->rows[$keySub] = (Object) array(
                            'title' => $valueSub->options_title,
                            'href' => base_url() . "post/{$value->pages}/{$valueSub->options_seo}",
                        );
                    }
                    break;

                case 'galeri':
                    # code...
                    $value->href = 'javascript: void(0)';
                    $value->li_class = 'dropdown';
                    $value->a_class = 'dropdown-toggle';
                    $value->a_data_toggle = 'dropdown';

                    $value->rows = array(
                        (Object) array(
                            'title' => 'Foto',
                            'href' => base_url() . "{$value->pages}/foto",
                        ),
                        (Object) array(
                            'title' => 'Video',
                            'href' => base_url() . "{$value->pages}/video",
                        ),
                    );
                    break;

                case 'artikel':
                    # code...
                    $value->href = base_url() . "post/{$value->pages}";
                    $value->rows = array();
                    break;
                case 'halaman':
                    # code...
                    $value->href = base_url() . "{$value->pages}/".seo_title($value->title);
                    $value->rows = array();
                    break;
                
                default:
                    # code...
                    break;
            }
            // echo '<pre>';
            // print_r($value);
            // echo '</pre>';

        }
        // die();
        return $data;
    }
    public function social_media()
    {
        $data = [];
        foreach ($this->Options_model->get('options_parent',91) as $key => $value) {
            $value->options_contents = [ json_decode($value->options_contents) ];
            $data[] = $value;
        }
        return $data;
    }
    public function get_background()
    {
        $data= $this->Options_model->get('options_id',76);
        foreach ($data as $key => $value) {
            $data[$key]->options_image = json_decode($value->options_contents)->options_image;
        }
        return base_url("assets/images/website/{$data[0]->options_image}");
    }

}