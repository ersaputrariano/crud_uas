<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('m_mahasiswa');

        $data = array(
            'data_mahasiswa' => $this->m_mahasiswa->get_mahasiswa()->result()
        );
        //load view
        $this->load->view('data_mahasiswa', $data);
    }
    public function tambah()
    {
        //load view
        $this->load->view('tambah_mahasiswa');
    }

    public function simpan()
    {
        //load model
        $this->load->model('m_mahasiswa');

        //get data dari form
        $npm             = $this->input->post('npm');
        $nama_lengkap    = $this->input->post('nama_lengkap');
        $jurusan         = $this->input->post('jurusan');
        $alamat          = $this->input->post('alamat');

        $data = array(
            'npm'           => $npm,    
            'nama_lengkap'  => $nama_lengkap,
            'jurusan'       => $jurusan,
            'alamat'        => $alamat    
        );

        //insert data via model
        $this->m_mahasiswa->simpan_mahasiswa($data);

        //redirect ke controller siswa
        redirect('mahasiswa');

    }
    public function edit($id)
    {
        //load model 
        $this->load->model('m_mahasiswa');

        //get ID dari URL segment ke 3
        $id_mahasiswa = $this->uri->segment(3);

        $data = array(
            'data_mahasiswa' => $this->m_mahasiswa->edit_mahasiswa($id)
        );

        //load view
        $this->load->view('edit_mahasiswa', $data);
    }
    public function update()
    {
        //load model
        $this->load->model('m_mahasiswa');

        //get data dari form
        $id['id'] = $this->input->post("id");
        $npm             = $this->input->post('npm');
        $nama_lengkap    = $this->input->post('nama_lengkap');
        $jurusan         = $this->input->post('jurusan');
        $alamat          = $this->input->post('alamat');

        $data = array(
            'npm'           => $npm,    
            'nama_lengkap'  => $nama_lengkap,
            'jurusan'       => $jurusan,
            'alamat'        => $alamat       
        );

        //update via model    
        $this->m_mahasiswa->update_mahasiswa($data, $id);

        //redirect ke controller siswa
        redirect('mahasiswa');
    }
    public function hapus($id)
    {
    //load model
    $this->load->model('m_mahasiswa');

    //get ID dari URL segment ke 3
    $id['id'] = $this->uri->segment(3);

    //delete via model
    $this->m_mahasiswa->hapus_mahasiswa($id);

    //redirect ke controller siswa
    redirect('mahasiswa');

    }


}