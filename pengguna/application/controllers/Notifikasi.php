<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{
    public function index() {  

        $this->load->model('Mnotifikasi');
        $this->load->model('Mbooking');
        $id_booking = $this->session->userdata('id_booking'); // Ambil ID customer dari session  
        $customer_id = $this->session->userdata('id_customer');  
        $data['notifikasi'] = $this->Mnotifikasi->get_all_notifikasi($id_booking); // Ambil notifikasi berdasarkan ID customer  
        $data['booking'] = $this->Mbooking->get_booking_by_customer($customer_id); // Ambil data booking  
      
        $this->load->view('header');  
        $this->load->view('profil/side_profil');  
        $this->load->view('profil/notifikasi_profil', $data);  
        // $this->load->view('footer');  
    }  
     
    

    public function detail_notifikasi($id_booking)
    {
        $this->load->model('Mbooking');
        $data['booking'] = $this->Mbooking->get_booking_by_id($id_booking);  
        $data['config'] = $this->config->item('url_booking'); 

        $data['config'] = [  
            'assets_booking' => $_SERVER['DOCUMENT_ROOT'] . "/CariTukang/assets/booking/",  
            'url_booking' => 'http://localhost/CariTukang/assets/booking/'  
        ]; 

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/detail_notifikasi', $data);
        // $this->load->view('footer');


    }
}
