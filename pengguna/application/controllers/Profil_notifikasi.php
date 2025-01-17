<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_notifikasi extends CI_Controller
{
    public function index() {

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/notifikasi_profil');
        // $this->load->view('footer');
        

    }
}