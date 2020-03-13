<?php
class Tbl_bobot extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_bobot_model');
    }
    function index()
    {
        $data['tbl_bobot'] = $this->Tbl_bobot_model->get_all_tbl_bobot();

        $data['_view'] = 'tbl_bobot/index';
        $this->load->view('layouts/main', $data);
    }
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('bobot_keriteria1', 'Bobot Keriteria1', 'required');
        $this->form_validation->set_rules('bobot_keriteria2', 'Bobot Keriteria2', 'required');
        $this->form_validation->set_rules('bobot_keriteria3', 'Bobot Keriteria3', 'required');
        $this->form_validation->set_rules('bobot_keriteria4', 'Bobot Keriteria4', 'required');
        $this->form_validation->set_rules('id_user', 'Id User', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'bobot_keriteria1' => $this->input->post('bobot_keriteria1'),
                'bobot_keriteria2' => $this->input->post('bobot_keriteria2'),
                'bobot_keriteria3' => $this->input->post('bobot_keriteria3'),
                'bobot_keriteria4' => $this->input->post('bobot_keriteria4'),
                'id_user' => $this->input->post('id_user'),
            );

            $tbl_bobot_id = $this->Tbl_bobot_model->add_tbl_bobot($params);
            redirect('tbl_bobot/index');
        } else {
            $data['_view'] = 'tbl_bobot/add';
            $this->load->view('layouts/main', $data);
        }
    }

    function edit($id_bobot)
    {
        // check if the tbl_bobot exists before trying to edit it
        $data['tbl_bobot'] = $this->Tbl_bobot_model->get_tbl_bobot($id_bobot);

        if (isset($data['tbl_bobot']['id_bobot'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('bobot_keriteria1', 'Bobot Keriteria1', 'required');
            $this->form_validation->set_rules('bobot_keriteria2', 'Bobot Keriteria2', 'required');
            $this->form_validation->set_rules('bobot_keriteria3', 'Bobot Keriteria3', 'required');
            $this->form_validation->set_rules('bobot_keriteria4', 'Bobot Keriteria4', 'required');
            $this->form_validation->set_rules('id_user', 'Id User', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'bobot_keriteria1' => $this->input->post('bobot_keriteria1'),
                    'bobot_keriteria2' => $this->input->post('bobot_keriteria2'),
                    'bobot_keriteria3' => $this->input->post('bobot_keriteria3'),
                    'bobot_keriteria4' => $this->input->post('bobot_keriteria4'),
                    'id_user' => $this->input->post('id_user'),
                );

                $this->Tbl_bobot_model->update_tbl_bobot($id_bobot, $params);
                redirect('tbl_bobot/index');
            } else {
                $data['_view'] = 'tbl_bobot/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The tbl_bobot you are trying to edit does not exist.');
    }
    function remove($id_bobot)
    {
        $tbl_bobot = $this->Tbl_bobot_model->get_tbl_bobot($id_bobot);

        // check if the tbl_bobot exists before trying to delete it
        if (isset($tbl_bobot['id_bobot'])) {
            $this->Tbl_bobot_model->delete_tbl_bobot($id_bobot);
            redirect('tbl_bobot/index');
        } else
            show_error('The tbl_bobot you are trying to delete does not exist.');
    }
}
