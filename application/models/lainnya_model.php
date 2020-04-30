<?php defined('BASEPATH') OR exit('No direct script access allowed');

class lainnya_model extends CI_Model
{ //definisi class model lainnya_model

    //inisialisasi table lainnya yang ada didatabase
    private $_table = "lainnya";
    //inisialisasi field yang ada didatabase
    public $id_lainnya;
    public $judul;
    public $penulis;
    public $tahun;
    public $email;    
    public $jenis_dokumen;
    public $ringkasan;
    public $file;

    
    
    private function _uploadlainnya() {
        $config['upload_path']  = './upload/dokumen/lainnya/';
        $config['allowed_types']    = 'pdf';        
        $config['file_name']    = $this->judul;
        $config['overwrite']    = true;
        $config['max_size']     = 10240; //10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    private function _updatePDFlainnya($id) {
        $post = $this->input->post();
        $config['upload_path']  = './upload/dokumen/lainnya/';
        $config['allowed_types']    = 'pdf'; 
        $lainnya = $this->lainnya_model->get_lainnya_by_id($id);
        $judul = $lainnya->judul;   
        $config['file_name']    = $post['judul'];
        $config['overwrite']    = true;
        $config['max_size']     = 10240; //10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            // $this->_deletePDFlainnya($id);
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    //fungsi untuk menghapus file --query builder--
    private function _deletePDFlainnya($id) {
        $lainnya = $this->get_lainnya_by_id($id);
        if ($lainnya->file != NULL) {
            $filename = explode(".", $lainnya->file)[0];
            return array_map('unlink', glob(FCPATH."upload/dokumen/lainnya/".$filename."*"));
        }
    }


    //untuk query select atau menampilkan dari table database --query builder--
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add_lainnya($data)
    {
        $this->judul        = $data['judul'];
        $this->penulis      = $data['penulis'];
        $this->email        = $data['email'];
        $this->tahun        = $data['tahun'];
        $this->ringkasan    = $data['ringkasan'];
        $this->jenis_dokumen= $data['jenis'];
        $this->file         = $data['file'];
        $this->file         = $this->_uploadlainnya();
        $this->db->insert($this->_table, $this);
    }

    public function update_lainnya($data)
    {
        $post = $this->input->post();
        $this->db->set('judul',$data['judul']);
        $this->db->set('penulis',$data['penulis']);
        $this->db->set('email',$data['email']);
        $this->db->set('tahun',$data['tahun']);
        $this->db->set('jenis_dokumen',$data['jenis']);
        $this->db->set('ringkasan',$data['ringkasan']);
        if(empty($_FILES['file']['name']))
        {
            
        }
        else
        {
            $this->db->set('file',$this->_updatePDFlainnya($data['id_lainnya']));
        }
        $this->db->where('id_lainnya',$data['id_lainnya']);
        $this->db->update($this->_table);
    }


    //function untuk mengecek lainnya berdasarkan id 
    public function cek_lainnya_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_lainnya"=>$id])->num_rows();
    }

    public function get_lainnya_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_lainnya"=>$id])->row();
    }


    public function deletelainnya($id)
    {
        $this->_deletePDFlainnya($id);
        $this->db->where("id_lainnya",$id);
        $this->db->delete($this->_table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('lainnya');
        $this->db->like('judul', $keyword);
        $this->db->or_like('penulis', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('tahun', $keyword);
        $this->db->or_like('ringkasan', $keyword);
        $this->db->or_like('jenis_dokumen', $keyword);
        return $this->db->get()->result();
    }

}