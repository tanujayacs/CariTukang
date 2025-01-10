<?php
class mitra extends  CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata("id_admin")) {
        //     redirect('/', 'refresh');
        // }
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
