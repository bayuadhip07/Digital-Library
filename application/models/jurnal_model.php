<?php defined('BASEPATH') OR exit('No direct script access allowed');

class jurnal_model extends CI_Model
{ //definisi class model jurnal_model

    //inisialisasi table jurnal yang ada didatabase
    private $_table = "jurnal";
    //inisialisasi field yang ada didatabase
    public $id_jurnal;
    public $judul;
    public $penulis;
    public $abstrak;
    public $email;    
    public $tahun;
    public $issn;
    public $isbn;
    public $pdf_jurnal;
    
    private function _uploadJurnal() {
        $config['upload_path']  = './upload/dokumen/jurnal/';
        $config['allowed_types']    = 'pdf';        
        $config['file_name']    = $this->judul;
        $config['overwrite']    = true;
        $config['max_size']     = 2048; //2MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pdf_jurnal')) {
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    private function _updatePDFJurnal($id) {
        $config['upload_path']  = './upload/dokumen/jurnal/';
        $config['allowed_types']    = 'pdf'; 
        $jurnal = $this->jurnal_model->get_jurnal_by_id($id);
        $judul = $jurnal->judul;       
        $config['file_name']    = $judul;
        $config['overwrite']    = true;
        $config['max_size']     = 2048; //2MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pdf_jurnal')) {
            // $this->_deleteImage($id);
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    //fungsi untuk menghapus file --query builder--
    private function _deletePDFJurnal($id) {
        $jurnal = $this->get_jurnal_by_id($id);
        if ($jurnal->pdf_jurnal != NULL) {
            $filename = explode(".", $jurnal->pdf_jurnal)[0];
            return array_map('unlink', glob(FCPATH."upload/dokumen/jurnal/".$filename."*"));
        }
    }


    //untuk query select atau menampilkan dari table database --query builder--
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add_jurnal($data)
    {
        $this->judul    = $data['judul'];
        $this->penulis  = $data['penulis'];
        $this->email    = $data['email'];
        $this->tahun    = $data['tahun'];
        $this->issn     = $data['issn'];
        $this->isbn     = $data['isbn'];
        $this->abstrak  = $data['abstrak'];
        $this->pdf_jurnal = $data['pdf_jurnal'];
        $this->pdf_jurnal = $this->_uploadJurnal();
        $this->db->insert($this->_table, $this);
    }

    public function update_jurnal($data)
    {
        $post = $this->input->post();
        $this->db->set('judul',$data['judul']);
        $this->db->set('penulis',$data['penulis']);
        $this->db->set('email',$data['email']);
        $this->db->set('tahun',$data['tahun']);
        $this->db->set('issn',$data['issn']);
        $this->db->set('isbn',$data['isbn']);
        $this->db->set('abstrak',$data['abstrak']);
        if(empty($_FILES['pdf_jurnal']['name']))
        {
            
        }
        else
        {
            $this->db->set('pdf_jurnal',$this->_updatePDFJurnal($data['id_jurnal']));
        }
        $this->db->where('id_jurnal',$data['id_jurnal']);
        $this->db->update($this->_table);
    }


    //function untuk mengecek jurnal berdasarkan id 
    public function cek_jurnal_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_jurnal"=>$id])->num_rows();
    }

    public function get_jurnal_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_jurnal"=>$id])->row();
    }


    public function deleteJurnal($id)
    {
        $this->_deletePDFJurnal($id);
        $this->db->where("id_jurnal",$id);
        $this->db->delete($this->_table);
    }
}