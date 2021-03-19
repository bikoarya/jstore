<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $data['title']="Jstore | Checkout";
        $data['about']="";
        $data['contact']="";
        $data['home']="";
        $qty= $this->input->post('qty');
       
        $id_barang = $this->input->post('id_barang');
        $where = [
          'id_barang' => $id_barang,  
        ];
        $data['qty']=$qty;
        $data['barang'] = $this->model->get_where('t_barang',$where)->row_array();
        

        $this->load->view('ViewUser/Templates/Header',$data);
        $this->load->view('ViewUser/Main/Checkout');
        $this->load->view('ViewUser/Templates/Footer');


        
    }
    public function insert()
    {
        $nama     = htmlspecialchars($this->input->post('nama'));
        $telp     = htmlspecialchars($this->input->post('telp'));
        $alamat   = htmlspecialchars($this->input->post('alamat'));
        $kecamatan= htmlspecialchars($this->input->post('kecamatan'));
        $kota     = htmlspecialchars($this->input->post('kota'));
        $provinsi = htmlspecialchars($this->input->post('provinsi'));
        $qty      =  $this->input->post('qty');
        $id_barang=  $this->input->post('id_barang');
        $alamat_db= $alamat .", ".$kecamatan.", ".$kota.", ".$provinsi;
        $tanggal  = date('Y-m-d');
        

        $data = [
            'id_barang' => $id_barang,
            'qty' => $qty,
            'nama' => $nama,
            'telp' => $telp,
            'alamat' => $alamat_db,
            'tanggal' => $tanggal,
        ];
        $this->db->insert('t_transaksi', $data);
        redirect('User/Home');
    }

  
    
}
