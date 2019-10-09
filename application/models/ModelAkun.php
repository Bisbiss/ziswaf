<?php 
 
class ModelAkun extends CI_Model{	
	function daftarAkun($data){
		$this->db->insert('user', $data);
	}	

	function login($where){
		return $this->db->get_where('user',$where);
	}

	function get(){
		return $this->db->get('user');
	}

	function hapus($id_user){
		$this->db->where('id_user',$id_user);
		return $this->db->delete('user');
	}
}