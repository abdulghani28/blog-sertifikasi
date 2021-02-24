<?php
class KategoriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori');
    }

    public function hapus($id)
    {
        $hapus = $this->M_kategori->hapus($id);
        if ($hapus) {
            $this->session->set_flashdata('pesan', 'Berhasil Menghapus');
            redirect('admin/kelola_kategori');
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Menghapus');
            redirect('admin/kelola_kategori');
        }
    }

    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post('nama')
        );
        $tambah = $this->M_kategori->tambah($data);
        if ($tambah) {
            $this->session->set_flashdata('pesan', 'Berhasil Menambah Kategori');
            redirect('admin/kelola_kategori');
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Menambah Kategori');
            redirect('admin/kelola_kategori');
        }
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama')
        );

        $edit = $this->M_kategori->edit($id, $data);

        if ($edit) {
            $this->session->set_flashdata('pesan', 'Berhasil Mengedit');
            redirect('admin/kelola_kategori');
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Mengedit');
            redirect('admin/kelola_kategori');
        }
    }
}
