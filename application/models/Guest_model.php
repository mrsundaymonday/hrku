<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guest_model extends CI_Model
{
   //private  $table_guest = "tbl_guest";

    //private $tbl_guest = "tbl_guest";

    var $tbl_guest = "tbl_guest";
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
 

    function getallguest()
    {
        return $this->db->get($this->tbl_guest)->result();
    }
    
    function guest_add($data)
    {
            $this->db->insert($this->tbl_guest,$data);
    }
  


}
