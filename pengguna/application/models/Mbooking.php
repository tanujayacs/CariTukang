<?php
defined('BASEPATH') OR exit ('No direct script access allowed'); 
class Mbooking extends CI_Model{

    function tampil()
    {
        $data = $this->db->get('booking');
        $dt = $data->result_array();
        return $dt;
    }

    function simpan($inputan)
    {
        $config['upload_path'] = $this->config->item('assets_booking');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $ngupload = $this->upload->do_upload("foto_kendala");

        if ($ngupload) {
            $inputan['foto_kendala'] = $this->upload->data("file_name");
        }

        $inputan['id_customer'] = $this->session->userdata("id_customer");
        $inputan['nama_booking'] = $this->session->userdata('nama_customer');
        $inputan['wa_booking'] = $this->session->userdata('wa_customer');

        $this->db->insert('booking', $inputan);
    }

    // function hapus($id_booking)
    // {
    //     $this->db->Where('id_booking', $id_booking);
    //     $this->db->delete('booking');
    // }
    

    // function detail($id_booking)
    // {
    //     $this->db->where('id_booking', $id_booking);
    //     $q = $this->db->get('booking');
    //     $d = $q->row_array();
    //     return $d;
    // }

    // function ubah($inputan, $id_booking)
    // {
    //     $config['upload_path']          = $this->config->item('assets_booking');
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $this->load->library("upload", $config);

    //     $ngupload = $this->upload->do_upload("foto_kendala");

    //     if ($ngupload) {
    //         $inputan['foto_kendala'] = $this->upload->data("file_name");
    //     }

    //     $this->db->where('id_booking', $id_booking);
    //     $this->db->update('booking', $inputan);
    // }
}               