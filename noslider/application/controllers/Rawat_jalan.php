<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat_jalan extends CI_Controller {
    
    public function index() { 
		$this->load->view('Desktop/header');
		$this->load->view('Desktop/rawat_jalan');
		$this->load->view('Desktop/footer');
    }
}
