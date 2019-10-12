<?php

class ModelLaporan extends CI_Model{
    function get(){
        return $this->db->get('laporan');
    }

    function hapus($id_laporan){
        $this->db->where('id_laporan', $id_laporan);
        return $this->db->delete('laporan');
    }
}