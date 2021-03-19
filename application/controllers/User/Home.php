<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model->get('t_barang');
        $data['title'] = 'Jstore | Home';
        $data['kategori'] = $this->model->get('t_kategori');
        $data['cart']='';
        $data['contact']='';
        $data['home']='active';
        $this->load->view('ViewUser/Templates/Header', $data);
        $this->load->view('ViewUser/Main/Index');
        $this->load->view('ViewUser/Templates/Footer');


        
    }
   
}
