<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('nama_lengkap') != null) {
            $data['title'] = 'Jstore | Kategori';
            $this->load->view('ViewAdmin/Templates/Header', $data);
            $this->load->view('ViewAdmin/Templates/Menu');
            $this->load->view('ViewAdmin/Main/Kategori');
            $this->load->view('ViewAdmin/Templates/Footer');
        } else {
            redirect('Notfound');
        }
    }

    public function insert()
    {
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('kategori'))
        ];

        $this->db->insert('t_kategori', $data);
        echo $this->showData();
    }

    public function showData()
    {
        echo $this->data();
    }
    public function data()
    {
        $query = $this->model->get('t_kategori');
        $output = '';

        foreach ($query as $row => $value) {
            $output .= '
				<tr>
				<td>' . ($row + 1) . '</td>
				<td>' . $value['nama_kategori'] . '</td>
				<td> <a href="javascript:void(0);" class="text-success editKategori" data-id_kategori="' . $value['id_kategori'] . '" data-nama_kategori="' . $value['nama_kategori'] . '"><p class="text-primary d-inline mr-4" data-toggle="modal" data-target="#editKategori"><i class="fas fa-edit" style="font-size: 18px" data-placement="bottom" title="Edit"></i></p></a> <a href="javascript:void(0);" class="text-danger hapusKategori" data-id_kategori="' . $value['id_kategori'] . '"><p class="text-danger d-inline"><i class="fas fa-trash-alt text-danger" style="font-size: 18px" data-placement="bottom" title="Hapus"></i></p></a></td>
				</tr>';
        }

        return $output;
    }

    public function update()
    {
        $id_kategori    = htmlspecialchars($this->input->post('id_kategori'));
        $kategori       = htmlspecialchars($this->input->post('kategori'));

        $where = ['id_kategori' => $id_kategori];

        $data = [
            'nama_kategori'     => $kategori
        ];
        $this->model->put('t_kategori', $data, $where);
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->model->delete('t_kategori', ['id_kategori' => $id]);
    }
}
