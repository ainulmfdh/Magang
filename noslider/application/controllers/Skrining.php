<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skrining extends CI_Controller {
    
    public function index() { 
		$this->load->view('Desktop/header');
		$this->load->view('Desktop/skrining');
		$this->load->view('Desktop/footer');
    }
}
