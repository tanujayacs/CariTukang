<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mkeahlian extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('keahlian')->result_array();
    }
}