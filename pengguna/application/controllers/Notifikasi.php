<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{
    public function index() {

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/notifikasi_profil');
        // $this->load->view('footer');
        

    }

    public function detail_notifikasi() {

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/detail_notifikasi');
        // $this->load->view('footer');
        

    }
}