<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['title']="Jstore | About Us";
        $data['about']="active";
        $data['contact']="";
        $data['home']="";
        $this->load->view('ViewUser/Templates/Header',$data);
        $this->load->view('ViewUser/Main/About');
        $this->load->view('ViewUser/Templates/Footer');


        
    }
   
}
