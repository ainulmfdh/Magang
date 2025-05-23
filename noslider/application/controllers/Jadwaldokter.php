<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwaldokter extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Doctor_model');
        $this->load->helper('url');
    }
    
    // Menampilkan daftar dokter
   public function index() {
    $data['doctors'] = $this->Doctor_model->get_all_doctors(); // Ambil semua dokter dari database
        $this->load->view('Desktop/header');
        $this->load->view('Desktop/jadwal_dokter', $data); // Kirim data ke view
        $this->load->view('Desktop/jammaps');
        $this->load->view('Desktop/footer');
    }
    
    // Menampilkan detail dokter
    public function view($doctor_id) {
         $this->load->view('Desktop/header');
        $data['doctor'] = $this->Doctor_model->get_doctor_by_id($doctor_id);
        if ($data['doctor']) {
            $this->load->view('Desktop/doctor_detail', $data);
        } else {
            show_404();
        }
        $this->load->view('Desktop/jammaps');
    	$this->load->view('Desktop/footer');
    }
}