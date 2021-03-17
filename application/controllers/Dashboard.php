<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Jstore | Dashboard';
        $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('ViewAdmin/Templates/Menu');
        $this->load->view('ViewAdmin/Main/Dashboard');
        $this->load->view('ViewAdmin/Templates/Footer');
    }
}
