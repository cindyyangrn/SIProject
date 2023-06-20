<?php

class Pasien extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
        
    }

    public function index() {
        $data['judul'] = 'Daftar Pasien';

        $this->load->model('Pasien_model');
        $data['pasien'] = $this->Pasien_model->getAllPasien();
        if($this->input->post('keyword')){
            $data['pasien'] = $this->Pasien_model->cariDataPasien();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');

    }

    public function tambah ()
    {
        $data['judul'] = 'Form Pendataan Pasien Baru';

        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->tambahData();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pasien');
        }

    }

    public function hapus($id) {
        $this->Pasien_model->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pasien');
    }

    public function detail($id) {
        $data['judul'] = 'Data Lengkap Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('pasien/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit ($id)
    {
        $data['judul'] = 'Form Pengeditan Nama Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);

        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien/edit', $id);
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->editData();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('pasien');
        }
    }
}