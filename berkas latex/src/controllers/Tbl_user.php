<?php
class Tbl_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_user_model');
        $this->load->library('enkripsi');
    }

    function index()
    {
        $data['tbl_user'] = $this->Tbl_user_model->get_all_tbl_user();

        $data['_view'] = 'tbl_user/index';
        $this->load->view('layouts/main', $data);
    }

    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('user_password', 'User Password', 'required|max_length[60]');
        $this->form_validation->set_rules('user_name', 'User Name', 'required|max_length[30]');
        $this->form_validation->set_rules('user_email', 'User Email', 'required|max_length[60]|valid_email');
        $this->form_validation->set_rules('user_level', 'User Level', 'required|max_length[5]');
        $this->form_validation->set_rules('status', 'Status', 'required|integer');

        if ($this->form_validation->run()) {
            $params = array(
                'user_password' => $this->enkripsi->encryptIt($this->input->post('user_password')),
                'user_name' => $this->input->post('user_name'),
                'user_email' => $this->input->post('user_email'),
                'user_level' => $this->input->post('user_level'),
                'status' => $this->input->post('status'),
            );

            $tbl_user_id = $this->Tbl_user_model->add_tbl_user($params);
            redirect('tbl_user/index');
        } else {
            $data['_view'] = 'tbl_user/add';
            $this->load->view('layouts/main', $data);
        }
    }

    function edit($user_id)
    {
        $data['tbl_user'] = $this->Tbl_user_model->get_tbl_user($user_id);

        if (isset($data['tbl_user']['user_id'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('user_password', 'User Password', 'required|max_length[60]');
            $this->form_validation->set_rules('user_name', 'User Name', 'required|max_length[30]');
            $this->form_validation->set_rules('user_email', 'User Email', 'required|max_length[60]|valid_email');
            $this->form_validation->set_rules('user_level', 'User Level', 'required|max_length[5]');
            $this->form_validation->set_rules('status', 'Status', 'required|integer');

            if ($this->form_validation->run()) {
                $params = array(
                    'user_password' => $this->enkripsi->encryptIt($this->input->post('user_password')),
                    'user_name' => $this->input->post('user_name'),
                    'user_email' => $this->input->post('user_email'),
                    'user_level' => $this->input->post('user_level'),
                    'status' => $this->input->post('status'),
                );

                $this->Tbl_user_model->update_tbl_user($user_id, $params);
                redirect('tbl_user/index');
            } else {
                $data['_view'] = 'tbl_user/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The tbl_user you are trying to edit does not exist.');
    }

    function detail($user_id)
    {
        $data['tbl_user'] = $this->Tbl_user_model->get_tbl_user($user_id);
        $data['_view'] = 'tbl_user/detail';
        $this->load->view('layouts/main', $data);
    }

    function remove($user_id)
    {
        $tbl_user = $this->Tbl_user_model->get_tbl_user($user_id);

        if (isset($tbl_user['user_id'])) {
            $this->Tbl_user_model->delete_tbl_user($user_id);
            redirect('tbl_user/index');
        } else
            show_error('The tbl_user you are trying to delete does not exist.');
    }
}
