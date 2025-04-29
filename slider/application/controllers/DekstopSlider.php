<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DekstopSlider extends CI_Controller {

    function index() {
        $this->load->view('dekstop/dekstop_slider');
    }
}

?>