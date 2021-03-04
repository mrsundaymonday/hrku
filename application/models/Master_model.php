<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model 
{
	
	var $tbl_mastercabang = 'tbl_mastercabang';
	var $tbl_masterlokasi = 'tbl_masterlokasi';
	var $tbl_masterjabatan = 'tbl_masterjabatan';
	var $tbl_mastershift = 'tbl_mastershift';
	var $tbl_masterdepartemen = 'tbl_masterdepartemen';
	var $tbl_masterlevel = 'tbl_masterlevel';
	var $tbl_masteruser = 'tbl_masterusers';
	var $tbl_masterregional = 'tbl_masterregional';
	var $tbl_mastergrade = 'tbl_mastergrade'; 
	var $tbl_masterkomponen = 'tbl_masterkomponen';
	var $tbl_masterslip = 'tbl_masterslip'; 
	var $tbl_masterkaryawan = 'tbl_masterkaryawan'; 
	var $tbl_masterperiode = 'tbl_masterperiode'; 

	public function getperiode(){
		$query=$this->db->get($this->tbl_masterperiode);
		return $query->result();
	}

/*grade*/
	public function get_all_grade(){
		$query=$this->db->get($this->tbl_mastergrade);
		return $query->result();
	}

	public function add_data_grade($data)
	{
		$this->db->insert($this->tbl_mastergrade, $data);
		return $this->db->insert_id();
	}

	public function grade_update($where, $data)
	{
		$this->db->update($this->tbl_mastergrade, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_grade_by_edit_id($id)
	{
		$this->db->where('id_grade',$id);
		$query = $this->db->get($this->tbl_mastergrade);
		return $query->row();
	}

	public function deletegrade_by_id($id)
	{
		$this->db->where('id_grade',$id);
		$this->db->delete($this->tbl_mastergrade);
	}
/*karyawan*/
public function get_all_karyawan(){
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
/*karyawan*/
/**/
	public function get_all_slip(){
		$query=$this->db->get($this->tbl_masterslip);
		return $query->result();
	}
	/*komponen*/
	public function get_all_komponengaji(){
		$this->db->join('tbl_mastergrade','tbl_mastergrade.id_grade=tbl_masterkomponen.id_komponengrade');
		$query=$this->db->get($this->tbl_masterkomponen);
		return $query->result();
	}
	public function get_komponen_deduction(){
		$this->db->join('tbl_mastergrade','tbl_mastergrade.id_grade=tbl_masterkomponen.id_komponengrade');
		$this->db->where('tbl_masterkomponen.type','pengurang');
		$query=$this->db->get($this->tbl_masterkomponen);
		return $query->result();
	}

	public function get_komponen_addition(){
		$this->db->join('tbl_mastergrade','tbl_mastergrade.id_grade=tbl_masterkomponen.id_komponengrade');
		$this->db->where('tbl_masterkomponen.type','penambah');
		$query=$this->db->get($this->tbl_masterkomponen);
		return $query->result();
	}
	
	public function get_komponen_addition_row(){
		$this->db->join('tbl_mastergrade','tbl_mastergrade.id_grade=tbl_masterkomponen.id_komponengrade');
		$this->db->where('tbl_masterkomponen.type','penambah');
		$query=$this->db->get($this->tbl_masterkomponen);
		return $query->num_rows();
	}
	
	public function add_data_komponengaji($data)
	{
		$this->db->insert($this->tbl_masterkomponen, $data);
		return $this->db->insert_id();
	}

	public function komponengaji_update($where, $data)
	{
		$this->db->update($this->tbl_masterkomponen, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_komponengaji_by_edit_id($id)
	{
		$this->db->where('id_komponengaji',$id);
		$query = $this->db->get($this->tbl_masterkomponen);
		return $query->row();
	}

	public function deletekomponengaji_by_id($id)
	{
		$this->db->where('id_komponengaji',$id);
		$this->db->delete($this->tbl_masterkomponen);
	}
	/*komponen*/
	//master cabang
	public function get_all_cabang()
	{
		$query=$this->db->get($this->tbl_mastercabang);
		return $query->result();
	}

	public function add_data_cabang($data)
	{
		$this->db->insert($this->tbl_mastercabang, $data);
		return $this->db->insert_id();
	}


	public function cabang_update($where, $data)
	{
	    $this->db->update($this->tbl_mastercabang, $data, $where);
	    return $this->db->affected_rows();
	}


	public function get_cabang_by_edit_id($id)
	{
		$this->db->where('id_cabang',$id);
		$query = $this->db->get($this->tbl_mastercabang);
		return $query->row();
	}


	public function deletecabang_by_id($id)
	{
		$this->db->where('id_cabang',$id);
		$this->db->delete($this->tbl_mastercabang);
	}

	//master lokasi
	// public function get_all_data()
	// {	if ($this->session->userdata('level')=="admin") 
	// 		{
	// 			$this->db->select('tbl_dokumen.*,tbl_masterreminder.reminder_day,tbl_masterkategori.id_kategori,tbl_masterkategori.nama_kategori,tbl_masterunitusaha.id_unitusaha,tbl_masterunitusaha.nama_unitusaha');
	// 			$this->db->join('tbl_masterunitusaha','tbl_masterunitusaha.id_unitusaha=tbl_dokumen.unitusaha_id');
	// 			$this->db->join('tbl_masterkategori','tbl_masterkategori.id_kategori=tbl_dokumen.kategori_id');
	// 			$this->db->join('tbl_masterreminder','tbl_masterkategori.id_kategori=tbl_masterreminder.kategori_id');
	// 			/*$this->db->where('tbl_dokumen.is_close','0');*/
	// 			$this->db->where('DATEDIFF(tgl_akhir,CURRENT_DATE()) >= reminder_day');
	// 			$query=$this->db->get($this->tbl_dokumen);
	// 			return $query->result();
	// 		} else 
	// 		{
	// 			$this->db->select('tbl_dokumen.*,tbl_masterreminder.reminder_day,tbl_masterkategori.id_kategori,tbl_masterkategori.nama_kategori,tbl_masterunitusaha.id_unitusaha,tbl_masterunitusaha.nama_unitusaha');
	// 			$this->db->join('tbl_masterunitusaha','tbl_masterunitusaha.id_unitusaha=tbl_dokumen.unitusaha_id');
	// 			$this->db->join('tbl_masterkategori','tbl_masterkategori.id_kategori=tbl_dokumen.kategori_id');
	// 			$this->db->join('tbl_masterreminder','tbl_masterkategori.id_kategori=tbl_masterreminder.kategori_id');
	// 			/*$this->db->where('tbl_dokumen.is_close','0');*/
	// 			$this->db->where('tbl_masterunitusaha.id_regional', $this->session->userdata('id_regional'));
	// 			$this->db->where('DATEDIFF(tgl_akhir,CURRENT_DATE()) >= reminder_day');
	// 			$query=$this->db->get($this->tbl_dokumen);
	// 			return $query->result();
	// 		}
	// }

//crud lokasi
	public function get_all_lokasi()
	{
        // select a.id_lokasi,a.nama_lokasi,a.id_cabang 	, 
        // a.latitude 	,a.longitude 	, a.jarak 	,a.created_by 	,a.created_date 	, a.modified_by 	,a.modified_date 	
        // FROM tbl_masterlokasi a inner JOIN tbl_mastercabang b on a.id_cabang = b.id_cabang
        $this->db->select('tbl_masterlokasi.*,tbl_mastercabang.nama_cabang');
	    $this->db->join('tbl_mastercabang','tbl_mastercabang.id_cabang=tbl_masterlokasi.id_cabang');
		$query=$this->db->get($this->tbl_masterlokasi);
		return $query->result();
	}

	public function add_data_lokasi($data)
	{
		$this->db->insert($this->tbl_masterlokasi, $data);
		return $this->db->insert_id();
	}


	public function lokasi_update($where, $data)
	{
	    $this->db->update($this->tbl_masterlokasi, $data, $where);
	    return $this->db->affected_rows();
	}


	public function get_lokasi_by_edit_id($id)
	{
		$this->db->where('id_lokasi',$id);
		$query = $this->db->get($this->tbl_masterlokasi);
		return $query->row();
	}


	public function deletelokasi_by_id($id)
	{
		$this->db->where('id_lokasi',$id);
		$this->db->delete($this->tbl_masterlokasi);
	}

//end lokasi 


//master departemen
	public function get_all_departemen()
	{
		$query=$this->db->get($this->tbl_masterdepartemen);
		return $query->result();
	}

	public function add_data_departemen($data)
	{
		$this->db->insert($this->tbl_masterdepartemen, $data);
		return $this->db->insert_id();
	}

	public function departemen_update($where, $data)
	{
	    $this->db->update($this->tbl_masterdepartemen, $data, $where);
	    return $this->db->affected_rows();
	}

	public function get_departemen_by_edit_id($id)
	{
		$this->db->where('id_departemen',$id);
		$query = $this->db->get($this->tbl_masterdepartemen);
		return $query->row();
	}

	public function deletedepartemen_by_id($id)
	{
		$this->db->where('id_departemen',$id);
		$this->db->delete($this->tbl_masterdepartemen);
	}

//end master departemen



//master level
public function get_all_level()
{
	$query=$this->db->get($this->tbl_masterlevel);
	return $query->result();
}

public function add_data_level($data)
{
	$this->db->insert($this->tbl_masterlevel, $data);
	return $this->db->insert_id();
}

public function level_update($where, $data)
{
	$this->db->update($this->tbl_masterlevel, $data, $where);
	return $this->db->affected_rows();
}

public function get_level_by_edit_id($id)
{
	$this->db->where('id_level',$id);
	$query = $this->db->get($this->tbl_masterlevel);
	return $query->row();
}

public function deletelevel_by_id($id)
{
	$this->db->where('id_level',$id);
	$this->db->delete($this->tbl_masterlevel);
}

//end master level



//master jabatan
public function get_all_jabatan()
{
	// SELECT 
	// tbl_masterjabatan.id_jabatan ,
	// tbl_masterjabatan.nama_jabatan ,
	// tbl_masterjabatan.id_departemen,
	// tbl_masterjabatan.id_level,
	// tbl_masterjabatan.id_jabatansupervisi ,
	// tbl_masterjabatan.created_by ,
	// tbl_masterjabatan.created_date ,
	// tbl_masterjabatan.modified_by ,
	// tbl_masterjabatan.modified_date ,
	// tbl_masterdepartemen.nama_departemen,
	// tbl_masterlevel.nama_level,
	// masterjabatan.nama_jabatan as nama_jabatansupervisi
	// FROM tbl_masterjabatan
	// join tbl_masterdepartemen  on tbl_masterjabatan.id_departemen = tbl_masterjabatan.id_departemen 
	// join tbl_masterlevel    on tbl_masterlevel.id_level = tbl_masterjabatan.id_level
	// JOIN tbl_masterjabatan masterjabatan on tbl_masterjabatan.id_jabatan = masterjabatan.id_jabatan 

	// $this->db->select('tbl_masterjabatan.*,tbl_masterlevel.nama_level,tbl_masterdepartemen.nama_departemen,masterjabatan.nama_jabatan as nama_jabatansupervisi');
	// $this->db->join('tbl_masterdepartemen','tbl_masterdepartemen.id_departemen= tbl_masterjabatan.id_departemen');
	// $this->db->join('tbl_masterlevel','tbl_masterlevel.id_level= tbl_masterjabatan.id_level');	
	// $this->db->join('tbl_masterjabatan masterjabatan','masterjabatan.id_jabatan=tbl_masterjabatan.id_jabatan');	
	return 	$this->db->query("
	select 
A.* , tbl_masterjabatan.nama_jabatan as nama_jabatansupervisi  from 
(
SELECT 
tbl_masterjabatan.id_jabatan ,
tbl_masterjabatan.nama_jabatan ,
tbl_masterjabatan.id_departemen,
tbl_masterjabatan.id_level,
tbl_masterjabatan.id_jabatansupervisi ,
tbl_masterjabatan.created_by ,
tbl_masterjabatan.created_date ,
tbl_masterjabatan.modified_by ,
tbl_masterjabatan.modified_date ,
tbl_masterdepartemen.nama_departemen,
tbl_masterlevel.nama_level
FROM tbl_masterjabatan
join tbl_masterdepartemen  on tbl_masterjabatan.id_departemen = tbl_masterdepartemen.id_departemen 
join tbl_masterlevel    on tbl_masterlevel.id_level = tbl_masterjabatan.id_level
) A
left JOIN tbl_masterjabatan on A.id_jabatansupervisi = tbl_masterjabatan.id_jabatan
	")->result() ;
	// $query=$this->db->get($this->tbl_masterjabatan);
	// return $query->result();
}

public function add_data_jabatan($data)
{
	$this->db->insert($this->tbl_masterjabatan, $data);
	return $this->db->insert_id();
}


public function jabatan_update($where, $data)
{
	$this->db->update($this->tbl_masterjabatan, $data, $where);
	return $this->db->affected_rows();
}


public function get_jabatan_by_edit_id($id)
{
	$this->db->where('id_jabatan',$id);
	$query = $this->db->get($this->tbl_masterjabatan);
	return $query->row();
}


public function deletejabatan_by_id($id)
{
	$this->db->where('id_jabatan',$id);
	$this->db->delete($this->tbl_masterjabatan);
}

//end jabatan 



//master shit
public function get_all_shift()
{
	$query=$this->db->get($this->tbl_mastershift);
	return $query->result();
}

public function add_data_shift($data)
{
	$this->db->insert($this->tbl_mastershift, $data);
	return $this->db->insert_id();
}

public function shift_update($where, $data)
{
	$this->db->update($this->tbl_mastershift, $data, $where);
	return $this->db->affected_rows();
}

public function get_shift_by_edit_id($id)
{
	$this->db->where('id_shift',$id);
	$query = $this->db->get($this->tbl_mastershift);
	return $query->row();
}

public function deleteshift_by_id($id)
{
	$this->db->where('id_shift',$id);
	$this->db->delete($this->tbl_mastershift);
}

//end master shift




	//master reminder expired
	public function get_all_reminder()
	{
//		$query=$this->db->get($this->tbl_masterreminder);
		$this->db->select('tbl_masterreminder.id_reminder,tbl_masterkategori.nama_kategori,tbl_masterreminder.reminder_day');
		$this->db->join('tbl_masterkategori','tbl_masterkategori.id_kategori=tbl_masterreminder.kategori_id');
		$query=$this->db->get($this->tbl_masterreminder);
		return $query->result();
	}

	public function add_data_reminder($data)
	{
		$this->db->insert($this->tbl_masterreminder, $data);
		return $this->db->insert_id();
	}


	public function reminder_update($where, $data)
	{
	    $this->db->update($this->tbl_masterreminder, $data, $where);
	    return $this->db->affected_rows();
	}


	public function get_reminder_by_edit_id($id)
	{
		$this->db->where('id_reminder',$id);
		$query = $this->db->get($this->tbl_masterreminder);
		return $query->row();
	}


	public function deletereminder_by_id($id)
	{
		$this->db->where('id_reminder',$id);
		$this->db->delete($this->tbl_masterreminder);
	}





//  master user

	public function get_all_user()
	{	
$this->db->select('tbl_masterusers.id_user 	,
tbl_masterusers.username  ,tbl_masterusers.nama,tbl_masterusers.password , tbl_masterusers.email_user,tbl_masterusers.id_level ,tbl_masterlevel.nama_level	,tbl_masterusers.id_regional,tbl_masterregional.nama_regional,tbl_masterusers.created_date,tbl_masterusers.created_by,tbl_masterusers.modified_date, tbl_masterusers.modified_by');
		$this->db->join('tbl_masterlevel','tbl_masterlevel.id_level=tbl_masterusers.id_level');
		$this->db->join('tbl_masterregional','tbl_masterregional.id_regional=tbl_masterusers.id_regional');
		$query=$this->db->get($this->tbl_masteruser);
		return $query->result();
	}


	public function add_data_user($data)
	{
		$this->db->insert($this->tbl_masteruser, $data);
		return $this->db->insert_id();
	}


	public function user_update($where, $data)
	{
	    $this->db->update($this->tbl_masteruser, $data, $where);
	    return $this->db->affected_rows();
	}


	public function get_user_by_edit_id($id)
	{
		$this->db->where('id_user',$id);
		$query = $this->db->get($this->tbl_masteruser);
		return $query->row();
	}


	public function deleteuser_by_id($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete($this->tbl_masteruser);
	}





//end mas ter user


//  master level


//end of maser level
	public function delete_by_id($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete($this->tbl_masterkategori);
	}
	public function update_data($id)
	{
		$this->db->where('id_user',$id);
		return $this->db->get($this->tbl_masterkategori)->row();
	}



//master regional

	public function get_all_regional()
	{
		$query=$this->db->get($this->tbl_masterregional);
		return $query->result();
	}

	public function add_data_regional($data)
	{
		$this->db->insert($this->tbl_masterregional, $data);
		return $this->db->insert_id();
	}


	public function regional_update($where, $data)
	{
	    $this->db->update($this->tbl_masterregional, $data, $where);
	    return $this->db->affected_rows();
	}


	public function get_regional_by_edit_id($id)
	{
		$this->db->where('id_regional',$id);
		$query = $this->db->get($this->tbl_masterregional);
		return $query->row();
	}


	public function deleteregional_by_id($id)
	{
		$this->db->where('id_regional',$id);
		$this->db->delete($this->tbl_masterregional);
	}



//end of master regional	








}
