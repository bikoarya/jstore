<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->model->get('t_kategori');
        $data['title'] = 'Jstore | Barang';
        $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('ViewAdmin/Templates/Menu');
        $this->load->view('ViewAdmin/Main/Barang');
        $this->load->view('ViewAdmin/Templates/Footer');
    }
}
