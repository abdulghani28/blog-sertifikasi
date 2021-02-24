<?php

class AdminController extends CI_Controller
{
    //HALAMAN
    public function halaman_admin($page)
    {
        $this->load->model('M_kategori');
        $this->load->model('M_artikel');

        if ($this->load->view('admin/admin/' . $page, '', TRUE) === '') {
        } else {
            if ($page === "index") {
                $title = 'Dashboard';
            } else {
                $title = ucfirst(str_replace('_', ' ', $page));
            }
        }
        $data['title'] = $title;

        //Kategori
        $data['kategori'] = $this->M_kategori->get()->result();

        //Index
        $id = $this->session->userdata('user_id');
        $data['jumlah_kategori'] = $this->M_kategori->get()->num_rows();
        $data['jumlah_artikel'] = $this->M_artikel->get_jumlah_artikel($id)->num_rows();

        //Artikel
        $data['artikel'] = $this->M_artikel->get_join('kategori')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/admin/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    //PROSES
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }

    public function login()
    {
        $data['title'] = "Login";
        $this->load->view('admin/login', $data);
    }

    public function proseslogin_admin()
    {
        $this->load->model('M_user');

        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $data['title'] = 'Login';
        $cek = $this->M_user->cek_login($email)->row();
        if ($cek) {
            if ($password === $cek->password) {
                $level = 'admin';
                $sess = array(
                    'email' => $cek->email,
                    'level' => $level,
                    'user_id' => $cek->id
                );
                $this->session->set_userdata($sess);
                redirect('admin/index');
            } else {
                $this->session->set_flashdata('password_gagal', '<small class="text-danger">Password Salah</small>');
                redirect('login_admin');
            }
        } else {
            $this->session->set_flashdata('email_gagal', '<small class="text-danger">Email Tidak Terdaftar</small>');
            redirect('login_admin');
        }
    }

    public function register()
    {
        $data['title'] = "Daftar";
        $this->load->view('admin/register', $data);
    }

    public function prosesregister_admin()
    {
        $this->load->model('M_user');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]|matches[password1]', [
            'matches' => 'Password does not match',
            'min_length' => 'Minimal 4 character'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Register";
            $this->load->view('admin/register', $data);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'level' => 0
            );
            $insert = $this->M_user->insert_user($data);

            if ($insert) {
                $this->session->set_flashdata('pesan1', 'Berhasil Menambah User');
                redirect('login_admin');
            } else {
                $this->session->set_flashdata('pesan', 'Gagal Menambah User');
                redirect('register_admin');
            }
        }
    }
}
