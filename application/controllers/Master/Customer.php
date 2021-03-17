<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Jstore | Customer';
        $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('ViewAdmin/Templates/Menu');
        $this->load->view('ViewAdmin/Main/Customer');
        $this->load->view('ViewAdmin/Templates/Footer');
    }
}
