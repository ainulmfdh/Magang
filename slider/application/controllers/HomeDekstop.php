<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDekstop extends CI_Controller {
	public function __construct() {
        parent::__construct();
        // if (detect_device_and_redirect()) {
        //   redirect('home_mobile');
        // }
    }

	public function index()
	{
		$this->load->view('dekstop/popup');
        $this->load->view('dekstop/header');
        $this->load->view('dekstop/slider');
        $this->load->view('dekstop/bpjs');
		$this->load->view('dekstop/layanan');
		$this->load->view('dekstop/about');
		$this->load->view('dekstop/background');
		$this->load->view('dekstop/dokter_berita');
        $this->load->view('dekstop/footer');
	}
  
  public function test() {
		$this->load->view('dekstop/test');
	}
}
