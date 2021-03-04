<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addition_model extends CI_Model 
{
	
	var $tbl_pemasukan = 'tbl_pemasukan'; 

/*grade*/
	public function get_all_addition(){
		$this->db->join('tbl_masterkomponen','tbl_masterkomponen.id_komponengaji=tbl_pemasukan.id_komponenpenambah');
		$this->db->join('tbl_masterkaryawan','tbl_masterkaryawan.id_karyawan=tbl_pemasukan.id_masterkaryawan');
		$query=$this->db->get($this->tbl_pemasukan);
		return $query->result();
	}
	public function get_pemasukan($bulan,$tahun){
		$this->db->join('tbl_masterkomponen','tbl_masterkomponen.id_komponengaji=tbl_pemasukan.id_komponenpenambah');
		$this->db->join('tbl_masterkaryawan','tbl_masterkaryawan.id_karyawan=tbl_pemasukan.id_masterkaryawan');
		$this->db->where('tbl_pemasukan.bulan',$bulan);
		$this->db->where('tbl_pemasukan.tahun',$tahun);
		$query=$this->db->get($this->tbl_pemasukan);
		return $query->result();
	}

	public function add_data_addition($data)
	{
		$this->db->insert($this->tbl_pemasukan, $data);
		return $this->db->insert_id();
	}

	public function addition_update($where, $data)
	{
		$this->db->update($this->tbl_pemasukan, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_addition_by_edit_id($id)
	{
		$this->db->where('id_pemasukan',$id);
		$query = $this->db->get($this->tbl_pemasukan);
		return $query->row();
	}

	public function deleteaddition_by_id($id)
	{
		$this->db->where('id_pemasukan',$id);
		$this->db->delete($this->tbl_pemasukan);
	}
/*grade*/









}
