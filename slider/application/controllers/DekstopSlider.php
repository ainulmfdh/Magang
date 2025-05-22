<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DekstopSlider extends CI_Controller {
    public function __construct() {
        parent::__construct();
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

        $this->load->view('dekstop/home_dekstop');
    }

    public function dokter_page() {
        $this->load->view('dekstop/dokter_page');
    }

    public function detail_dokter() {
        $this->load->view('dekstop/detail_dokter');
    }
}

?>