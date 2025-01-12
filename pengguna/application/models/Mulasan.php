<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Mulasan extends CI_Model {  
  
    public function __construct() {  
        parent::__construct();  
        $this->load->database();  
    }  
  
    // Mengambil semua ulasan  
    public function dapatkan_semua_ulasan() {  
        $query = $this->db->get('ulasan');
        return $query->result_array();  
    }  
  
    // Mengambil ulasan berdasarkan ID  
    public function dapatkan_id_ulasan($id) {  
        $this->db->where('id_ulasan', $id);  
        $query = $this->db->get('ulasan'); 
        return $query->row_array();
    }  

    public function tambah($data) {  
        return $this->db->insert('ulasan', $data);
    }  
    public function ubah($id, $data) {  
        $this->db->where('id_ulasan', $id);  
        return $this->db->update('ulasan', $data);   
    }  
    public function hapus($id) {  
        return $this->db->delete('ulasan', array('id_ulasan' => $id));
    }  
    public function cek_ulasan($customer_id) {  
        $this->db->where('id_customer', $customer_id);  
        $query = $this->db->get('ulasan'); 
        return $query->num_rows() > 0; 
    }      
}  
?>  
