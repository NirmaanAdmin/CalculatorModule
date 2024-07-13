<?php

header('Content-Type: text/html; charset=utf-8');
defined('BASEPATH') or exit('No direct script access allowed');

class Estimate_calculator extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        if (!staff_can('view', 'estimate_calculator')
            && !staff_can('view_own', 'estimate_calculator')
        ) {
            access_denied('Estimate Calculator');
        }
    }

    public function index()
    {
        close_setup_menu();
        if (!staff_can('view', 'estimate_calculator')
            && !staff_can('view_own', 'estimate_calculator')) {
            access_denied('Estimate Calculator');
        }

        $data['staff'] = $this->staff_model->get('', ['active' => 1]);
        $data['title'] = _l('estimate_calculator');

        $this->load->view('admin/estimate_calculator/unit_conversion', $data);
    }
    public function unit_conversion_value(){
        if ($this->input->post()) {
            $type = $this->input->post('estimate_conversion_type');
            $unit = $this->input->post('estimate_conversion_unit');
            $volume = $this->input->post('estimate_conversion_volume');

            echo $type.'--'.$unit.'--'.$volume;exit;
        }
    }
}
