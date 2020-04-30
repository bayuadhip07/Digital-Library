<?php defined('BASEPATH') OR exit('No direct script access allowed');

class skripsi_model extends CI_Model
{ //definisi class model skripsi_model

    //inisialisasi table skripsi yang ada didatabase
    private $_table = "skripsi";
    //inisialisasi field yang ada didatabase
    public $id_skripsi;
    public $judul;
    public $penulis;
    public $universitas;
    public $email;    
    public $tahun;
    public $file;

    
    
    private function _uploadskripsi() {
        $config['upload_path']  = './upload/dokumen/skripsi/';
        $config['allowed_types']    = 'pdf';        
        $config['file_name']    = $this->judul;
        $config['overwrite']    = true;
        $config['max_size']     = 10240; //10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('skripsi')) {
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }


    private function _updatePDFskripsi($id) {
        $post = $this->input->post();
        $config['upload_path']  = './upload/dokumen/skripsi/';
        $config['allowed_types']    = 'pdf';
        $skripsi = $this->skripsi_model->get_skripsi_by_id($id);
        $judul = $skripsi->judul;   
        $config['file_name']    = $post['judul'];
        $config['overwrite']    = true;
        $config['max_size']     = 10240; //10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('skripsi')) {
            // $this->_deletePDFJurnal($id);
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    //fungsi untuk menghapus file --query builder--
    private function _deletePDFskripsi($id) {
        $skripsi = $this->get_skripsi_by_id($id);
        if ($skripsi->file != NULL) {
            $filename = explode(".", $skripsi->file)[0];
            return array_map('unlink', glob(FCPATH."upload/dokumen/skripsi/".$filename."*"));
        }
    }


    //untuk query select atau menampilkan dari table database --query builder--
    public function getAll()
    {
        $this->db->select('skripsi.*');
        return $this->db->get($this->_table)->result();
    }

    public function add_skripsi($data)
    {
        $this->judul        = $data['judul'];
        $this->penulis      = $data['penulis'];
        $this->email        = $data['email'];
        $this->tahun        = $data['tahun'];
        $this->universitas  = $data['universitas'];
        $this->file         = $data['skripsi'];
        $this->file         = $this->_uploadskripsi();
        $this->db->insert($this->_table, $this);
    }
    

    public function update_skripsi($data)
    {
        $post = $this->input->post();
        $this->db->set('judul',$data['judul']);
        $this->db->set('penulis',$data['penulis']);
        $this->db->set('email',$data['email']);
        $this->db->set('tahun',$data['tahun']);
        $this->db->set('universitas',$data['universitas']);
        if(empty($_FILES['skripsi']['name']))
        {
            
        }
        else
        {
            $this->db->set('file',$this->_updatePDFskripsi($data['id_skripsi']));
        }
        $this->db->where('id_skripsi',$data['id_skripsi']);
        $this->db->update($this->_table);
    }


    //function untuk mengecek skripsi berdasarkan id 
    public function cek_skripsi_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_skripsi"=>$id])->num_rows();
    }

    public function get_skripsi_by_id($id)
    {
        $this->db->select('skripsi.*');
        return $this->db->get_where($this->_table ,['id_skripsi'=>$id])->row();
    }

    public function deleteskripsi($id)
    {
        $this->_deletePDFskripsi($id);
        $this->db->where("id_skripsi",$id);
        $this->db->delete($this->_table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('skripsi');
        $this->db->like('judul', $keyword);
        $this->db->or_like('penulis', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('tahun', $keyword);
        $this->db->or_like('universitas', $keyword);
        return $this->db->get()->result();
    }
}