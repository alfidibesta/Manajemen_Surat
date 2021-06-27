<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('surat_model');
        $this->load->model('cetak_model');


        if ($this->session->userdata('level') != "user") {


            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'List Surat';
        $data['surat'] = $this->surat_model->getAllsurat();
        if ($this->input->post('keyword')) {
            $data['surat'] = $this->surat_model->cariDataSurat();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Surat';
        $data['surat'] = $this->surat_model->getsuratByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_pdf()
    {
        $this->load->library('pdf');

        $data['surat'] = $this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('surat/laporan', $data);
    }
}
