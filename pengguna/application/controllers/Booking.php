<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mbooking');
        $this->load->model('Mkeahlian');

        $data['keahlian'] = $this->Mkeahlian->get_all();
        $data['customer'] = [
            'nama_booking' => $this->session->userdata('nama_customer'),
            'wa_booking' => $this->session->userdata('wa_customer'),
        ];

        $inputan = $this->input->post();
        if ($inputan) {

            $this->load->model('Mbooking');
            $this->Mbooking->simpan($inputan);

            $this->session->set_flashdata('pesan_sukses', 'data booking tersimpan');
            return redirect('profil', 'refresh');
        }
        $this->load->view('header');
        $this->load->view('form_booking', $data);
        $this->load->view('footer');
    }
}
