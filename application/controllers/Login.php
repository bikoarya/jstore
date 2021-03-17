<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('txtUsername', 'username', 'trim|required', [
            'required' => 'Masukkan username.'
        ]);
        $this->form_validation->set_rules('txtPassword', 'password', 'trim|required', [
            'required' => 'Masukkan password.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Jstore | Login';
            $this->load->view('Login/Index', $data);
        } else {
            $this->_Masuk();
        }
    }

    private function _Masuk()
    {
        $username = $this->input->post('txtUsername');
        $password = $this->input->post('txtPassword');

        $user = $this->db->get_where('t_admin', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                if ($user['id_role'] == 2 || $user['id_role'] == 3) {
                    $data = [
                        'username' => $user['username'],
                        'nama_lengkap' => $user['nama_lengkap'],
                        'id_role' => $user['id_role'],
                        'nama_role'
                    ];
                    $this->session->set_userdata($data);
                    redirect('Dashboard');
                } else {
                    redirect('Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
                    <p style="margin-top: 5px; margin-bottom: 5px; font-size: 16px; color: black">Password salah.</p>
                    <button type="button" class="close mt-1 mr-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
                    <p style="margin-top: 5px; margin-bottom: 5px; font-size: 16px; color: black">Akun belum terdaftar.</p>
                    <button type="button" class="close mt-1 mr-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('Login');
        }
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
