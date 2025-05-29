<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desktop extends CI_Controller {

	public function index()
	{
		$this->load->view('Desktop/header');
		$this->load->view('Desktop/hero');
		$this->load->view('Desktop/service');
		$this->load->view('Desktop/popup');
		$this->load->view('Desktop/dokter_berita');
		$this->load->view('Desktop/jammaps');
    	$this->load->view('Desktop/footer');
	}

	public function Doctor()
	{
		$this->load->view('Desktop/header');
		$this->load->view('Desktop/dokter_page');
		$this->load->view('Desktop/jammaps');
    	$this->load->view('Desktop/footer');
	}

	public function Detail_doctor()
	{
		$this->load->view('Desktop/detail_doctor');
	}

	public function jadwal_dokter()
	{
		$this->load->view('Desktop/header');
		$this->load->view('Desktop/jadwal_dokter');
		$this->load->view('Desktop/jammaps');
		$this->load->view('Desktop/footer');
	}

	 public function detail_dokter($doctor_id) 
	{
         $this->load->view('Desktop/header');
        $data['doctor'] = $this->Doctor_model->get_doctor_by_id($doctor_id);
        if ($data['doctor']) {
            $this->load->view('Desktop/doctor_detail', $data);
        } else {
            show_404();
        }
        $this->load->view('Desktop/jammaps');
    	$this->load->view('Desktop/footer');
    }
}
