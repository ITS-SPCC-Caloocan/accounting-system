<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	/*public function index() {

	}*/

	public function index($page = 'dashboard')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('inc/default/header');
		$this->load->view('inc/default/sidebar', $data);
		$this->load->view('inc/default/navbar', $data);
		$this->load->view('pages/'.$page.'.php', $data);
		$this->load->view('inc/default/footer');
	}

	public function view($slug = NULL) {
		$data = '';

		if(empty($data)) {
			show_404();
		}

		$this->load->view('inc/default/header');
		$this->load->view('inc/default/sidebar', $data);
		$this->load->view('inc/default/navbar', $data);
		$this->load->view('pages/'.$page.'.php', $data);
		$this->load->view('inc/default/footer');
	}
}
