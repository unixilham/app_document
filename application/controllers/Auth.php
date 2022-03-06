<?php

class Auth extends CI_Controller
{


    public function index()
    {



        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->load->view('auth/login');
        } else {
            //validasinya lolos
            $this->_login();
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if ($user) {
            //jika usernya ada
            if ($user['password'] == $password) {
                $data = [
                    'username' => $username
                ];

                $this->session->set_userdata($data);

                redirect('home');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Password Salah!
                </div>
            </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Username tidak terdaftar
                </div>
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect();
    }
}
