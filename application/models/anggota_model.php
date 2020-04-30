<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    private $_table = "anggota";
    private $_users = "users";
    public $id_anggota;
    public $nama;
    public $nim;
    public $jk;
    public $agama;
    public $univ;
    public $fakultas;
    public $prodi;
    public $alamat;
    // public $email;
    // public $no_hp;
    public $id_user;
    public $foto;
    public $status;

    
    private function _uploadImage() {
        $config['upload_path']  = './upload/foto/';
        $config['allowed_types']    = 'jpg|png';        
        $config['file_name']    = $this->nama;
        $config['overwrite']    = true;
        $config['max_size']     = 4096; //4MB
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
        $anggota = $this->anggota_model->get_anggota_by_id($id);
        $nama = $anggota->nama;       
        $config['file_name']    = $nama;
        $config['overwrite']    = true;
        $config['max_size']     = 4096; //4MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            // $this->_deleteImage($id);
            return $this->upload->data('file_name');
        } else {
            return NULL;
        }
    }

    //fungsi untuk menghapus gambar --query builder--
    private function _deleteImage($id) {
        $anggota = $this->get_anggota_by_id($id);
        if ($anggota->foto != NULL) {
            $filename = explode(".", $anggota->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/foto/".$filename."*"));
        }
    }

    public function cek_anggota_by_nim($nim)
    {
        return $this->db->get_where($this->_table,['nim'=>$nim])->num_rows();
    }

    public function cek_anggota_by_email($email)
    {
        return $this->db->get_where($this->_users,['email'=>$email])->num_rows();
    }

    public function cek_anggota_by_no_hp($no_hp)
    {
        return $this->db->get_where($this->_users,['phone'=>$no_hp])->num_rows();
    }

    public function cek_anggota_by_id($id)
    {
        return $this->db->get_where($this->_table,['id_anggota'=>$id])->num_rows();
    }

    public function get_all()
    {
        $this->db->select('t.*, u.email');
        $this->db->join('users u', 'u.id = t.id_user');        
        return $this->db->get($this->_table." t")->result();
    }

    public function get_anggota_by_id($id)
    {
        $this->db->select('anggota.*, u.password , u.email , u.phone , a.agama , b.nama_univ , c.fakultas , d.prodi , e.jenis_kelamin');
        $this->db->join('users u', 'u.id = anggota.id_user');
        $this->db->join('agama a', 'a.id_agama = anggota.agama');
        $this->db->join('universitas b', 'b.id_univ = anggota.univ');
        $this->db->join('fakultas c', 'c.id_fakultas = anggota.fakultas');
        $this->db->join('prodi d', 'd.id_prodi = anggota.prodi');
        $this->db->join('jenis_kelamin e', 'e.id_jk = anggota.jk');
        return $this->db->get_where($this->_table ,['id_anggota'=>$id])->row();
    }

    public function get_anggota_by_id_user($id)
    {
        $this->db->select('anggota.*, u.password , u.email , u.phone , a.agama , b.nama_univ , c.fakultas , d.prodi , e.jenis_kelamin');
        $this->db->join('users u', 'u.id = anggota.id_user');
        $this->db->join('agama a', 'a.id_agama = anggota.agama');
        $this->db->join('universitas b', 'b.id_univ = anggota.univ');
        $this->db->join('fakultas c', 'c.id_fakultas = anggota.fakultas');
        $this->db->join('prodi d', 'd.id_prodi = anggota.prodi');
        $this->db->join('jenis_kelamin e', 'e.id_jk = anggota.jk');
        return $this->db->get_where($this->_table ,['id_user'=>$id])->row();
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
        $this->alamat   = $data['alamat'];
        $this->status   = $data['status'];
        $this->id_user  = $data['id_user'];
        $this->foto     = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update_anggota($data)
    {
        $post = $this->input->post();
        $this->db->set('nama',$data['nama']);
        $this->db->set('agama',$data['agama']);
        $this->db->set('jk',$data['jk']);
        $this->db->set('univ',$data['univ']);
        $this->db->set('fakultas',$data['fakultas']);
        $this->db->set('prodi',$data['prodi']);
        $this->db->set('nim',$data['nim']);
        $this->db->set('alamat',$data['alamat']);
        $this->db->set('status',$data['status']); 
        if(empty($_FILES['foto']['name']))
        {
            
        }
        else
        {
            $this->db->set('foto',$this->_updateImage($data['id_anggota']));
        }
        $this->db->where('id_anggota',$data['id_anggota']);
        $this->db->update($this->_table);
    }

    public function hapus_user($id)
    {
        $anggota = $this->anggota_model->get_anggota_by_id($id);
        $id_user = $anggota->id_user;
        $this->db->where('id',$id_user);
        $this->db->delete($this->_users);
    }
    
    public function hapus_anggota($id) 
    {
        $this->_deleteImage($id);
        $this->hapus_user($id);
        $this->db->where('id_anggota',$id);
        $this->db->delete($this->_table);
    }
}