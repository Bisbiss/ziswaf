<?php

class ModelLaporan extends CI_Model{
    function get(){
        $this->db->order_by('id_laporan', 'DESC');
        return $this->db->get('laporan');
    }

    function hapus($id_laporan){
        $this->db->where('id_laporan', $id_laporan);
        return $this->db->delete('laporan');
    }

    function tambah($data){
        return $this->db->insert('laporan', $data);
    }
    function get_where($id){
        $this->db->where('id_laporan',$id);
        return $this->db->get('laporan');
    }

    function ubah($data,$id_laporan){
        $this->db->where('id_laporan',$id_laporan);
        return $this->db->update('laporan', $data);
    }
}