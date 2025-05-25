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

		$this->load->view('mobile/home_mobile');
	}
	public function dokter_page() {
		 $data['data_dokter'] = $this->Dokter_model->get_all_doctors();
		$this->load->view('mobile/dokter_page', $data);
	}
}
