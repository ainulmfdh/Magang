<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desktop extends CI_Controller {

	public function index()
	{
		// $this->load->view('header');
		// $this->load->view('service');
		// $this->load->view('dokter_berita');
		// $this->load->view('jammaps');
		// $this->load->view('footer');
		$this->load->view('headermobile');
		$this->load->view('servicemobile');
		$this->load->view('dokter_bermobile');
		$this->load->view('jammapsmobile');
	}
}
