<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

    private $table = 'tm_doctor'; // Nama tabel di database

    // Fungsi untuk mendapatkan semua data dokter
    public function get_all_doctors() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Fungsi untuk mendapatkan data dokter berdasarkan ID
    public function get_doctor_by_id($doctor_id) {
        $this->db->where('doctor_id', $doctor_id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}