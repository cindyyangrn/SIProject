<?php

class RK_model extends CI_model {
    public function getAllMedis(){
        $query = $this->db->get('rekam_medis');
       return $query->result_array();
    }

    public function tambahData(){
        $data = [
            "id_rekam_medis" => $this->input->post('id_rekam_medis', true),
            "id_anggota" => $this->input->post('id_anggota', true),
            "tgl_rekam_medis" => $this -> input ->post('tgl_rekam_medis', true),
            "gejala" => $this->input->post('gejala', true),
            "tindakan" => $this->input->post('tindakan', true),
            "resep_obat" => $this->input->post('resep_obat', true)         
        ];

        $this->db->insert('rekam_medis', $data);
    }

    public function hapusData($id){
        $this->db->where('id_rekam_medis', $id);
        $this->db->delete('rekam_medis');
    }

    public function getMedisById($id) {
        return $this->db->get_where('rekam_medis', ['id_rekam_medis' => $id])->row_array();

    }

    public function cariDataMedis(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_rekam_medis', $keyword);
        $this->db->or_like('id_anggota', $keyword);

        return $this->db->get('rekam_medis')->result_array();
    }
    
    public function editData(){
        $data = [
            "id_rekam_medis" => $this->input->post('id_rekam_medis', true),
            "id_anggota" => $this->input->post('id_anggota', true),
            "tgl_rekam_medis" => $this -> input ->post('tgl_rekam_medis', true),
            "gejala" => $this->input->post('gejala', true),
            "tindakan" => $this->input->post('tindakan', true),
            "resep_obat" => $this->input->post('resep_obat', true)
        ];

        $this->db->where('id_rekam_medis', $this->input->post('id_rekam_medis'));
        $this->db->update('rekam_medis', $data);
    }
}