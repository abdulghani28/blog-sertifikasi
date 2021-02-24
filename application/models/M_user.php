<?php

class M_user extends CI_Model
{
    public function cek_login($email)
    {
        $data = array(
            'email' => $email
        );
        return $this->db->get_where('user', $data);
    }
    public function insert_user($data)
    {
        return $this->db->insert('user', $data);
    }
    public function update_user($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
