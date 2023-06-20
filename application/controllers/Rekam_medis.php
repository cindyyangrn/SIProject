<?php

class Rekam_medis extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('RK_model');
        
    }

    public function index() {
        $data['judul'] = 'Daftar Rekam Medis Pasien';

        $this->load->model('RK_model');
        $data['rekam_medis'] = $this->RK_model->getAllMedis();

        $this->load->view('templates/header', $data);
        $this->load->view('rekam_medis/index', $data);
        $this->load->view('templates/footer');

    }

    public function tambah ()
    {
        $data['judul'] = 'Form Pendataan Rekam Medis Baru';

        $this->form_validation->set_rules('id_rekam_medis', 'ID Rekam Medis', 'numeric');
        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('rekam_medis/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->RK_model->tambahData();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('rekam_medis');
        }

    }

    public function hapus($id) {
        $this->RK_model->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('rekam_medis');
    }

    public function detail($id) {
        $data['judul'] = 'Data Lengkap';
        $data['rekam_medis'] = $this->RK_model->getMedisById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('rekam_medis/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit ($id)
    {
        $data['judul'] = 'Form Pengeditan Rekam Medis Pasien';
        $data['rekam_medis'] = $this->RK_model->getMedisById($id);

        $this->form_validation->set_rules('id_rekam_medis', 'ID Rekam Medis', 'numeric');
        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('rekam_medis/edit', $id);
            $this->load->view('templates/footer');
        } else {
            $this->RK_model->editData();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('rekam_medis');
        }
    }
}
