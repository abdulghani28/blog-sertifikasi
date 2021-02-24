<?php

class M_artikel extends CI_Model
{
    public function get()
    {
        $this->db->select('*, artikel.id AS aid');
        $this->db->join('kategori', 'kategori.id = artikel.kategori');
        return $this->db->get('artikel');
    }

    public function get_where($id)
    {
        return $this->db->get_where('artikel', array('id' => $id));
    }
    public function get_jumlah_artikel($id)
    {
        return $this->db->get_where('artikel', array('id_penulis' => $id));
    }
    public function pencarian($judul)
    {
        $this->db->select('*, artikel.id AS ID, user.username AS user_name, kategori.nama AS kat_nama');
        $this->db->join('user', 'user.id=artikel.id_penulis');
        $this->db->join('kategori', 'kategori.id = artikel.kategori');
        $this->db->like('judul', $judul);
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get_where('artikel');
    }
    public function get_where_art($id)
    {
        $this->db->select('*, artikel.id AS ID, user.username AS user_name, kategori.nama AS kat_nama');
        $this->db->join('user', 'user.id=artikel.id_penulis');
        $this->db->join('kategori', 'kategori.id = artikel.kategori');
        return $this->db->get_where('artikel', array('artikel.id' => $id));
    }
    public function get_join($table)
    {
        $id = $this->session->userdata('user_id');
        $this->db->select('*, artikel.id AS ID, kategori.nama AS nama_kategori');
        $this->db->join($table, $table . '.id = artikel.' . $table);
        return $this->db->get_where('artikel', array('artikel.id_penulis' => $id));
    }
    public function tambah($data)
    {
        return $this->db->insert('artikel', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('artikel');
    }
    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('artikel', $data);
    }
}
