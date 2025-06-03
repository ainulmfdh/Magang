<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->helper(['form', 'url', 'text']);
    }

    public function index() {
		$this->load->view('Desktop/header');
        $data['news'] = $this->News_model->get_all_news();

		// Mapping data
		foreach ($data['news'] as &$item) {
			$item->id = $item->news_id;
			$item->judul_berita = $item->news_id_title;
			$item->deskripsi = $item->news_id_contents;
			$item->gambar = $item->news_cover;
			$item->tanggal = $item->updated_at;
		}
        $this->load->view('Desktop/news_baru', $data);
    	$this->load->view('Desktop/footer');
    }

	public function view($id)
    {
    $this->load->model('News_model');
    
    $data['news'] = $this->News_model->get_news_by_id($id);
    if (!$data['news']) {
        show_404();
    }

    // Mapping data utama
    $item = $data['news'];
    $item->id = $item->news_id;
    $item->judul_berita = $item->news_id_title;
    $item->deskripsi = $item->news_id_contents;
    $item->gambar = $item->news_cover;
    $item->tanggal = $item->updated_at;

    // Ambil berita lain kecuali yang sedang dibaca
    $data['related_news'] = $this->News_model->get_related_news($id);

    $this->load->view('Desktop/header');
    $this->load->view('Desktop/news_detail', $data);
    $this->load->view('Desktop/footer');
}
	

    public function create() {
        if ($this->input->post()) {
            $data = [
                'news_id_title'   => $this->input->post('title'),
                'news_id_content' => $this->input->post('content'),
                'news_cover'      => $this->input->post('cover')
            ];
            $this->News_model->insert_news($data);
            redirect('news');
        } else {
            $this->load->view('news/create');
        }
    }

    public function edit($id) {
        $data['news'] = $this->News_model->get_news_by_id($id);
        if ($this->input->post()) {
            $updateData = [
                'news_id_title'   => $this->input->post('title'),
                'news_id_content' => $this->input->post('content'),
                'news_cover'      => $this->input->post('cover')
            ];
            $this->News_model->update_news($id, $updateData);
            redirect('news');
        } else {
            $this->load->view('news/edit', $data);
        }
    }

    public function delete($id) {
        $this->News_model->delete_news($id);
        redirect('news');
    }
    

    // NEWS MOBILE
     public function mobile() {
		$this->load->view('Mobile/header');
        $data['news'] = $this->News_model->get_all_news();

		// Mapping data
		foreach ($data['news'] as &$item) {
			$item->id = $item->news_id;
			$item->judul_berita = $item->news_id_title;
			$item->deskripsi = $item->news_id_contents;
			$item->gambar = $item->news_cover;
			$item->tanggal = $item->updated_at;
		}
        $this->load->view('Mobile/news_baru', $data);
		$this->load->view('Mobile/footer');
    }

    // NEWS MOBILE DETAIL
    public function mobile_detail($id)
    {
    $this->load->model('News_model');
    
    $data['news'] = $this->News_model->get_news_by_id($id);
    if (!$data['news']) {
        show_404();
    }

    // Mapping data utama
    $item = $data['news'];
    $item->id = $item->news_id;
    $item->judul_berita = $item->news_id_title;
    $item->deskripsi = $item->news_id_contents;
    $item->gambar = $item->news_cover;
    $item->tanggal = $item->updated_at;

    // Ambil berita lain kecuali yang sedang dibaca
    $data['related_news'] = $this->News_model->get_related_news($id);

    $this->load->view('Mobile/header');
    $this->load->view('Mobile/news_detail', $data);
    $this->load->view('Mobile/jammapsmobile');
    }
}
