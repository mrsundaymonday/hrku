<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 class Login_model extends CI_Model 
 {
  function __construct()
    {
      parent :: __construct();
    }

  public function getuser($uname,$pass) {
            $this->db->join('tbl_level','tbl_level.kode_level=tbl_administrator.kode_level');
            $this->db->where('email_employee',$uname);
            $this->db->where('password',md5($pass));
            return $this->db->get('tbl_administrator')->result();
    }
  public function password_update($where, $data) {
          $this->db->update('tbl_administrator', $data, $where);
          return $this->db->affected_rows();
        }



 }




?>