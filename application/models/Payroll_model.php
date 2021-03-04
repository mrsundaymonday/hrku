<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll_model extends CI_Model 
{
	
	var $tbl_masterperiode = 'tbl_masterperiode'; 


	public function get_all(){
		$query=$this->db->get($this->tbl_masterperiode);
		return $query->result();
	}

	public function prosespayroll($data)
	{
		$this->db->insert($this->tbl_masterperiode, $data);
		return $this->db->insert_id();
	}

	public function karyawan_update($where, $data)
	{
		$this->db->update($this->tbl_masterperiode, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_karyawan_by_edit_id($id)
	{
		$this->db->where('id_karyawan',$id);
		$query = $this->db->get($this->tbl_masterperiode);
		return $query->row();
	}

	public function deletekaryawan_by_id($id)
	{
		$this->db->where('id_karyawan',$id);
		$this->db->delete($this->tbl_masterperiode);
	}
	
	









}
