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

        // $this->form_validation->set_rules('nama_mitra', 'Nama Lengkap', 'required|is_unique[mitra.nama_mitra]');
        // $this->form_validation->set_rules('usia_mitra', 'Usia ', 'required');
        // $this->form_validation->set_rules('wa_mitra', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('kabupaten/kota', 'kabupaten/kota', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('tanggal_booking', 'tanggal', 'required');
        // $this->form_validation->set_rules('foto_kendala', 'Foto', 'required');
        // $this->form_validation->set_rules('deskripsi_booking', '', 'required');


		$this->form_validation->set_message('required', '%s wajib di isi');
		$this->form_validation->set_message('is_unique', '%s sudah ada yang isi');

        $inputan = $this->input->post();


        if ($this->form_validation->run() == TRUE) {
            
            $inputan['kabupaten/kota'] = $this->input->post('kabupaten/kota');
            $inputan['kecamatan'] = $this->input->post('kecamatan');
            $inputan['alamat_lengkap'] = $this->input->post('alamat_lengkap');
            $inputan['tanggal_booking'] = $this->input->post('tanggal_booking');
            // $inputan['foto_kendala'] = $this->input->post('foto_kendala');
            // $inputan['deskripsi_booking'] = $this->input->post('deskripsi_booking');		


            $this->Mbooking->simpan($inputan);
            $this->session->set_flashdata('pesan_sukses', 'data booking tersimpan');
            return redirect('profil', 'refresh');
        }
        // $inputan = $this->input->post();
        // if ($inputan) {

           
        //     $this->Mbooking->simpan($inputan);

        //     $this->session->set_flashdata('pesan_sukses', 'data booking tersimpan');
        //     return redirect('profil', 'refresh');
        // }
        $this->load->view('header');
        $this->load->view('form_booking', $data);
        $this->load->view('footer');
    }
}
