<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses_entropy extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Entropy_model');
    }

    public function index()
    {
        $data['_view'] = 'entropy/index';
        $this->load->view('layouts/main', $data);
    }

    public function proses()
    {
        $where = $this->input->post('parameter');
        $data_criteria = $this->Entropy_model->get_criteria($where);
        $data_sum = $this->Entropy_model->sumdata($where);
        if ($data_sum->num_rows() > 0) {

            $total = $data_sum->row();
            $criteria1 = $total->c1;
            $criteria2 = $total->c2;
            $criteria3 = $total->c3;
            $criteria4 = $total->c4;
        }

        $cr1 = 0;
        $cr2 = 0;
        $cr3 = 0;
        $cr4 = 0;
        $totalAlternatif = count($data_criteria);
        $N = (-1 / log($totalAlternatif));

        $hasil = array();
        foreach ($data_criteria as $row) {
            $hasil[] = array(
                $cr1 += $row->kriteria_1 / $criteria1 * log($row->kriteria_1 / $criteria1),
                $cr2 += $row->kriteria_2 / $criteria2 * log($row->kriteria_2 / $criteria2),
                $cr3 += $row->kriteria_3 / $criteria3 * log($row->kriteria_3 / $criteria3),
                $cr4 += $row->kriteria_4 / $criteria4 * log($row->kriteria_4 / $criteria4),
            );
        }
        $nilaitotal_ej = ((1 - ($N * $cr1)) + (1 - ($N * $cr2)) + (1 - ($N * $cr3)) + (1 - ($N * $cr4)));

        $w_c1 = ((1 - ($N * $cr1)) / $nilaitotal_ej);
        $w_c2 = ((1 - ($N * $cr2)) / $nilaitotal_ej);
        $w_c3 = ((1 - ($N * $cr3)) / $nilaitotal_ej);
        $w_c4 = ((1 - ($N * $cr4)) / $nilaitotal_ej);
        $total = (($w_c1) + ($w_c2) + ($w_c3) + ($w_c4));
        // print_r($total);
        $data = array(
            'c1' => $w_c1,
            'c2' => $w_c2,
            'c3' => $w_c3,
            'c4' => $w_c4,
            'total' => $total,
            'tipe' => $this->input->post('parameter'),
            'id_user' => $this->session->userdata('user_id'),
            '_view' => 'entropy/hasil'
        );
        $this->load->view('layouts/main', $data);
    }

    public function proses_user()
    {
        $where = $this->session->userdata('user_id');
        $data_criteria = $this->Entropy_model->get_criteria($where);
        $data_sum = $this->Entropy_model->sumdata($where);
        if ($data_sum->num_rows() > 0) {

            $total = $data_sum->row();
            $criteria1 = $total->c1;
            $criteria2 = $total->c2;
            $criteria3 = $total->c3;
            $criteria4 = $total->c4;
        }

        $cr1 = 0;
        $cr2 = 0;
        $cr3 = 0;
        $cr4 = 0;
        $totalAlternatif = count($data_criteria);
        $N = (-1 / log($totalAlternatif));

        $hasil = array();
        foreach ($data_criteria as $row) {
            $hasil[] = array(
                $cr1 += $row->kriteria_1 / $criteria1 * log($row->kriteria_1 / $criteria1),
                $cr2 += $row->kriteria_2 / $criteria2 * log($row->kriteria_2 / $criteria2),
                $cr3 += $row->kriteria_3 / $criteria3 * log($row->kriteria_3 / $criteria3),
                $cr4 += $row->kriteria_4 / $criteria4 * log($row->kriteria_4 / $criteria4),
            );
        }
        $nilaitotal_ej = ((1 - ($N * $cr1)) + (1 - ($N * $cr2)) + (1 - ($N * $cr3)) + (1 - ($N * $cr4)));

        $w_c1 = ((1 - ($N * $cr1)) / $nilaitotal_ej);
        $w_c2 = ((1 - ($N * $cr2)) / $nilaitotal_ej);
        $w_c3 = ((1 - ($N * $cr3)) / $nilaitotal_ej);
        $w_c4 = ((1 - ($N * $cr4)) / $nilaitotal_ej);
        $total = (($w_c1) + ($w_c2) + ($w_c3) + ($w_c4));
        // print_r($total);
        $data = array(
            'c1' => $w_c1,
            'c2' => $w_c2,
            'c3' => $w_c3,
            'c4' => $w_c4,
            'total' => $total,
            'tipe' => $this->input->post('parameter'),
            'id_user' => $this->session->userdata('user_id'),
            '_view' => 'entropy/hasil'
        );
        $this->load->view('layouts/main', $data);
    }
}
