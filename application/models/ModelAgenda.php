<?php

class ModelAgenda extends CI_Model{
    function get(){
        return $this->db->get('berita');
    }

    function hapus($id_berita){
        $this->db->where('id_berita', $id_berita);
        return $this->db->delete('berita');
    }
}