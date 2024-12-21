<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
    public function index()
    {

        // $this->load->model("Mmitra");
        // $data['produk'] = $this->Mproduk->simpan();

        // $this->load->model('Mkategori');

        // $data['kategori'] = $this->Mkategori->tampil();
        $this->load->model('Mmitra');
        $this->load->model('Mkeahlian');
        $this->load->model('Mperan');
        // Ambil data 
        $data['peran'] = $this->Mperan->get_all();
        $data['keahlian'] = $this->Mkeahlian->get_all();
        $inputan = $this->input->post();
        if ($inputan) {

            $this->Mmitra->simpan($inputan);


            // echo '<pre>';
            // print_r($data['mitra']);
            // echo '</pre>';
            // exit;

            $this->session->set_flashdata('pesan_sukses', 'data mitra tersimpan');
            return redirect('mitra', 'refresh');
        }



        $this->load->view('header');
        $this->load->view('form_mitra', $data);
        $this->load->view('footer');
    }

    // function tambah() {}
}
