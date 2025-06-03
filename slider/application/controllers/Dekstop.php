<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dekstop extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dokter_model');
        // if (!detect_device_and_redirect()) {
		// 	redirect('homedekstop');
		// }
    }
    function index() {
        // $this->load->view('dekstop/header');
        // $this->load->view('dekstop/home_dekstop_slider');
        // $this->load->view('dekstop/bpjs');
        // $this->load->view('dekstop/layanan');
        // $this->load->view('dekstop/dokter_berita');
        // $this->load->view('dekstop/footer');
        // $this->load->view('dekstop/background');
        $data['data_dokter'] = $this->Dokter_model->get_all_doctors();
        $this->load->view('dekstop/home_dekstop', $data);
    }

    public function dokter_page() {
        $data['data_dokter'] = $this->Dokter_model->get_all_doctors();
        $this->load->view('dekstop/dokter_page', $data);
    }

    public function detail_dokter($doctor_id) {
        $data['data_dokter'] = $this->Dokter_model->get_doctor_by_id($doctor_id);
        if ($data['data_dokter']) {
            $this->load->view('dekstop/detail_dokter', $data);
        } else {
            show_404();
        }
        // $this->load->view('dekstop/detail_dokter');
    }
    public function news() {
        $this->load->view('dekstop/news');
    }
    public function layanan() {
        $this->load->view('dekstop/layanan_page');
    }
    public function detail_layanan() {
        $this->load->view('dekstop/detail_layanan');
    }
    public function jadwal_dokter() {
        $data['doctors'] = $this->Dokter_model->get_all_doctors(); 
        $this->load->view('dekstop/jadwal_dokter', $data);
    }
}

?>
