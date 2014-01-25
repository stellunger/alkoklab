<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
		$data['sidemenu'] = $this->load->view('side-menu', '', true);

		$this->load->view('header');
		$this->load->view('main1', $data);
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		
		$data['sidemenu'] = $this->load->view('side-menu', '', true);

		$this->load->view('header1');
		$this->load->view($page_id, $data);
		$this->load->view('footer');
	}
}

