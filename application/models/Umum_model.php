<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Umum_model extends CI_Model
{
    private $_agama = "agama";
    private $_univ = "universitas";
    private $_fakultas = "fakultas";
    private $_prodi = "prodi";
    private $_jk = "jenis_kelamin";
    private $_dokumen = "jenis_dokumen";
    

    public function tampilkan_data_kategori($table,$order)
    {
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
    
    public function cek_univ_by_id($id)
    {
        return $this->db->get_where($this->_univ,['id_univ'=>$id])->num_rows();
    }

    public function cek_univ_by_nama($nama)
    {
        return $this->db->get_where($this->_univ,['nama_univ'=>$nama])->num_rows();
    }

    public function get_univ()
    {
        return $this->db->get($this->_univ)->result();
    }

    public function get_univ_by_id($id)
    {
        $this->db->where('id_univ',$id);
        return $this->db->get($this->_univ)->row();
    }

    public function tambah_univ($data)
    {
        $this->nama_univ = $data['nama_univ'];
        $this->db->insert($this->_univ, $this);
        return true;
    }

    public function update_univ($data)
    {
        $this->db->set('nama_univ',$data['nama_univ']);
        $this->db->where('id_univ',$data['id_univ']);
        $this->db->update($this->_univ);
        return true;
    }

    public function hapus_univ($id) 
    {
        $this->db->where('id_univ',$id);
        $this->db->delete($this->_univ);
    }

    public function cek_fakultas_by_id($id)
    {
        return $this->db->get_where($this->_fakultas,['id_fakultas'=>$id])->num_rows();
    }

    public function get_fakultas()
    {
        return $this->db->get($this->_fakultas)->result();
    }

    public function get_fakultas_by_id($id)
    {
        $this->db->where('id_fakultas',$id);
        return $this->db->get($this->_fakultas)->row();
    }

    public function tambah_fakultas($data)
    {
        $this->fakultas = $data['fakultas'];
        $this->db->insert($this->_fakultas, $this);
        return true;
    }

    public function update_fakultas($data)
    {
        $this->db->set('fakultas',$data['fakultas']);
        $this->db->where('id_fakultas',$data['id_fakultas']);
        $this->db->update($this->_fakultas);
        return true;
    }

    public function hapus_fakultas($id) 
    {
        $this->db->where('id_fakultas',$id);
        $this->db->delete($this->_fakultas);
    }

    public function get_prodi()
    {
        return $this->db->get($this->_prodi)->result();
    }

    public function cek_prodi_by_id($id)
    {
        return $this->db->get_where($this->_prodi,['id_prodi'=>$id])->num_rows();
    }


    public function get_prodi_by_id($id)
    {
        $this->db->where('id_prodi',$id);
        return $this->db->get($this->_prodi)->row();
    }

    public function tambah_prodi($data)
    {
        $this->prodi = $data['prodi'];
        $this->db->insert($this->_prodi, $this);
        return true;
    }

    public function update_prodi($data)
    {
        $this->db->set('prodi',$data['prodi']);
        $this->db->where('id_prodi',$data['id_prodi']);
        $this->db->update($this->_prodi);
        return true;
    }

    public function hapus_prodi($id) 
    {
        $this->db->where('id_prodi',$id);
        $this->db->delete($this->_prodi);
    }

    public function get_agama()
    {
        return $this->db->get($this->_agama)->result();
    }

    public function cek_agama_by_id($id)
    {
        return $this->db->get_where($this->_agama,['id_agama'=>$id])->num_rows();
    }

    public function get_agama_by_id($id)
    {
        $this->db->where('id_agama',$id);
        return $this->db->get($this->_agama)->row();
    }

    public function tambah_agama($data)
    {
        $this->agama = $data['agama'];
        $this->db->insert($this->_agama, $this);
        return true;
    }

    public function update_agama($data)
    {
        $this->db->set('agama',$data['agama']);
        $this->db->where('id_agama',$data['id_agama']);
        $this->db->update($this->_agama);
        return true;
    }

    public function hapus_agama($id) 
    {
        $this->db->where('id_agama',$id);
        $this->db->delete($this->_agama);
    }

    public function get_jenkel()
    {
        return $this->db->get($this->_jk)->result();
    }

    public function get_dokumen()
    {
        return $this->db->get($this->_dokumen)->result();
    }

    public function cek_dokumen_by_id($id)
    {
        return $this->db->get_where($this->_dokumen,['id_dokumen'=>$id])->num_rows();
    }

    public function get_dokumen_by_id($id)
    {
        $this->db->where('id_dokumen',$id);
        return $this->db->get($this->_dokumen)->row();
    }

    public function tambah_dokumen($data)
    {
        $this->nama = $data['nama'];
        $this->db->insert($this->_dokumen, $this);
        return true;
    }

    public function update_dokumen($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->where('id_dokumen',$data['id_dokumen']);
        $this->db->update($this->_dokumen);
        return true;
    }

    public function hapus_dokumen($id) 
    {
        $this->db->where('id_dokumen',$id);
        $this->db->delete($this->_dokumen);
    }



}