<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
    public function index() {

        $this->load->view('header');
        $this->load->view('form_mitra');
        $this->load->view('footer');
        

    }
}
