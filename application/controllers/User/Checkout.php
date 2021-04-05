<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Jstore | Checkout";
        $data['about'] = "";
        $data['contact'] = "";
        $data['home'] = "";
        $qty = $this->input->post('qty');

        $id_barang = $this->input->post('id_barang');
        $where = [
            'id_barang' => $id_barang,
        ];
        $data['qty'] = $qty;
        $data['barang'] = $this->model->get_where('t_barang', $where)->row_array();


        $this->load->view('ViewUser/Templates/Header', $data);
        $this->load->view('ViewUser/Main/Checkout');
        $this->load->view('ViewUser/Templates/Footer');
    }
    public function insert()
    {
        $telp = htmlspecialchars($this->input->post('telpC'));
        $alamat = htmlspecialchars($this->input->post('alamatC'));
        $kecamatan = htmlspecialchars($this->input->post('kecamatanC'));
        $kota     = htmlspecialchars($this->input->post('kotaC'));
        $provinsi = htmlspecialchars($this->input->post('provinsiC'));
        $cok = $alamat . ", " . $kecamatan . ", " . $kota . ", " . $provinsi;

        // kadang ada penulisan no hp 0811 239 345
        $telp = str_replace(" ", "", $telp);
        // kadang ada penulisan no hp (0274) 778787
        $telp = str_replace("(", "", $telp);
        // kadang ada penulisan no hp (0274) 778787
        $telp = str_replace(")", "", $telp);
        // kadang ada penulisan no hp 0811.239.345
        $telp = str_replace(".", "", $telp);

        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($telp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($telp), 0, 3) == '+62') {
                $telp = trim($telp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($telp), 0, 1) == '0') {
                $telp = '62' . substr(trim($telp), 1);
            }
        }
        $data = [
            'id_barang' => $this->input->post('id_barangC'),
            'qty' => $this->input->post('qtyC'),
            'nama' => htmlspecialchars($this->input->post('namaC')),
            'telp' => $telp,
            'alamat' => $cok,
            'tanggal' => date('Y-m-d')
        ];

        $this->db->insert('t_transaksi', $data);
    }
}
