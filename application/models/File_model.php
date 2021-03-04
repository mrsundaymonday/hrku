<?php

  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

 class File_model extends CI_Model {
  
  function get_file($file){
    $this->db->where('tbl_file.namafile',$file);
    return $query = $this->db->get('tbl_file')->row();
  }
 
  function get_by_id($id){
    $this->db->where('id',$id);
    return $query = $this->db->get('tbl_slip')->row();
  }
  function get_by_nik($bulan,$tahun){
    $this->db->join('tbl_user','tbl_user.nik=tbl_slip.nik');
    $this->db->where('tbl_slip.nik',$this->session->userdata('nik'));
    $this->db->where('tbl_slip.periode',$bulan);
    $this->db->where('tbl_slip.tahun',$tahun);
    return $query = $this->db->get('tbl_slip')->row();
  }

  // function get_by_nik_recap()
  // {
  //   $this->db->select('tbl_slip.*');
  //   $this->db->join('tbl_user','tbl_user.nik=tbl_slip.nik');
  //   $this->db->where('tbl_slip.nik',$this->session->userdata('nik'));
  //   return $query = $this->db->get('tbl_slip')->result();
  // }

  function get_by_nik_recap()
  {
    return $query = $this->db->query(" SELECT
    id 	 , 
    nik ,	
    nama  ,	
    dept 	 ,
    periode,
    tahun ,
    concat(  convert (tahun ,char(15))  , 
    CASE
        WHEN periode = 'Januari' THEN '01'
        WHEN periode = 'Februari' THEN '02'
        WHEN periode = 'Maret' THEN '03'
        WHEN periode = 'April' THEN '04'
        WHEN periode = 'Mei' THEN '05'
        WHEN periode = 'Juni' THEN '06'
        WHEN periode = 'Juli' THEN '07'
        WHEN periode = 'Agustus' THEN '08'
        WHEN periode = 'September' THEN '09'        
        WHEN periode = 'Oktober' THEN '10'
        WHEN periode = 'November' THEN '11'            
        WHEN periode = 'Desember' THEN '12'                
    END      
          )  as periode2 ,
    gapok 	,
    tj_transport 	 ,
    tj_fungsional 	 ,
    tj_jabatan 	 , 
    tj_kjk 	,
    lembur 	,
    tj_lain2 ,	
    total_penambahan 	 ,
    bpjs_tk 	 ,
    bpjs_kesehatan , 	
    koperasi 	 ,
    pot_lain2 	 ,
    pot_kehadiran ,	
    total_pengurang , 	
    total_diterima 
    FROM tbl_slip
    WHERE tbl_slip.nik = '". $this->session->userdata('nik'). "' order by periode2 desc " )->result();
    // $this->db->join('tbl_user','tbl_user.nik=tbl_slip.nik');
    // $this->db->where('tbl_slip.nik',$this->session->userdata('nik'));
    //return $query = $this->db->get('tbl_slip')->result();
  }




  function get_sign(){
    return $query = $this->db->get('tbl_ttd')->row();
  }
    
  function get_data(){
    return $query = $this->db->get('tbl_slip')->result();
  }
  
  function save($data){
    $this->db->insert('tbl_file', $data);
    return $this->db->insert_id();
  }
  function get_current(){
    return $this->db->query("SELECT distinct periode,tahun,
     CASE periode
       when 'januari' then 1
       when 'februari' then 2
       when 'maret' then 3
       when 'april' then 4
       when 'mei' then 5
       when 'juni' then 6
       when 'juli' then 7
       when 'agustus' then 8
       when 'september' then 9
       when 'oktober' then 10
       when 'november' then 11   
       when 'desember' then 12
       else 'nama periode tidak sesuai'
    END as orderbulan
    FROM `tbl_slip`  
    WHERE tahun=YEAR(CURDATE()) 
ORDER BY orderbulan desc LIMIT 1")->row();
  
  }
  
  function save_excel($data){
    $this->db->insert('tbl_slip', $data);
    return $this->db->insert_id();
  }
  
 }
?>