<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Jstore | Transaksi';
        $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('ViewAdmin/Templates/Menu');
        $this->load->view('ViewAdmin/Main/Transaksi');
        $this->load->view('ViewAdmin/Templates/Footer');
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
        $query = $this->model->joins('t_transaksi', $join, '')->result_array();
        $output = '';

        foreach ($query as $row => $value) {
            $output .= '
				<tr>
				<td>' . ($row + 1) . '</td>
				<td>' . $value['nama'] . '</td>
				<td>' . $value['telp'] . '</td>
				<td>' . $value['alamat'] . '</td>
				<td>' . $value['nama_barang'] . '</td>
				<td>' . $value['qty'] . '</td>
				<td>' . $value['tanggal'] . '</td>
				<td> <a href="' . 'https://api.whatsapp.com/send?phone=' . $value['telp'] . '&text=Saya%20tertarik%20untuk%20membeli%20produk%20ini%20segera.' . '" class="text-success sendWA" data-id_transaksi="' . $value['id_transaksi'] . '" data-id_barang="' . $value['id_barang'] . '" data-qty="' . $value['qty'] . '" data-nama_cust="' . $value['nama'] . '" data-telp="' . $value['telp'] . '" data-alamat="' . $value['alamat'] . '" data-tanggal="' . $value['tanggal'] . '"><p class="text-primary d-inline mr-4" data-toggle="modal" data-target="#"><i class="mdi mdi-send" style="font-size: 18px" data-placement="bottom" title="Kirim Pesan"></i></p></a> <a href="javascript:void(0);" class="text-danger hapusTransaksi" data-id_transaksi="' . $value['id_transaksi'] . '"><p class="text-danger d-inline"><i class="fas fa-trash-alt text-danger" style="font-size: 18px" data-placement="bottom" title="Hapus"></i></p></a></td>
				</tr>';
        }

        return $output;
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
        $id_role = $this->input->post('id_role');
        $this->model->delete('t_role', ['id_role' => $id_role]);
    }
}
