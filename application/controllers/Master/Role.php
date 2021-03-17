<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Jstore | Role';
        $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('ViewAdmin/Templates/Menu');
        $this->load->view('ViewAdmin/Main/Role');
        $this->load->view('ViewAdmin/Templates/Footer');
    }

    public function insert()
    {
        $data = [
            'nama_role' => htmlspecialchars($this->input->post('namaRole'))
        ];

        $this->db->insert('t_role', $data);
        echo $this->showData();
    }

    public function showData()
    {
        echo $this->data();
    }
    public function data()
    {
        $query = $this->model->get('t_role');
        $output = '';

        foreach ($query as $row => $value) {
            $output .= '
				<tr>
				<td>' . ($row + 1) . '</td>
				<td>' . $value['nama_role'] . '</td>
				<td> <a href="javascript:void(0);" class="text-success editRole" data-id_role="' . $value['id_role'] . '" data-nama_role="' . $value['nama_role'] . '"><p class="text-primary d-inline mr-4" data-toggle="modal" data-target="#editRole"><i class="fas fa-edit" style="font-size: 18px" data-placement="bottom" title="Edit"></i></p></a> <a href="javascript:void(0);" class="text-danger hapusRole" data-id_role="' . $value['id_role'] . '"><p class="text-danger d-inline"><i class="fas fa-trash-alt text-danger" style="font-size: 18px" data-placement="bottom" title="Hapus"></i></p></a></td>
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
