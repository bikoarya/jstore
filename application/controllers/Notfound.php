<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Jstore | Notfound';
        // $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('Notfound/Index', $data);
        $this->load->view('ViewAdmin/Templates/Footer');
    }
}
