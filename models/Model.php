<?php
class Model extends CI_Model {

	public function insert(Usuario $usu)
	{
		$this->db->insert('Usuario',$usu);
	}
	

	public function searchAll()
	{
		$query = $this->db->query('Select * from Usuario');
		return $query->result();
	}

	public function getUser($nome,$pass){
	$this->db->where('nome',$nome);
	$this->db->where('pass',$pass);
	$a = $this->db->get('Usuario');
	if ($a->num_rows()>0){
		if ($a->row()->nome === "root"){
			return "admin";
		}else{
			return "comum";
		}
	}else{
		return false;
			}
		}
}