<?php

defined('BASEPATH') or exit('No direct script access allowed');

class surat extends CI_Controller
{

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        // digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('surat_model');

        if ($this->session->userdata('level') != "admin") {


            redirect('login', 'refresh');
        }
    }


    public function index()
    {
        $data['title'] = 'List Peminjam';
        $data['surat'] = $this->surat_model->getAllsurat();
        if ($this->input->post('keyword')) {
            $data['surat'] = $this->surat_model->cariDataSurat();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Buat Surat';
        $data['nama'] = ['Surat Peminjaman', 'Surat Pemberitahuan', 'Surat Undangan'];
        $this->form_validation->set_rules('nomer_surat', 'nomer_surat', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('hal', 'hal', 'required');
        $this->form_validation->set_rules('lampiran', 'lampiran', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');
        $this->form_validation->set_rules('tp', 'tp', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('surat/tambah', $data);
            $this->load->view('templates/footer');
        } else {

            $this->surat_model->tambahdatasrt();
            //untuk flashdata mempunyai 2 parameter
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('surat', 'refresh');
        }
    }
    public function hapus($id)
    {
        $this->surat_model->hapusdatasrt($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('surat', 'refresh');
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Surat';
        $data['surat'] = $this->surat_model->getsuratByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/detail', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Surat';
        $data['surat'] = $this->surat_model->getsuratByID($id);
        $data['nama'] = ['Surat Peminjaman', 'Surat Pemberitahuan', 'Surat Undangan'];

        $this->form_validation->set_rules('nomer_surat', 'nomer_surat', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('hal', 'hal', 'required');
        $this->form_validation->set_rules('lampiran', 'lampiran', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');
        $this->form_validation->set_rules('tp', 'tp', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('surat/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $this->surat_model->ubahdatasrt();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('surat', 'refresh');
        }
    }
}
