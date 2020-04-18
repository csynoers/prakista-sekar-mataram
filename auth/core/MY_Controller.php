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
		$this->parser->parse( 'navigation', $this->navigation() );

		if ( ! empty($this->session->flashdata('msg')) )
		{
			$this->parser->parse('website/message', $this->session->flashdata('msg'));
		}

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
	
	protected function navigation()
	{
		return array(
			'navigation' => '
				<li class="nav-item '.($this->uri->segment(1)=='admin' ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="'.base_url('admin').'">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				<li class="nav-item '.($this->uri->segment(1)=='post' ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Post">
					<a class="nav-link nav-link-collapse" data-toggle="collapse" href="#collapseExamplePost" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-newspaper-o"></i>
						<span class="nav-link-text">Post</span>
					</a>
					<ul class="sidenav-second-level text-capitalize collapse '.($this->uri->segment(1)=='post' ? 'show' : NULL).'" id="collapseExamplePost">
						<li>
							<a href="'.base_url('post').'" class="'.( ($this->uri->segment(1)=='post' && $this->uri->segment(2)=='' ) ? 'bg-secondary' : NULL).'">all post</a>
						</li>
						<li>
							<a href="'.base_url('post/add').'" class="'.( ($this->uri->segment(1)=='post' && $this->uri->segment(2)=='add' ) ? 'bg-secondary' : NULL).'">add new</a>
						</li>
						<li>
							<a href="'.base_url('post/categories').'" class="'.( ($this->uri->segment(1)=='post' && $this->uri->segment(2)=='categories' ) ? 'bg-secondary' : NULL).'">categories</a>
						</li>
						<!--<li>
							<a href="{base_url}post/tags">tags</a>
						</li>-->
					</ul>
				</li>
				<li class="nav-item '.($this->uri->segment(1)=='pages' ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Pages">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion" aria-expanded="true">
						<i class="fa fa-fw fa-clone"></i>
						<span class="nav-link-text">Pages</span>
					</a>
					<ul class="sidenav-second-level text-capitalize collapse '.($this->uri->segment(1)=='pages' ? 'show' : NULL).'" id="collapseExamplePages">
						<li>
							<a href="'.base_url('pages').'" class="'.( ($this->uri->segment(1)=='pages' && $this->uri->segment(2)=='' ) ? 'bg-secondary' : NULL).'">all pages</a>
						</li>
						<li>
							<a href="'.base_url('pages/add').'" class="'.( ($this->uri->segment(1)=='pages' && $this->uri->segment(2)=='add' ) ? 'bg-secondary' : NULL).'">add new</a>
						</li>
					</ul>
				</li>
				<li class="nav-item text-capitalize '.( ($this->uri->segment(1)=='gallery') || ($this->uri->segment(1)=='form') || ($this->uri->segment(1)=='support') || ($this->uri->segment(1)=='slide-show') ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Tools">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSupport" data-parent="#exampleAccordion" aria-expanded="true">
					<i class="fa fa fa-codepen"></i>
					<span class="nav-link-text">support</span>
					</a>
					<ul class="sidenav-second-level collapse '.( ($this->uri->segment(1)=='gallery') || ($this->uri->segment(1)=='form') || ($this->uri->segment(1)=='support') || ($this->uri->segment(1)=='slide-show') ? 'show' : NULL).'" id="collapseSupport">
						<li>
							<a href="'.base_url('gallery/photo').'" class="'.( ($this->uri->segment(1)=='gallery' && $this->uri->segment(2)=='photo' ) || ($this->uri->segment(1)=='gallery' && $this->uri->segment(2)=='add-photo' ) || ($this->uri->segment(1)=='gallery' && $this->uri->segment(2)=='edit-photo' ) ? 'bg-secondary' : NULL).'">gallery foto</a>
						</li>
						<li>
							<a href="'.base_url('gallery/video').'" class="'.( ($this->uri->segment(1)=='gallery' && $this->uri->segment(2)=='video' ) || ($this->uri->segment(1)=='gallery' && $this->uri->segment(2)=='edit_video' ) ? 'bg-secondary' : NULL).'">gallery video</a>
						</li>
						<!-- <li>
							<a href="{base_url}banner/index">banner</a>
						</li> -->
						<li>
						<li>
							<a href="'.base_url('form/contact-send').'" class="'.( ($this->uri->segment(1)=='form' && $this->uri->segment(2)=='contact-send' ) || ($this->uri->segment(1)=='form' && $this->uri->segment(2)=='view-contact-send' ) ? 'bg-secondary' : NULL).'">kotak masuk</a>
						</li>
						<li>
							<a href="'.base_url('support/contact-footer').'" class="'.( ($this->uri->segment(1)=='support' && $this->uri->segment(2)=='contact-footer' ) ? 'bg-secondary' : NULL).'">Footer</a>
						</li>
						<!-- <li>
							<a href="{base_url}support/video-footer">Video Footer</a>
						</li> -->
						<!-- <li>
							<a href="{base_url}support/contents-no-image/?id=89">sidebar informasi</a>
						</li> -->
						<!-- <li>
							<a href="{base_url}support/image-link/?id=90">sidebar partner</a>
						</li> -->
						<li>
							<a href="'.base_url('support/image-link/91').'" class="'.( ($this->uri->segment(1)=='support' && $this->uri->segment(2)=='image-link' && $this->uri->segment(3)=='91' ) ? 'bg-secondary' : NULL).'">social media</a>
						</li>
						<li>
							<a href="'.base_url('slide-show').'" class="'.( ($this->uri->segment(1)=='slide-show' ) ? 'bg-secondary' : NULL).'">slide show</a>
						</li>
						<li>
							<a href="'.base_url('support/contents-no-image/47').'" class="'.( ($this->uri->segment(1)=='support' ) && ($this->uri->segment(2)=='contents-no-image' ) && ($this->uri->segment(3)=='47' ) ? 'bg-secondary' : NULL).'">Home Page</a>
						</li>
						<li>
							<a href="'.base_url('support/logo-edit').'" class="'.( ($this->uri->segment(1)=='support' ) && ($this->uri->segment(2)=='logo-edit' ) ? 'bg-secondary' : NULL).'">Logo</a>
						</li>
					</ul>
				</li>
				<li class="nav-item '.($this->uri->segment(1)=='appearance' ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Appearance">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExampleAppearance" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-paint-brush"></i>
						<span class="nav-link-text">Appearance</span>
					</a>
					<ul class="sidenav-second-level collapse '.($this->uri->segment(1)=='appearance' ? 'show' : NULL).'" id="collapseExampleAppearance">
						<!--<li>
							<a href="{base_url}hukum">Themes</a>
						</li>
						<li>
							<a href="{base_url}hukum">Customize</a>
						</li>
						<li>
							<a href="{base_url}hukum">Widgets</a>
						</li>-->
						<li>
							<a href="'.base_url('appearance/menus').'" class="'.( ($this->uri->segment(1)=='appearance' ) && ($this->uri->segment(2)=='menus' ) ? 'bg-secondary' : NULL).'">Menus</a>
						</li>
						<li>
							<a href="{base_url}hukum">Background</a>
						</li>
					</ul>
				</li>
				<!--
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Plugins">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePlugins" data-parent="#exampleAccordion">
					<i class="fa fa-fw fa-plug"></i>
					<span class="nav-link-text">Plugins</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseExamplePlugins">
					<li>
						<a href="{base_url}hukum">Installed Plugins</a>
					</li>
					<li>
						<a href="{base_url}hukum">Add New</a>
					</li>
					</ul>
				</li> -->
				<li class="nav-item '.($this->uri->segment(1)=='website' ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Tools">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
					<i class="fa fa-fw fa-wrench"></i>
					<span class="nav-link-text">Tools</span>
					</a>
					<ul class="sidenav-second-level collapse '.($this->uri->segment(1)=='website' ? 'show' : NULL).'" id="collapseComponents">
						<li>
							<a href="'.base_url('website/title').'" class="'.( ($this->uri->segment(1)=='website' && $this->uri->segment(2)=='title') ? 'bg-secondary' : NULL).'">Seo Title</a>
						</li>
						<li>
							<a href="'.base_url('website/keyword').'" class="'.( ($this->uri->segment(1)=='website' && $this->uri->segment(2)=='keyword') ? 'bg-secondary' : NULL).'">Seo Keyword</a>
						</li>
						<li>
							<a href="'.base_url('website/description').'" class="'.( ($this->uri->segment(1)=='website' && $this->uri->segment(2)=='description') ? 'bg-secondary' : NULL).'">Seo Description</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  '.($this->uri->segment(1)=='user' ? 'active' : NULL).'" data-toggle="tooltip" data-placement="right" title="Users">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsUsers" data-parent="#exampleAccordion">
					<i class="fa fa-fw fa-user-circle-o"></i>
					<span class="nav-link-text">Users</span>
					</a>
					<ul class="sidenav-second-level collapse '.($this->uri->segment(1)=='user' ? 'show' : NULL).'" id="collapseComponentsUsers">
					<!--<li>
						<a href="'.base_url('user').'">All Users</a>
					</li>
					<li>
						<a href="'.base_url('user/add').'">Add New</a>
					</li>-->
					<li>
						<a href="'.base_url('user/edit').'" class="'.( ($this->uri->segment(1)=='user' && $this->uri->segment(2)=='edit') ? 'bg-secondary' : NULL).'">Your Profile</a>
					</li>
					</ul>
				</li>
			',
		);
	}

}