<?php
class mitra extends  CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id_admin")) {
            redirect('/', 'refresh');
        }
    }
    function index()
    {
        $this->load->model('Mmitra');
        $data['mitra'] = $this->Mmitra->tampil();
        $data['peran'] = $this->Mmitra->peran();
        $data['keahlian'] = $this->Mmitra->keahlian();

        //         echo '<pre>';
        // print_r($data['mitra']);
        // print_r($data['peran']);
        // print_r($data['keahlian']);
        // echo '</pre>';
        // exit;

        $this->load->view('sidebar');
        $this->load->view('header');
        $this->load->view('mitra_tampil', $data);
        $this->load->view('footer');
    }

    public function ubah($id_mitra)  
    {   
        $this->load->model('Mmitra');
        $data['mitra'] = $this->Mmitra->detail($id_mitra);  
        $data['peran'] = $this->Mmitra->peran();  
        $data['keahlian'] = $this->Mmitra->keahlian();   

        // Cek apakah mitra ditemukan
        if (!$data['mitra']) {
            $this->session->set_flashdata('error', 'Data mitra tidak ditemukan');
            redirect('mitra');
            return;
        }
        
        if ($this->input->post()) {    
            $update_data = [    
                'nama_mitra' => $this->input->post('nama_mitra'),    
                'wa_mitra' => $this->input->post('wa_mitra'),    
                'usia_mitra' => $this->input->post('usia_mitra'),    
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),    
                'kabupaten_kota' => $this->input->post('kabupaten_kota'),    
                'kecamatan' => $this->input->post('kecamatan'),    
                'id_peran' => $this->input->post('id_peran'),    
                'pengalaman_mitra' => $this->input->post('pengalaman_mitra'),    
                'id_keahlian' => $this->input->post('id_keahlian')    
            ];    

            $berhasil = $this->Mmitra->update_mitra($id_mitra, $update_data);    

            if ($berhasil) {
                $this->session->set_flashdata('success', 'Data mitra berhasil diperbarui');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui data mitra');
            }

            redirect('mitra'); 
        } else {
            // Tampilkan form ubah dengan data mitra
            $this->load->view('header');
            $this->load->view('mitra/ubah', $data);
        }
    }
  

    function hapus($id_mitra) {
		$this->load->model("Mmitra");
		$this->Mmitra->hapus($id_mitra);
		$this->session->set_flashdata('pesan_sukses','Data mitra terhapus');
		redirect('mitra','refresh');
	}

    // function detail($id_mitra) {

    // 	$this->load->model('Mmitra');
    // 	$data["mitra"] = $this->Mmitra->detail($id_mitra);

    // 	// $this->load->model("Mtransaksi");
    // 	// $data['jual'] = $this->Mtransaksi->transaksi_mitra_jual($id_mitra);
    // 	// $data['beli'] = $this->Mtransaksi->transaksi_mitra_beli($id_mitra);

    // 	$this->load->view('sidebar');
    // 	$this->load->view('header');
    // 	$this->load->view('mitra_detail', $data); 
    // 	$this->load->view('footer');
    // }
}
