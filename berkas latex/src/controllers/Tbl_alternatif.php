<?php
class Tbl_alternatif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_alternatif_model');
    }

    function index()
    {
        $data['tbl_alternatif'] = $this->Tbl_alternatif_model->get_all_tbl_alternatif_admin();
        $data['_view'] = 'tbl_alternatif/index';
        $this->load->view('layouts/main', $data);
    }

    function index_user()
    {
        $session = $this->session->userdata('user_id');
        $data['tbl_alternatif'] = $this->Tbl_alternatif_model->get_all_tbl_alternatif($session);
        $data['_view'] = 'tbl_alternatif/index';
        $this->load->view('layouts/main', $data);
    }

    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('alternatif_nama', 'Alternatif Nama', 'required|max_length[30]');
        $this->form_validation->set_rules('kriteria_1', 'Kriteria 1', 'required|integer');
        $this->form_validation->set_rules('kriteria_2', 'Kriteria 2', 'required|integer');
        $this->form_validation->set_rules('kriteria_3', 'Kriteria 3', 'required|integer');
        $this->form_validation->set_rules('kriteria_4', 'Kriteria 4', 'required|integer');
        $this->form_validation->set_rules('id_user', 'Id User', 'required|integer');

        if ($this->form_validation->run()) {
            $params = array(
                'alternatif_nama' => $this->input->post('alternatif_nama'),
                'kriteria_1' => $this->input->post('kriteria_1'),
                'kriteria_2' => $this->input->post('kriteria_2'),
                'kriteria_3' => $this->input->post('kriteria_3'),
                'kriteria_4' => $this->input->post('kriteria_4'),
                'id_user' => $this->input->post('id_user'),
            );

            $tbl_alternatif_id = $this->Tbl_alternatif_model->add_tbl_alternatif($params);
            if ($this->session->userdata('user_level') === 'admin') {
                redirect('tbl_alternatif/index');
            } else {
                redirect('tbl_alternatif/index_user');
            }
        } else {
            $data['_view'] = 'tbl_alternatif/add';
            $this->load->view('layouts/main', $data);
        }
    }

    function edit($alternatif_id)
    {
        // check if the tbl_alternatif exists before trying to edit it
        $data['tbl_alternatif'] = $this->Tbl_alternatif_model->get_tbl_alternatif($alternatif_id);

        if (isset($data['tbl_alternatif']['alternatif_id'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('alternatif_nama', 'Alternatif Nama', 'required|max_length[30]');
            $this->form_validation->set_rules('kriteria_1', 'Kriteria 1', 'required|integer');
            $this->form_validation->set_rules('kriteria_2', 'Kriteria 2', 'required|integer');
            $this->form_validation->set_rules('kriteria_3', 'Kriteria 3', 'required|integer');
            $this->form_validation->set_rules('kriteria_4', 'Kriteria 4', 'required|integer');
            $this->form_validation->set_rules('id_user', 'Tipe Alternatif', 'required|max_length[10]');

            if ($this->form_validation->run()) {
                $params = array(
                    'alternatif_nama' => $this->input->post('alternatif_nama'),
                    'kriteria_1' => $this->input->post('kriteria_1'),
                    'kriteria_2' => $this->input->post('kriteria_2'),
                    'kriteria_3' => $this->input->post('kriteria_3'),
                    'kriteria_4' => $this->input->post('kriteria_4'),
                    'id_user' => $this->input->post('id_user'),
                );

                $this->Tbl_alternatif_model->update_tbl_alternatif($alternatif_id, $params);
                if ($this->session->userdata('user_level') === 'admin') {
                    redirect('tbl_alternatif/index');
                } else {
                    redirect('tbl_alternatif/index_user');
                }
                // redirect('tbl_alternatif/index');
            } else {
                $data['_view'] = 'tbl_alternatif/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The tbl_alternatif you are trying to edit does not exist.');
    }

    function detail($alternatif_id)
    {
        $data['tbl_alternatif'] = $this->Tbl_alternatif_model->get_tbl_alternatif($alternatif_id);
        $data['_view'] = 'tbl_alternatif/detail';
        $this->load->view('layouts/main', $data);
    }

    function remove($alternatif_id)
    {
        $tbl_alternatif = $this->Tbl_alternatif_model->get_tbl_alternatif($alternatif_id);

        // check if the tbl_alternatif exists before trying to delete it
        if (isset($tbl_alternatif['alternatif_id'])) {
            $this->Tbl_alternatif_model->delete_tbl_alternatif($alternatif_id);
            redirect('tbl_alternatif/index');
        } else
            show_error('The tbl_alternatif you are trying to delete does not exist.');
    }
}
