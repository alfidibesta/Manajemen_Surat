<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function index($name = '')
    {
        //echo "Selamat Datang di Halaman Home";
        $data['title'] = 'home';
        // $data['name'] = $name;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
        $this->load->library('session');


        if ($this->session->userdata('level') != "admin") {


            redirect('login', 'refresh');
        }
    }
}

/* End of file home.php */
