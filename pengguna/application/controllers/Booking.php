<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mbooking');
        $this->load->model('Mkeahlian');
        // $this->load->model('Mbooking');
        $data['keahlian'] = $this->Mkeahlian->get_all();
        $data['customer'] = [
            'nama_booking' => $this->session->userdata('nama_customer'),
            'wa_booking' => $this->session->userdata('wa_customer'),
        ];

        $this->form_validation->set_rules('kabupaten/kota', 'kabupaten/kota', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('tanggal_booking', 'tanggal', 'required');


		$this->form_validation->set_message('required', '%s wajib di isi');
		$this->form_validation->set_message('is_unique', '%s sudah ada yang isi');

        $inputan = $this->input->post();


        if ($this->form_validation->run() == TRUE) {
            
            $inputan['kabupaten/kota'] = $this->input->post('kabupaten/kota');
            $inputan['kecamatan'] = $this->input->post('kecamatan');
            $inputan['alamat_lengkap'] = $this->input->post('alamat_lengkap');
            $inputan['tanggal_booking'] = $this->input->post('tanggal_booking');


            $this->Mbooking->simpan($inputan);
            $this->session->set_flashdata('pesan_sukses', 'data booking tersimpan');
            return redirect('notifikasi', 'refresh');
        }
        $this->load->view('header');
        $this->load->view('form_booking', $data);
        $this->load->view('footer');
    }
}
