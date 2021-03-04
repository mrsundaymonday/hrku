<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model 
{
	
	var $tbl_masterkaryawan = 'tbl_masterkaryawan'; 

/*karyawan*/
	public function get_all(){
		$query=$this->db->get($this->tbl_masterkaryawan);
		return $query->result();
	}

	public function add_data_karyawan($data)
	{
		$this->db->insert($this->tbl_masterkaryawan, $data);
		return $this->db->insert_id();
	}

	public function karyawan_update($where, $data)
	{
		$this->db->update($this->tbl_masterkaryawan, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_karyawan_by_edit_id($id)
	{
		$this->db->where('id_karyawan',$id);
		$query = $this->db->get($this->tbl_masterkaryawan);
		return $query->row();
	}

	public function deletekaryawan_by_id($id)
	{
		$this->db->where('id_karyawan',$id);
		$this->db->delete($this->tbl_masterkaryawan);
	}
	function search_karyawan($data){
    $this->db->like('nama',$data);
    return $this->db->get('tbl_masterkaryawan')->result();
}

/*karyawan*/








}
