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
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}