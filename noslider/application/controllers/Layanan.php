<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index()
	{
        $this->load->view('Mobile/Header');
        $this->load->view('Mobile/layanan');
		$this->load->view('Mobile/footer');

	}
}
