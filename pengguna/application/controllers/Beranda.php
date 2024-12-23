<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
	public function index()
	{

		$data['url_bgalur'] = $this->config->item('url_bgalur');

		$this->load->view('header');
		$this->load->view('beranda', $data);
		$this->load->view('footer');
		
	}

	public function FAQ()
	{

		$data['url_bgalur'] = $this->config->item('url_bgalur');

		$this->load->view('header');
		$this->load->view('faq', $data);
		$this->load->view('footer');
		
	}
}
?>