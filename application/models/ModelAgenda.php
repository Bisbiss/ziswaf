<?php

class ModelAgenda extends CI_Model{
    function get(){
        return $this->db->get('agenda');
    }

    function hapus($id_agenda){
        $this->db->where('id_agenda', $id_agenda);
        return $this->db->delete('agenda');
    }

    function tambah($data){
        return $this->db->insert('agenda', $data);
    }
}
