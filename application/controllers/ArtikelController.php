<?php
class ArtikelController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_artikel');
        $this->load->model('M_kategori');
    }
    public function ke_edit($id)
    {
        $data['title'] = "Edit Artikel";
        $data['artikel'] = $this->M_artikel->get_where($id)->row();
        $data['kategori'] = $this->M_kategori->get()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/admin/edit_artikel', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        //Ambil Data
        $data = $this->M_artikel->get_where($id)->row;
        //Hapus Thumbnail
        $thumbnail = $data->gambar;
        $path = APPPATH . '../    assets/uploads/thumbnail/' . $thumbnail;
        unlink($path);

        //Hapus DB
        $hapus = $this->M_artikel->hapus($id);
        if ($hapus) {
            $this->session->set_flashdata('pesan', 'Berhasil Menghapus');
            redirect('admin/kelola_artikel');
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Menghapus');
            redirect('admin/kelola_artikel');
        }
    }

    public function tambah()
    {
        $config['upload_path']          = './assets/uploads/thumbnail/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            echo "Gagal woi";
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];

            $data = array(
                'judul' => $this->input->post('judul'),
                'gambar' => $filename,
                'isi' => $this->input->post('isi'),
                'kategori' => $this->input->post('kategori'),
                'tanggal' => date('Y-m-d'),
                'id_penulis' => $this->session->userdata('user_id')
            );

            $insert = $this->M_artikel->tambah($data);

            if ($insert) {
                $this->session->set_flashdata('pesan', 'Berhasil Menambah Artikel');
                redirect('admin/kelola_artikel');
            } else {
                $this->session->set_flashdata('pesan', 'Gagal Menambah Artikel');
                redirect('admin/kelola_artikel');
            }
        }
    }
    public function edit($id)
    {
        if (!empty($_FILES['foto']['name'])) {

            $config['upload_path']          = './assets/uploads/thumbnail/';
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Gagal woi";
            } else {
                $thumbnail = $this->input->post('gambar_sekarang');
                $path = APPPATH . '../assets/uploads/thumbnail/' . $thumbnail;
                unlink($path);

                $data = $this->upload->data();
                $filename = $data['file_name'];
            }
        }
        if ($this->input->post('foto') !== null) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'gambar' => $filename,
                'isi' => $this->input->post('isi'),
                'kategori' => $this->input->post('kategori'),
                'tanggal' => date('Y-m-d'),
            );
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'kategori' => $this->input->post('kategori'),
                'tanggal' => date('Y-m-d'),
            );
        }

        $edit = $this->M_artikel->edit($id, $data);

        if ($edit) {
            $this->session->set_flashdata('pesan', 'Berhasil Mengedit');
            redirect('admin/kelola_artikel');
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Mengedit');
            redirect('admin/kelola_artikel');
        }
    }
}
