<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    private $_table = "anggota";
    public $id_anggota;
    public $nama;
    public $nim;
    public $jk;
    public $agama;
    public $univ;
    public $fakultas;
    public $prodi;
    public $alamat;
    public $email;
    public $no_hp;
    public $id_user;
    public $foto;
    public $status;

    private function _uploadImage() {
        $config['upload_path']  = './upload/foto/';
        $config['allowed_types']    = 'jpg|png';        
        $config['file_name']    = $this->nama;
        $config['overwrite']    = true;
        $config['max_size']     = 2048; //2MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    private function _updateImage($id) {
        $config['upload_path']  = './upload/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg';        
        $config['file_name']    = $this->nama;
        $config['overwrite']    = true;
        $config['max_size']     = 2048; //2MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $this->_deleteImage($id);
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    //fungsi untuk menghapus gambar --query builder--
    private function _deleteImage($id) {
        $anggota = $this->get_anggota_by_id_anggota($id);
        if ($anggota->foto != NULL) {
            $filename = explode(".", $anggota->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/foto/".$filename."*"));
        }
    }

    public function cek_anggota_by_nim($nim)
    {
        return $this->db->get_where($this->_table,['nim'=>$nim])->num_rows();
    }

    public function add_anggota($data)
    {
        $this->nama     = $data['nama'];
        $this->agama    = $data['agama'];
        $this->jk       = $data['jk'];
        $this->univ     = $data['univ'];
        $this->fakultas = $data['fakultas'];
        $this->prodi    = $data['prodi'];
        $this->nim      = $data['nim'];
        $this->no_hp    = $data['no_hp'];
        $this->alamat   = $data['alamat'];
        $this->email    = $data['email'];
        $this->status   = $data['status'];
        $this->id_user  = $data['id_user'];
        $this->foto     = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }
}