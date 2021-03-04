<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deduction_model extends CI_Model 
{
	var $tbl_pengeluaran = 'tbl_pengeluaran'; 
	public function get_all_deduction(){
		$this->db->join('tbl_masterkomponen','tbl_masterkomponen.id_komponengaji=tbl_pengeluaran.id_komponen_pengurang');
		$this->db->join('tbl_masterkaryawan','tbl_masterkaryawan.id_karyawan=tbl_pengeluaran.id_masterkaryawan');
		$query=$this->db->get($this->tbl_pengeluaran);
		return $query->result();
	}

	public function add_data_deduction($data)
	{
		$this->db->insert($this->tbl_pengeluaran, $data);
		return $this->db->insert_id();
	}

	public function deduction_update($where, $data)
	{
		$this->db->update($this->tbl_pengeluaran, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_deduction_by_edit_id($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$query = $this->db->get($this->tbl_pengeluaran);
		return $query->row();
	}

	public function deletededuction_by_id($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$this->db->delete($this->tbl_pengeluaran);
	}

}
