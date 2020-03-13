<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('enkripsi');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login');
        } else {
            $username    = $this->input->post('username', TRUE);
            $password = $this->enkripsi->encryptIt($this->input->post('password', TRUE));
            $validasi = $this->login_model->validate($username, $password);
            if ($validasi->num_rows() > 0) {
                $data  = $validasi->row();
                $id    = $data->user_id;
                $level = $data->user_level;
                $user_name = $data->user_name;
                $sesiondata = array(
                    'user_id'  => $id,
                    'user_level'     => $level,
                    'user_name' => $user_name,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sesiondata);

                if ($level === 'admin') {
                    redirect('dashboard');
                } elseif ($level === 'user') {
                    redirect('dashboard');
                }
            } else {
                echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
                redirect('');
            }
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
