<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ulasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mulasan');
    }

    public function index()
    {

        $data['ulasan'] = $this->Mulasan->dapatkan_semua_ulasan();

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/detail_ulasan', $data);
    }


    // Menampilkan ulasan berdasarkan ID  
    public function view($id)
    {
        $data['ulasan'] = $this->Mulasan->dapatkan_id_ulasan($id);
        $this->load->view('detail_ulasan', $data);
    }

    // Menampilkan form tambah ulasan  
    public function tambah()
    {
        $customer_id = $this->session->userdata('id_customer'); 
    
    
        if ($this->Mulasan->cek_ulasan($customer_id)) {
         
            $this->session->set_flashdata('message', 'Anda sudah memiliki ulasan. Hanya diperbolehkan satu ulasan per customer.');
            redirect('ulasan');
        }
    
        // Cek apakah form disubmit
        if ($this->input->post()) {
            $data = [
                'jumlah_ulasan' => $this->input->post('jumlah_ulasan'),
                'deskripsi_ulasan' => $this->input->post('deskripsi_ulasan'),
                'waktu_ulasan' => date('Y-m-d H:i:s'),
                'id_customer' => $customer_id 
            ];
    
            if ($this->Mulasan->tambah($data)) {
                redirect('ulasan'); 
            } else {
                echo "Gagal menambahkan ulasan!";
            }
        } else {
            // Jika tidak disubmit, tampilkan form
            $this->load->view('header');
            $this->load->view('profil/side_profil');
            $this->load->view('profil/tambah_ulasan');
        }
    }
    


    // Menghapus ulasan  
    public function hapus($id)
    {
        if ($this->Mulasan->hapus($id)) {
            redirect('ulasan'); 
        } else {
            echo "Gagal menghapus ulasan!";
        }
    }

    public function ubah($id) {  
        $customer_id = $this->session->userdata('id_customer'); // Ambil ID customer dari session  
        $ulasan = $this->Mulasan->dapatkan_id_ulasan($id); // Ambil ulasan berdasarkan ID  
   
        // Pastikan ulasan yang akan diubah milik customer yang sedang login  
        if ($ulasan['id_customer'] != $customer_id) {  
            show_error('Anda tidak memiliki akses untuk mengubah ulasan ini.');  
        }  
   
        // Cek apakah form disubmit  
        if ($this->input->post()) {  
            // Jika form disubmit, simpan perubahan  
            $data = [  
                'jumlah_ulasan' => $this->input->post('jumlah_ulasan'),  
                'deskripsi_ulasan' => $this->input->post('deskripsi_ulasan'),  
                'waktu_ulasan' => date('Y-m-d H:i:s')  
            ];  
   
            if ($this->Mulasan->ubah($id, $data)) {  
                redirect('ulasan'); // Redirect ke halaman ulasan setelah berhasil  
            } else {  
                echo "Gagal mengubah ulasan!";  
            }  
        } else {  
            // Jika tidak disubmit, tampilkan form  
            $data['ulasan'] = $ulasan; // Kirim data ulasan ke view  
   
            $this->load->view('header');  
            $this->load->view('profil/side_profil');  
            $this->load->view('profil/ubah_ulasan', $data);  
        }  
    }  
 
}
