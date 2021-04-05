<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('nama_lengkap') != null) {
            $data['title'] = 'Jstore | Transaksi';
            $this->load->view('ViewAdmin/Templates/Header', $data);
            $this->load->view('ViewAdmin/Templates/Menu');
            $this->load->view('ViewAdmin/Main/Transaksi');
            $this->load->view('ViewAdmin/Templates/Footer');
        } else {
            redirect('Notfound');
        }
    }

    public function inserts()
    {
        $data = [
            'id_transaksi' => htmlspecialchars($this->input->post('id_transaksiP'))
        ];

        $this->db->insert('t_pesanan', $data);
    }

    public function showData()
    {
        echo $this->data();
    }
    public function data()
    {
        $join = [
            't_barang' => 't_transaksi.id_barang=t_barang.id_barang'
        ];
        $data['query'] = $this->model->joins('t_transaksi', $join, '')->result_array();

        $this->load->view('ViewAdmin/Main/DataTransaksi', $data);
    }

    public function update()
    {
        $id_role    = htmlspecialchars($this->input->post('id_role'));
        $role       = htmlspecialchars($this->input->post('role'));

        $where = ['id_role' => $id_role];

        $data = [
            'nama_role'     => $role
        ];
        $this->model->put('t_role', $data, $where);
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->model->delete('t_transaksi', ['id_transaksi' => $id]);
    }
}
