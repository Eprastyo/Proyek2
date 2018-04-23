<?php 
 
class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('t_admin');
	}
	function input_data($data,$table){
		return $this->db->insert($table,$data);
	}
	function tampil_data(){
		return $this->db->get('t_lapangan');
	}
}