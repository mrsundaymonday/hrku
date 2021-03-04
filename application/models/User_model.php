<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	var $table = 'tbl_user';


	// function verify($uname,$pass)
	// {
	// 	$this->db->where('username',$uname);
	// 	$this->db->where('password',MD5($pass));
	// 	$this->db->join('tbl_masterlevel','tbl_masterlevel.kode_level=tbl_masteruser.kode_level');
	// 	return $this->db->get($this->table)->row();
	// }
	function verify($uname,$pass)
	{
		$this->db->where('username',$uname);
		$this->db->where('password',$pass);
		return $this->db->get($this->table)->row();
	}
	function updatepass($nik,$data)
	{
		$this->db->update($this->table, $data, $where);
	    return $this->db->affected_rows();
	}
	
	public function update_pass($where, $data)
	{
	    $this->db->update($this->table, $data, $where);
	    return $this->db->affected_rows();
	}

	

}
