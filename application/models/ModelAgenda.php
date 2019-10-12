<?php

class ModelAgenda extends CI_Model{
    function get(){
        return $this->db->get('berita');
    }
}