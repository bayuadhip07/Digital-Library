<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Umum_model extends CI_Model
{
    private $_agama = "agama";
    private $_univ = "universitas";
    private $_fakultas = "fakultas";
    private $_prodi = "prodi";
    private $_jk = "jenis_kelamin";

    public function tampilkan_data_kategori($table,$order){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,"ASC");
        return $this->db->get()->result_array();
    }

    public function tampilkan_data_kategori_desc($table,$order)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,"DESC");
        return $this->db->get()->result_array();
    }

    public function get_agama()
    {
        return $this->db->get($this->_agama)->result();
    }
    
    public function get_univ()
    {
        return $this->db->get($this->_univ)->result();
    }

    public function get_fakultas()
    {
        return $this->db->get($this->_fakultas)->result();
    }

    public function get_prodi()
    {
        return $this->db->get($this->_prodi)->result();
    }

    public function get_jenkel()
    {
        return $this->db->get($this->_jk)->result();
    }
}