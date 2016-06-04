<?php
class Get_db extends CI_Model{
	function getAll(){
		$query = $this->db->query("SELECT * FROM users");

		return $query->result();
	}
	function insert1($data){
		$this->db->insert("users",$data);
	}
	function insert2($data){
		$this->db->insert_batch("users",$data);
	}
	function update1($data){
		$this->db->update("users",$data,"id=2");
	}
	function update2($data){
		$this->db->update_batch("users",$data,"id");
	}
}