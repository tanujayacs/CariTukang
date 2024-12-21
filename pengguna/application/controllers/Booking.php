<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index() {

        $this->load->view('header');
        $this->load->view('form_booking');
        $this->load->view('footer');
        

    }
}
