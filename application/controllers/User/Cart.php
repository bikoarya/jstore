<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function index()
    {
        $data['title']="Jstore | Cart";
        $data['cart']="active";
        $data['contact']="";
        $data['home']="";
        $this->load->view('ViewUser/Templates/Header',$data);
        $this->load->view('ViewUser/Main/Cart');
        $this->load->view('ViewUser/Templates/Footer');


        
    }
   
}
