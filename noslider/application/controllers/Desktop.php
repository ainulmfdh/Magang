<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desktop extends CI_Controller {

	public function index()
	{
		// $this->load->view('header');
		// $this->load->view('service');
		$this->load->view('dokter_bermobile');
		$this->load->view('jammapsmobile');
		$this->load->view('footer');
	}
}
