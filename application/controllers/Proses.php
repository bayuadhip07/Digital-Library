<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
        $this->load->model(['anggota_model','umum_model','jurnal_model']);
        
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

    }
    public function tambah_jurnal()
    {
        $post = $this->input->post();
        $data = [
            'judul'=>$post['judul'],
            'penulis'=>$post['penulis'],
            'tahun'=>$post['tahun'],
            'email'=>$post['email'],
            'issn'=>$post['issn'],
            'isbn'=>$post['isbn'],
            'abstrak'=>$post['abstrak'],
        ];
        $this->jurnal_model->add_jurnal($data);
        $this->session->set_flashdata('msg','Data Berhasil disimpan');
        redirect('admin/journal_admin');
    }

    public function edit_jurnal()
    {
        $post = $this->input->post();
        $jurnal = $this->jurnal_model->get_jurnal_by_id($post['id']);
        $id = $jurnal->id_jurnal;
        $data = [                                                    
            'judul'=>$post['judul'],
            'penulis'=>$post['penulis'],
            'tahun'=>$post['tahun'],
            'email'=>$post['email'],
            'issn'=>$post['issn'],
            'isbn'=>$post['isbn'],
            'abstrak'=>$post['abstrak'],
        ];
        $this->jurnal_model->update_jurnal($data);
        $this->session->set_flashdata('msg','Data berhasil diubah.');
        redirect('admin/journal_admin');   
    }   

    
    public function hapus_jurnal($id_jurnal) 
    {
        if($this->jurnal_model->cek_jurnal_by_id($id_jurnal)==0) 
        {
			redirect('admin/journal_admin');
        }
        $this->jurnal_model->deleteJurnal($id_jurnal);
        $this->session->set_flashdata('msg','Data jurnal berhasil dihapus.');
        redirect('admin/journal_admin');
    }

    public function add_user()
    {
        $post = $this->input->post();
        if($this->anggota_model->cek_anggota_by_nim(strtolower($post['nim']))==0)
        {
            if($this->anggota_model->cek_anggota_by_email(strtolower($post['email']))==0)
            {
                if($this->anggota_model->cek_anggota_by_no_hp(strtolower($post['no_hp']))==0)
                {
                    $username = $post['nim'];
                    $password = $post['password'];
                    $email    = $post['email'];
                    $additional_data = array(
                        'phone'=>$post['no_hp'],
                        'first_name'=>$post['nama'],
                        'last_name'=>''
                    );
                    $group = array('2');
                    $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);

                    $data = [
                        'id_user'=>$id_user,
                        'nama'=>$post['nama'],
                        'agama'=>$post['agama'],
                        'jk'=>$post['jk'],
                        'univ'=>$post['univ'],
                        'fakultas'=>$post['fakultas'],
                        'prodi'=>$post['prodi'],
                        'nim'=>strtolower($post['nim']),
                        'alamat'=>$post['alamat'],
                        'status'=>'Aktif'
                    ];
                    $this->anggota_model->add_anggota($data);
                    $this->session->set_flashdata('msg','Data Berhasil disimpan');
                    redirect('auth/login');
                }
                else
                {
                    $this->session->set_flashdata('err','No. HP sudah terdaftar');
                    redirect('home/add_anggota');
                }
            }
            else
            {
                $this->session->set_flashdata('err','E-mail sudah terdaftar');
                redirect('home/add_anggota');
            }
        }
        else
        {
            $this->session->set_flashdata('err','NIM sudah terdaftar');
            redirect('home/add_anggota');
        }

    }
    

    public function tambah_anggota()
    {
        $post = $this->input->post();
        if($this->anggota_model->cek_anggota_by_nim(strtolower($post['nim']))==0)
        {
            if($this->anggota_model->cek_anggota_by_email(strtolower($post['email']))==0)
            {
                if($this->anggota_model->cek_anggota_by_no_hp(strtolower($post['no_hp']))==0)
                {
                    $username = $post['nim'];
                    $password = $post['password'];
                    $email    = $post['email'];
                    $additional_data = array(
                        'phone'=>$post['no_hp'],
                        'first_name'=>$post['nama'],
                        'last_name'=>''
                    );
                    $group = array('2');
                    $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);

                    $data = [
                        'id_user'=>$id_user,
                        'nama'=>$post['nama'],
                        'agama'=>$post['agama'],
                        'jk'=>$post['jk'],
                        'univ'=>$post['univ'],
                        'fakultas'=>$post['fakultas'],
                        'prodi'=>$post['prodi'],
                        'nim'=>strtolower($post['nim']),
                        'alamat'=>$post['alamat'],
                        'status'=>'Aktif'
                    ];
                    $this->anggota_model->add_anggota($data);
                    $this->session->set_flashdata('msg','Data Berhasil disimpan');
                    redirect('admin/anggota');
                }
                else
                {
                    $this->session->set_flashdata('err','No. HP sudah terdaftar');
                    redirect('admin/tambah_anggota');
                }
            }
            else
            {
                $this->session->set_flashdata('err','E-mail sudah terdaftar');
                redirect('admin/tambah_anggota');
            }
        }
        else
        {
            $this->session->set_flashdata('err','NIM sudah terdaftar');
            redirect('admin/tambah_anggota');
        }

    }

    public function update_anggota()
    {
            $post = $this->input->post();
            $anggota = $this->anggota_model->get_anggota_by_id($post['id']);
            $id = $anggota->id_user;
            $data = [
                            'username' => $post['nim'],
                            'password' => $post['password'],
                            'email'    => $post['email'],
                            'phone'    => $post['no_hp'],                                       
                    ];
            $update = $this->ion_auth->update($id, $data);
                                                    
            if($update)
            {
                $data = [                                                    
                            'nama'=>$post['nama'],
                            'agama'=>$post['agama'],
                            'jk'=>$post['jk'],
                            'univ'=>$post['univ'],
                            'fakultas'=>$post['fakultas'],
                            'prodi'=>$post['prodi'],
                            'nim'=>strtolower($post['nim']),
                            'alamat'=>$post['alamat'],
                            'id_anggota'=>$post['id'],
                            'status'=>$post['status']
                        ];
                $this->anggota_model->update_anggota($data);
                $this->session->set_flashdata('msg','Data berhasil diubah.');
                redirect('admin/anggota');                                            
            }
            
    }

    public function hapus_anggota($id) 
    {
        if($this->anggota_model->cek_anggota_by_id($id)==0) 
        {
			redirect('admin/anggota');
        }
        $this->anggota_model->hapus_anggota($id);
        $this->session->set_flashdata('msg','Data anggota berhasil dihapus.');
        redirect('admin/anggota');
    }

    public function tambah_univ()
    {
        $post = $this->input->post();
        $data = [
            'id_univ'=>$post['id_univ'],
            'nama_univ'=>$post['nama_univ']
        ];
        if($this->umum_model->tambah_univ($data))
        {
            $this->session->set_flashdata('msg','Data Universitas berhasil disimpan.');
            redirect('admin/universitas');
        }
        else
        {
            $this->session->set_flashdata('err','Data Universitas gagal disimpan.');
            redirect('admin/universitas');
        }
    }

    public function update_univ()
    {
        $post = $this->input->post();
            $data = [
                'id_univ'=>$post['id_univ'],
                'nama_univ'=>$post['nama_univ']
            ];
            if($this->umum_model->update_univ($data))
            {
                $this->session->set_flashdata('msg','Data Universitas berhasil diubah.');
                redirect('admin/universitas');
            }
            else
            {
                $this->session->set_flashdata('err','Data Universitas gagal diubah.');
                redirect('admin/universitas');
            }
        
    }

    public function hapus_univ($id) 
    {
        if($this->umum_model->cek_univ_by_id($id)==0) 
        {
			redirect('admin/universitas');
        }
        $this->umum_model->hapus_univ($id);
        $this->session->set_flashdata('msg','Data universitas berhasil dihapus.');
        redirect('admin/universitas');
    }

    public function tambah_fakultas()
    {
        $post = $this->input->post();
        $data = [
            'id_fakultas'=>$post['id_fakultas'],
            'fakultas'=>$post['fakultas']
        ];
        if($this->umum_model->tambah_fakultas($data))
        {
            $this->session->set_flashdata('msg','Data Fakultas berhasil disimpan.');
            redirect('admin/fakultas');
        }
        else
        {
            $this->session->set_flashdata('err','Data Fakultas gagal disimpan.');
            redirect('admin/fakultas');
        }
    }

    public function update_fakultas()
    {
        $post = $this->input->post();
            $data = [
                'id_fakultas'=>$post['id_fakultas'],
                'fakultas'=>$post['nama']
            ];
            if($this->umum_model->update_fakultas($data))
            {
                $this->session->set_flashdata('msg','Data fakultas berhasil diubah.');
                redirect('admin/fakultas');
            }
            else
            {
                $this->session->set_flashdata('err','Data fakultas gagal diubah.');
                redirect('admin/fakultas');
            }
        
    }

    public function hapus_fakultas($id) 
    {
        if($this->umum_model->cek_fakultas_by_id($id)==0) 
        {
			redirect('admin/fakultas');
        }
        $this->umum_model->hapus_fakultas($id);
        $this->session->set_flashdata('msg','Data fakultas berhasil dihapus.');
        redirect('admin/fakultas');
    }

    public function tambah_prodi()
    {
        $post = $this->input->post();
        $data = [
            'id_prodi'=>$post['id_prodi'],
            'prodi'=>$post['prodi']
        ];
        if($this->umum_model->tambah_prodi($data))
        {
            $this->session->set_flashdata('msg','Data program studi berhasil disimpan.');
            redirect('admin/prodi');
        }
        else
        {
            $this->session->set_flashdata('err','Data program studi gagal disimpan.');
            redirect('admin/prodi');
        }
    }

    public function update_prodi()
    {
        $post = $this->input->post();
            $data = [
                'id_prodi'=>$post['id_prodi'],
                'prodi'=>$post['nama']
            ];
            if($this->umum_model->update_prodi($data))
            {
                $this->session->set_flashdata('msg','Data program studi berhasil diubah.');
                redirect('admin/prodi');
            }
            else
            {
                $this->session->set_flashdata('err','Data program studi gagal diubah.');
                redirect('admin/prodi');
            }
        
    }

    public function hapus_prodi($id) 
    {
        if($this->umum_model->cek_prodi_by_id($id)==0) 
        {
			redirect('admin/prodi');
        }
        $this->umum_model->hapus_prodi($id);
        $this->session->set_flashdata('msg','Data program studi berhasil dihapus.');
        redirect('admin/prodi');
    }
    
    public function tambah_agama()
    {
        $post = $this->input->post();
        $data = [
            'id_agama'=>$post['id_agama'],
            'agama'=>$post['nama']
        ];
        if($this->umum_model->tambah_agama($data))
        {
            $this->session->set_flashdata('msg','Data agama berhasil disimpan.');
            redirect('admin/agama');
        }
        else
        {
            $this->session->set_flashdata('err','Data agama gagal disimpan.');
            redirect('admin/agama');
        }
    }

    public function update_agama()
    {
        $post = $this->input->post();
            $data = [
                'id_agama'=>$post['id_agama'],
                'agama'=>$post['nama']
            ];
            if($this->umum_model->update_agama($data))
            {
                $this->session->set_flashdata('msg','Data agama berhasil diubah.');
                redirect('admin/agama');
            }
            else
            {
                $this->session->set_flashdata('err','Data agama gagal diubah.');
                redirect('admin/agama');
            }
        
    }

    public function hapus_agama($id) 
    {
        if($this->umum_model->cek_agama_by_id($id)==0) 
        {
			redirect('admin/agama');
        }
        $this->umum_model->hapus_agama($id);
        $this->session->set_flashdata('msg','Data agama berhasil dihapus.');
        redirect('admin/agama');
    }

    public function tambah_dokumen()
    {
        $post = $this->input->post();
        $data = [
            'id_dokumen'=>$post['id_dokumen'],
            'nama'=>$post['nama']
        ];
        if($this->umum_model->tambah_dokumen($data))
        {
            $this->session->set_flashdata('msg','Data jenis dokumen berhasil disimpan.');
            redirect('admin/dokumen');
        }
        else
        {
            $this->session->set_flashdata('err','Data jenis dokumen gagal disimpan.');
            redirect('admin/dokumen');
        }
    }

    public function update_dokumen()
    {
        $post = $this->input->post();
            $data = [
                'id_dokumen'=>$post['id_dokumen'],
                'nama'=>$post['nama']
            ];
            if($this->umum_model->update_dokumen($data))
            {
                $this->session->set_flashdata('msg','Data jenis dokumen berhasil diubah.');
                redirect('admin/dokumen');
            }
            else
            {
                $this->session->set_flashdata('err','Data jenis dokumen gagal diubah.');
                redirect('admin/dokumen');
            }
        
    }

    public function hapus_dokumen($id) 
    {
        if($this->umum_model->cek_dokumen_by_id($id)==0) 
        {
			redirect('admin/dokumen');
        }
        $this->umum_model->hapus_dokumen($id);
        $this->session->set_flashdata('msg','Data jenis dokumen berhasil dihapus.');
        redirect('admin/dokumen');
    }
}

