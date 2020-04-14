<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
        $this->load->model(['anggota_model']);
        
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

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
                    $no_hp    = $post['no_hp'];
                    $additional_data = array(
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
                        'email'=>$post['email'],
                        'no_hp'=>$post['no_hp'],
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
                    $no_hp    = $post['no_hp'];
                    $additional_data = array(
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
                        'email'=>$post['email'],
                        'no_hp'=>$post['no_hp'],
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
                            'no_hp'    => $post['no_hp'],                                       
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
                            'email'=>$post['email'],
                            'no_hp'=>$post['no_hp'],
                            'alamat'=>$post['alamat'],
                            'id_anggota'=>$post['id']
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
        $this->session->set_flashdata('msg','Anggota berhasil dihapus.');
        redirect('admin/anggota');
    }
}

