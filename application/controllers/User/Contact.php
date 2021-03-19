<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title']="Jstore | Contact";
        $data['about']="";
        $data['contact']="active";
        $data['home']="";
        $this->load->view('ViewUser/Templates/Header',$data);
        $this->load->view('ViewUser/Main/Contact');
        $this->load->view('ViewUser/Templates/Footer');


        
    }
   
}
