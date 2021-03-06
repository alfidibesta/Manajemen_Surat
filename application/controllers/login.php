<?php


defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
    }


    public function index()
    {
        $data['title'] = 'Login';

        $this->load->view('templates/auth_header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/auth_footer');
    }


    public function proses_login()
    {

        $username = $this->input->post('uname1');
        $password = md5($this->input->post('pwd1'));

        $ceklogin = $this->login_model->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row) {
                # code...
                $this->session->set_userdata('user', $row->username);
                $this->session->set_userdata('level', $row->level);

                if ($this->session->userdata('level') == "admin") {
                    # code...

                    redirect('surat/index');
                } elseif ($this->session->userdata('level') == "user") {
                    redirect('user');
                }
            }
        } else {
            $data['pesan'] = "username dan password anda salah";
            $data['title'] = 'Login';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/auth_header');
        }
    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}

/* End of file login.php */
