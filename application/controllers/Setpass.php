<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setpass extends CI_Controller {
	function __construct() {   	
   	parent::__construct();		
   	
   		//include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		$this->load->helper(array('url','form','file'));	
		$this->load->library(array('upload','form_validation','Pdf'));
		$this->load->model(array('User_model'));
		//$this->load->library("excel");
		$this->isLoggedIn(FALSE);		
	}

	
	public function index()
	{		
		$data['content'] = 'admin/setnewpass';
        $this->load->view('admin/include/template', $data);	
	}

	function newpass(){
		$this->form_validation->set_error_delimiters('<div class="error" style="font-size:12px;color:red;">','</div>');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confpassword', 'Password Confirmation', 'trim|required|matches[password]');
        if ($this->form_validation->run() == FALSE)
          {	  
			$data['content'] = 'admin/setnewpass';
	    	$this->load->view('admin/include/template', $data); 
		   }else{

        	$hashed=sha1($this->input->post('password').$this->config->item('binary_salt'));
           	$data=array('password'=>$hashed);
		    $setpass = $this->User_model->update_pass(array('nik' => $this->session->userdata('nik')), $data);
		   /* print_r($this->db->last_query());
		    exit();*/
		    if($setpass)
		    {
	        	$this->session->set_flashdata('success','password berhasil dirubah, silahkan login');
	        	$session_data = array(
	        		'username' => $this->session->userdata('username'),
	                'level' => $this->session->userdata('level'),
	                'nik' => $this->session->userdata('nik'),
	                'password' => $this->input->post('password'),
	                'isLoggedIn'=>TRUE
	            );
				
				$this->session->set_userdata($session_data);
				$data['content'] = 'admin/setnewpass';
	    		$this->load->view('admin/include/template', $data); 
			   
		    }else
		    {
		      	$this->session->set_flashdata('error', 'terjadi kesalahan saat proses ubah data');
		      	$data['content'] = 'admin/setnewpass';
	    		$this->load->view('admin/include/template', $data); 
		      }		
          }

	}

	
function isLoggedIn(){
		$isLoggedIn = $this->session->userdata('isLoggedIn');
		if(!isset($isLoggedIn) || $isLoggedIn != true)
		{
	   	$this->session->set_flashdata('error','You dont have permission to access previous page, please login here..');
		redirect('login');
		}		
	}

}
