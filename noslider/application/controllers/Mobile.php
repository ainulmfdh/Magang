<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

	public function index()
	{
        $this->load->view('Mobile/header');
        $this->load->view('Mobile/hero');
        $this->load->view('Mobile/servicemobile');
		$this->load->view('Mobile/dokter_bermobile');
        $this->load->view('Mobile/jammapsmobile');
        // $this->load->view('Mobile/navbar');

	}
<<<<<<< HEAD

	public function jadwaldokter()
	{
		$this->load->view('Mobile/header');
		$this->load->view('Mobile/jadwaldokter');
		$this->load->view('Mobile/jammapsmobile');
	}
=======
    
>>>>>>> 2d81647a2b69a79a2256169e3c41ed42f399b256
}
