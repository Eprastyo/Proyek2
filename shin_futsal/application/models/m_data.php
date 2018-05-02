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
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}