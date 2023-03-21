<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login');
        } else {
            // validasinya success
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $username])->row_array();


        var_dump($password);
        // jika usernya ada
        if ($masyarakat) {

            // cek password
            if (password_verify($password, $masyarakat['password'])) {
                $data = array(
                    'username' => $masyarakat['username'],
                    'password' => $masyarakat['password'],
                );
                $this->session->set_userdata($data); {
                    redirect('Masyarakat');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Salah Password! </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username is not register </div>');
            redirect('Auth');
        }
    }


    public function reg()
    {
        $this->form_validation->set_rules('nik', 'nik', 'required|trim');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        // 	'matches' => 'Password tidak sesuai!',
        // 	'min_length' => 'password terlalu pendek!'
        // ]);
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('Auth/registrasi');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
            ];

            $this->db->insert('masyarakat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda sudah daftar, Silahkan login!</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        log out</div>');
        redirect('Auth');
    }

    public function admin_login()

    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login admin';
            $this->load->view('auth/login_admin');
        } else {
            // validasinya success
            $this->_login_admin();
        }
    }



    private function _login_admin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $masyarakat = $this->db->get_where('petugas', ['username' => $username])->row_array();

        // jika usernya ada
        if ($masyarakat) {
            // jika usernya aktif

            // cek password
            if (password_verify($password, $masyarakat['password'])) {
                $data = array(
                    'username' => $masyarakat['username'],
                    'password' => $masyarakat['password'],
                );
                $this->session->set_userdata($data); {
                redirect('home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
                redirect('auth/admin_login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username is not register </div>');
            redirect('auth/admin_login');
        }
    }


    public function admin_registration()
    {
        $this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('telp', 'telp', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration admin';
            $this->load->view('auth/admin_registration');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'level' => 1,

            ];

            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Congratulation! your account has been created. Please Login</div>');
            redirect('Auth/');
        }
    }
    public function  landingpage()
    {
        $data['title'] = 'landingpage';
        $data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('landingpage', $data);
    }

    public function login_petugas()

    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login admin';
            $this->load->view('Auth/login_petugas');
        } else {
            // validasinya success
            $this->_login_petugas();
        }
    }



    private function _login_petugas()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $masyarakat = $this->db->get_where('petugas', ['username' => $username])->row_array();

        // jika usernya ada
        if ($masyarakat) {
            // jika usernya aktif

            // cek password
            if (password_verify($password, $masyarakat['password'])) {
                $data = [
                    'username' => $masyarakat['username'],
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
                redirect('auth/admin_login ');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username is not register </div>');
            redirect('auth/admin_login');
        }
    }


    public function registrasi_petugas()
    {
        $this->form_validation->set_rules('id_petugas', 'id_petugas', 'required|trim');
        $this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('telp', 'telp', 'required|trim');
        $this->form_validation->set_rules('level', 'level', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration admin';
            $this->load->view('Auth/registrasi_petugas');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('masyarakat    ', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'is_active' => 1,
                'level' => 1,

            ];

            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Congratulation! your account has been created. Please Login</div>');
            redirect('Auth/admin_login');
        }
    }
}
