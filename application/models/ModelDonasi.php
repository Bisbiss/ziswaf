<?php

class ModelDonasi extends CI_Model{
    function get(){
        $this->db->order_by('id_donasi', 'DESC');
        return $this->db->get('donasi');
    }

    function hapus($id_donasi){
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->delete('donasi');
    }

    function ambil_data($id_donasi){
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->get('donasi');
    }

    function tambah($data){
        return $this->db->insert('donasi',$data);
    }

    function ubah($data, $id_donasi){
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->update('donasi', $data);
    }

    function get_where($email){
        $this->db->where('email',$email);
        $this->db->where('verifikasi', 1);
        $this->db->order_by('id_donasi', 'DESC');
        return $this->db->get('donasi');
    }
    function where($email){
        $this->db->where('email',$email);
        $this->db->order_by('id_donasi', 'DESC');
        $this->db->where('verifikasi', 0);
        return $this->db->get('donasi');
    }
    function verifikasi($id_donasi){
        $this->db->set('verifikasi',1);
        $this->db->where('id_donasi',$id_donasi);
        $this->db->update('donasi');
    }
}