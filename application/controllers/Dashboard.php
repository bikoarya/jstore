<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('nama_lengkap') != null) {
            $data['title'] = 'Jstore | Dashboard';
            $this->load->view('ViewAdmin/Templates/Header', $data);
            $this->load->view('ViewAdmin/Templates/Menu');
            $this->load->view('ViewAdmin/Main/Dashboard');
            $this->load->view('ViewAdmin/Templates/Footer');
        } else {
            redirect('Notfound');
        }
    }
}
