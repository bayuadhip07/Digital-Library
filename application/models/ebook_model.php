<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ebook_model extends CI_Model
{ //definisi class model ebook_model

    //inisialisasi table ebook yang ada didatabase
    private $_table = "ebook";
    //inisialisasi field yang ada didatabase
    public $id_buku;
    public $judul;
    public $penulis;
    public $penerbit;
    public $kota;
    public $email;    
    public $tahun;
    public $sinopsis;
    public $file;

    
    
    private function _uploadEbook() {
        $config['upload_path']  = './upload/dokumen/ebook/';
        $config['allowed_types']    = 'pdf';        
        $config['file_name']    = $this->judul;
        $config['overwrite']    = true;
        $config['max_size']     = 10240; //10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('ebook')) {
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }


    private function _updatePDFEbook($id) {
        $post = $this->input->post();
        $config['upload_path']  = './upload/dokumen/ebook/';
        $config['allowed_types']    = 'pdf';
        $ebook = $this->ebook_model->get_ebook_by_id($id);
        $judul = $ebook->judul;   
        $config['file_name']    = $post['judul'];
        $config['overwrite']    = true;
        $config['max_size']     = 10240; //5MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pdf_ebook')) {
            // $this->_deletePDFJurnal($id);
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    //fungsi untuk menghapus file --query builder--
    private function _deletePDFEbook($id) {
        $ebook = $this->get_ebook_by_id($id);
        if ($ebook->file != NULL) {
            $filename = explode(".", $ebook->file)[0];
            return array_map('unlink', glob(FCPATH."upload/dokumen/ebook/".$filename."*"));
        }
    }


    //untuk query select atau menampilkan dari table database --query builder--
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add_ebook($data)
    {
        $this->judul    = $data['judul'];
        $this->penulis  = $data['penulis'];
        $this->email    = $data['email'];
        $this->tahun    = $data['tahun'];
        $this->penerbit = $data['penerbit'];
        $this->kota     = $data['kota'];
        $this->sinopsis = $data['sinopsis'];
        $this->file     = $data['ebook'];
        $this->file     = $this->_uploadEbook();
        $this->db->insert($this->_table, $this);
    }
    

    public function update_ebook($data)
    {
        $post = $this->input->post();
        $this->db->set('judul',$data['judul']);
        $this->db->set('penulis',$data['penulis']);
        $this->db->set('email',$data['email']);
        $this->db->set('tahun',$data['tahun']);
        $this->db->set('penerbit',$data['penerbit']);
        $this->db->set('kota',$data['kota']);
        $this->db->set('sinopsis',$data['sinopsis']);
        if(empty($_FILES['pdf_ebook']['name']))
        {
            
        }
        else
        {
            $this->db->set('file',$this->_updatePDFEbook($data['id_buku']));
        }
        $this->db->where('id_buku',$data['id_buku']);
        $this->db->update($this->_table);
    }


    //function untuk mengecek ebook berdasarkan id 
    public function cek_ebook_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_buku"=>$id])->num_rows();
    }

    public function get_ebook_by_id($id)
    {
        return $this->db->get_where($this->_table,["id_buku"=>$id])->row();
    }

    public function deleteEbook($id)
    {
        $this->_deletePDFEbook($id);
        $this->db->where("id_buku",$id);
        $this->db->delete($this->_table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('ebook');
        $this->db->like('judul', $keyword);
        $this->db->or_like('penulis', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('tahun', $keyword);
        $this->db->or_like('sinopsis', $keyword);
        return $this->db->get()->result();
    }
}