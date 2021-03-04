<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		Parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
        $this->load->library(array('form_validation','session'));        
	}

	function index(){
		$this->load->view('login');
	}
	
	function verify()
	{
	    header('Access-Control-Allow-Origin: *');
	    $username = addslashes($this->input->post('username'));
	    $password = addslashes($this->input->post('password'));
        $hashed=sha1($password.$this->config->item('binary_salt'));
        $result = $this->User_model->verify($username,$hashed);
        if($result){
            $data=array(
                'username' => $result->username,
                'level' => $result->level,
                'nik' => $result->nik,
                'password' => $password,
                'isLoggedIn'=>TRUE
            );
            $this->session->set_userdata($data); 
            if ($this->session->userdata('password')==$this->config->item('passdef')) {
                redirect('setpass');
             }else{
                redirect('main');
             }

        }else{
            $this->session->set_flashdata('error','username atau password anda salah');
            redirect('login');
        }
    }

    function logout(){        
        $this->session->sess_destroy();
        redirect('login');
    }

   
}