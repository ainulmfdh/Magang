<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

	public function index()
	{
        $this->load->view('headermobile');
        $this->load->view('servicemobile');
		$this->load->view('dokter_bermobile');
        $this->load->view('jammapsmobile');
        $this->load->view('navbar');
	}
}
