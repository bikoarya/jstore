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

    public function insert()
    {
        $price      = htmlspecialchars($this->input->post('txtHarga'));
        $fprice     = str_replace("Rp. ", "", $price);
        $harga      = str_replace(".", "", $fprice);
        $gambar     = ($_FILES['gambar']['name']);

        if ($gambar == '') {
            echo "<script type='text/javascript'>alert('kosong cok');</script>";
        } else {
            $config['upload_path']          = './assets/images/results';
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo "<script type='text/javascript'>alert('gagal');</script>";
            } else {
                $gambar = $this->upload->data('file_name');
                // echo $this->showData();
            }
        }

        $data = [
            'nama_barang' => htmlspecialchars($this->input->post('txtNamaBarang')),
            'deskripsi' => htmlspecialchars($this->input->post('txtDeskripsi')),
            'id_kategori' => htmlspecialchars($this->input->post('txtKategori')),
            'harga' => $harga,
            'gambar' => $gambar
        ];
        $this->db->insert('t_barang', $data);
        redirect('Master/Barang');
    }

    public function showData()
    {
        echo $this->data();
    }

    public function data()
    {
        $join = [
            't_kategori' => 't_barang.id_kategori=t_kategori.id_kategori'
        ];

        $data = $this->model->joins('t_barang', $join, '')->result_array();
        $output = '';

        foreach ($data as $row => $value) {
            $output .= '
				<tr>
				<td>' . ($row + 1) . '</td>
				<td>' . $value['nama_barang'] . '</td>
				<td>' . $value['deskripsi'] . '</td>
				<td>' . $value['nama_kategori'] . '</td>
				<td>Rp. ' . number_format($value['harga'], 0, ',', '.') . '</td>
				<td><img src="' . base_url("assets/images/results/".$value['gambar']) .'" style="border-radius:0"></td>
				<td> <a href="javascript:void(0);" class="text-success editBarang" data-id_barang="' . $value['id_barang'] . '" data-deskripsi="' . $value['deskripsi'] . '" data-id_kategori="' . $value['id_kategori'] . '" data-harga="' . $value['harga'] . '" data-gambar="' . $value['gambar'] . '"><p class="text-primary d-inline mr-3" data-toggle="modal" data-target="#editBarang"><i class="fas fa-edit" style="font-size: 18px" data-placement="bottom" title="Edit"></i></p></a> <a href="javascript:void(0)" class="text-danger hapusBarang" data-id_barang="' . $value['id_barang'] . '"><p class="text-danger d-inline"><i class="fas fa-trash-alt text-danger" style="font-size: 18px" data-placement="bottom" title="Hapus"></i></p></a></td>
				</tr>';
        }

        return $output;
    }
}
