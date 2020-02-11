<?php

class ModelAgenda extends CI_Model{
    function get(){
        $this->db->order_by('id_agenda', 'DESC');
        return $this->db->get('agenda');
    }

    function hapus($id_agenda){
        $this->db->where('id_agenda', $id_agenda);
        return $this->db->delete('agenda');
    }

    function tambah($data){
        return $this->db->insert('agenda', $data);
    }

    function get_where($id){
        $this->db->where('id_agenda',$id);
        return $this->db->get('agenda');
    }

    function ubah($data,$id_agenda){
        $this->db->where('id_agenda',$id_agenda);
        return $this->db->update('agenda', $data);
    }
}
