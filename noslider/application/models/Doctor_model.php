<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model {
    
    private $table = 'tm_doctor'; // Nama tabel di database
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
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
    
    // Fungsi untuk menambah dokter
    public function insert_doctor($data) {
        return $this->db->insert($this->table, $data);
    }
    
    // Fungsi untuk memperbarui dokter
    public function update_doctor($doctor_id, $data) {
        $this->db->where('doctor_id', $doctor_id);
        return $this->db->update($this->table, $data);
    }
    
    // Fungsi untuk menghapus dokter
    public function delete_doctor($doctor_id) {
        $this->db->where('doctor_id', $doctor_id);
        return $this->db->delete($this->table);
    }
}