<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_model extends CI_Model
{
   //private  $table_guest = "tbl_guest";

    //private $tbl_guest = "tbl_guest";

    var $tbl_cabang = "tbl_master_cabang";
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
 

    function getallcabang()
    {
        return $this->db->get($this->tbl_cabang)->result();
    }
    
    function guest_add($data)
    {
            $this->db->insert($this->tbl_cabang,$data);
    }
  


}
