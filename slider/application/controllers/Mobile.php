<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {
	public function __construct() {
        parent::__construct();
		 $this->load->model('Dokter_model');
        // if (!detect_device_and_redirect()) {
		// 	redirect('homedekstop');
		// }
    }

	public function index()
	{
		// $this->load->view('mobile/popup');
        // $this->load->view('mobile/header');
        // $this->load->view('mobile/slider');
        // $this->load->view('mobile/bpjs');
		// $this->load->view('mobile/layanan');
		// $this->load->view('mobile/about');
		// $this->load->view('mobile/background');
		// $this->load->view('mobile/bd');
        // $this->load->view('mobile/footer');
		$data['data_dokter'] = $this->Dokter_model->get_all_doctors();
		$this->load->view('mobile/home_mobile', $data);
	}
	public function dokter_page() {
		$data['data_dokter'] = $this->Dokter_model->get_all_doctors();
		$this->load->view('mobile/dokter_page', $data);
	}

	 public function detail_dokter($doctor_id) {
        $data['data_dokter'] = $this->Dokter_model->get_doctor_by_id($doctor_id);
        if ($data['data_dokter']) {
            $this->load->view('mobile/dokter_detail', $data);
        } else {
            show_404();
        }
    }

	public function jadwal_dokter() {
		$data['doctors'] = $this->Dokter_model->get_all_doctors(); 
		$this->load->view('mobile/jadwal_dokter', $data);
	}

	public function layanan() {
        $this->load->view('mobile/layanan');
    }
    public function rawat_jalan() {
        $this->load->view('mobile/rawat_jalan');
    }	
}

	
