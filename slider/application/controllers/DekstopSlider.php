<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DekstopSlider extends CI_Controller {

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
}

?>