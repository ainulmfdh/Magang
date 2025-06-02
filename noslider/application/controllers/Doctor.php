<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Doctor_model');
        $this->load->helper('url');
    }
    
    // Menampilkan daftar dokter
    public function index() {
        $this->load->view('Desktop/header');
        $data['doctors'] = $this->Doctor_model->get_all_doctors();
        $this->load->view('Desktop/doctor_page', $data);
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

    // Menampilkan daftar dokter Mobile
    public function mobile() {
        $this->load->view('Mobile/Header');
        $data['doctors'] = $this->Doctor_model->get_all_doctors();
        $this->load->view('Mobile/doctor_page', $data);
        $this->load->view('Mobile/jammapsmobile');
    }

     // Menampilkan detail dokter Mobile
    public function mobile_detail($doctor_id) {
         $this->load->view('Mobile/header');
        $data['doctor'] = $this->Doctor_model->get_doctor_by_id($doctor_id);
        if ($data['doctor']) {
            $this->load->view('Mobile/doctor_detail', $data);
        } else {
            show_404();
        }
        $this->load->view('Mobile/jammapsmobile');
    }
}