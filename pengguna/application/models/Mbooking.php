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
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

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
        public function get_booking_by_customer($customer_id) {  
            $this->db->where('id_customer', $customer_id);  
            $query = $this->db->get('booking');  
            return $query->result_array(); 
        }  

        public function get_booking_by_id($id_booking) {  
            $this->db->where('id_booking', $id_booking);  
            $query = $this->db->get('booking');  
            return $query->row_array(); 
        }  

        public function hitung_booking($id_customer) {  
            $this->db->where('id_customer', $id_customer);  
            return $this->db->count_all_results('booking'); 
        }  

        public function dapatkan_booking() {  
            $this->db->distinct();  
            $this->db->select('id_booking'); 
            $query = $this->db->get('booking');   
            return $query->num_rows();
        }  
        
    }

        
    
    

