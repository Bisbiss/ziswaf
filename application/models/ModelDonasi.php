<?php

class ModelDonasi extends CI_Model{
    function get(){
        return $this->db->get('donasi');
    }

    function hapus($id_donasi){
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->delete('donasi');
    }

    function tambah($data){
        return $this->db->insert('donasi',$data);
    }
}