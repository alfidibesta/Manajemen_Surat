<?php

defined('BASEPATH') or exit('No direct script access allowed');

class about extends CI_Controller
{

    public function index($name = '')
    {
        //echo "Selamat Datang di Halaman Home";
        $data['title'] = 'about';
        // $data['name'] = $name;
        $this->load->view('template/header_about', $data);
        $this->load->view('about/index', $data);
        $this->load->view('template/footer');
        $this->load->library('session');
    }
}

/* End of file home.php */
