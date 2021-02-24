<?php

class GuestController extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_artikel');
        $data['title'] = 'MySinopsis';
        //Artikel
        $data['artikel'] = $this->M_artikel->get()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('guest/index', $data);
        $this->load->view('templates/foot', $data);
    }
    public function ke_detail($id)
    {
        $this->load->model('M_artikel');
        $data['isi'] = $this->M_artikel->get_where_art($id)->row();
        $data['title'] = $data['isi']->judul;
        $this->load->view('templates/head', $data);
        $this->load->view('guest/detail', $data);
        $this->load->view('templates/foot', $data);
    }
    public function pencarian()
    {
        $this->load->model('M_artikel');
        $data['title'] = 'Hasil Pencarian '.$_GET['cari'];
        $cari = $_GET['cari'];
        $data['artikel'] = $this->M_artikel->pencarian($cari)->result();
        $this->load->view('templates/head', $data);
        $this->load->view('guest/pencarian', $data);
        $this->load->view('templates/foot', $data);
    }
}
