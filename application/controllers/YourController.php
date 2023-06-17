<?php
defined('BASEPATH') or exit('No direct script access allowed');

class YourController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('YourModel');
    }

    public function index($offset = 0)
    {
        $config['base_url'] = base_url('index.php/yourcontroller/index');
        $config['total_rows'] = $this->YourModel->get_total_rows();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['results'] = $this->YourModel->get_paginated_data($config['per_page'], $offset);
        $data['pagination_links'] = $this->pagination->create_links();

        $this->load->view('your_view', $data);
    }
}
