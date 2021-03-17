<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Jstore | Admin';
        $data['role'] = $this->model->get('t_role');
        $this->load->view('ViewAdmin/Templates/Header', $data);
        $this->load->view('ViewAdmin/Templates/Menu');
        $this->load->view('ViewAdmin/Main/Admin');
        $this->load->view('ViewAdmin/Templates/Footer');
    }

    public function insert()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username')),
            'nama_lengkap' => htmlspecialchars($this->input->post('namaLengkap')),
            'id_role' => htmlspecialchars($this->input->post('role')),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->db->insert('t_admin', $data);
        echo $this->showData();
    }

    public function showData()
    {
        echo $this->data();
    }

    public function data()
    {
        $join = [
            't_role' => 't_admin.id_role=t_role.id_role'
        ];

        $data = $this->model->joins('t_admin', $join, '')->result_array();
        $output = '';

        foreach ($data as $row => $value) {
            $output .= '
				<tr>
				<td>' . ($row + 1) . '</td>
				<td>' . $value['username'] . '</td>
				<td>' . $value['nama_lengkap'] . '</td>
				<td>' . $value['nama_role'] . '</td>
				<td> <a href="javascript:void(0);" class="text-success editAdmin" data-id_admin="' . $value['id_admin'] . '" data-username="' . $value['username'] . '" data-nama_lengkap="' . $value['nama_lengkap'] . '" data-role="' . $value['id_role'] . '" data-password="' . $value['password'] . '"><p class="text-primary d-inline mr-3" data-toggle="modal" data-target="#editAdmin"><i class="fas fa-edit" style="font-size: 18px" data-placement="bottom" title="Edit"></i></p></a> <a href="javascript:void(0)" class="text-danger hapusAdmin" data-id_admin="' . $value['id_admin'] . '"><p class="text-danger d-inline"><i class="fas fa-trash-alt text-danger" style="font-size: 18px" data-placement="bottom" title="Hapus"></i></p></a></td>
				</tr>';
        }

        return $output;
    }

    public function update()
    {
        $id_admin       = htmlspecialchars($this->input->post('id_admin'));
        $username       = htmlspecialchars($this->input->post('username'));
        $namaLengkap    = htmlspecialchars($this->input->post('namaLengkap'));
        $password       = htmlspecialchars($this->input->post('newPassword'));
        $newPassword    = password_hash($password, PASSWORD_DEFAULT);
        $oldPassword    = htmlspecialchars($this->input->post('oldPassword'));
        $role           = htmlspecialchars($this->input->post('role'));

        $where = ['id_admin' => $id_admin];

        if ($password != null) {
            $data = [
                'username'      => $username,
                'nama_lengkap'  => $namaLengkap,
                'id_role'       => $role,
                'password'      => $newPassword
            ];
            $this->model->put('t_admin', $data, $where);
        } else {
            $data = [
                'username'      => $username,
                'nama_lengkap'  => $namaLengkap,
                'id_role'       => $role,
                'password'      => $oldPassword
            ];
            $this->model->put('t_admin', $data, $where);
        }
    }

    public function delete()
    {
        $id_admin = $this->input->post('id_admin');
        $this->model->delete('t_admin', ['id_admin' => $id_admin]);
    }
}
