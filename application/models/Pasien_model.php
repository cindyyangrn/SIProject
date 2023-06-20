<?php

class Pasien_model extends CI_model {
    public function getAllPasien(){
        $query = $this->db->get('anggota_bpjs');
       return $query->result_array();
    }

    public function tambahData(){
        $data = [
            "id_anggota" => $this->input->post('id_anggota', true),
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this -> input ->post('jenis_kelamin', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true)
            
        ];

        $this->db->insert('anggota_bpjs', $data);
    }

    public function hapusData($id){
        $this->db->where('id_anggota', $id);
        $this->db->delete('anggota_bpjs');
    }

    public function getPasienById($id) {
        return $this->db->get_where('anggota_bpjs', ['id_anggota' => $id])->row_array();

    }

    public function cariDataPasien(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('id_anggota', $keyword);

        return $this->db->get('anggota_bpjs')->result_array();
    }
    
    public function editData(){
        $data = [
            "id_anggota" => $this->input->post('id_anggota', true),
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this -> input ->post('jenis_kelamin', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true)
            
        ];

        $this->db->where('id_anggota', $this->input->post('id_anggota'));
        $this->db->update('anggota_bpjs', $data);
    }
}