<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Umum_model extends CI_Model
{
    public function tampilkan_data_kategori($table,$order){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,"ASC");
        return $this->db->get()->result_array();
    }

    public function tampilkan_data_kategori_desc($table,$order){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,"DESC");
        return $this->db->get()->result_array();
    }
}