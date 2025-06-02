<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dekstop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('News_model'); // Pastikan model dimuat
        $this->load->helper(['form', 'url', 'text']);
    }

    public function index() {
        $this->load->view('Desktop/header');
        
        // Ambil data news dari model
        $data['news'] = $this->News_model->get_all_news();

        // Cek apakah datanya masuk
    echo "<pre>";
    print_r($data['news']);
    echo "</pre>";
    die; // Hentikan eksekusi agar tidak lanjut ke view
    }
}