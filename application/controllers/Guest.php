<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("guest_model");
        $this->load->library('form_validation');
        // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }    

	// public function index()
	// {
    //     $this->load->view('view_login');
	// 	// $this->load->view('welcome_message');
    //     //echo 'awal';
    // }


        public function list_guest()
        {
            $data["guest"] = $this->guest_model->getallguest();
            $this->load->view('include/header');
            $this->load->view('include/navbar');
           $this->load->view("view_tabnavigasi2",$data);
           $this->load->view('include/footer');
        }



        public function add_guest()
        {
                $data = array(
                        'id' => '' ,
                        'user' => $this->input->post('user') ,
                        'nama' => $this->input->post('nama') ,
                        'password' => md5($this->input->post('password')) ,                         
                        'alamat' =>$this->input->post('alamat') ,                         
                        'hp' =>$this->input->post('alamat') ,            
                        'telp' => $this->input->post('telp') ,            
                        'email' => $this->input->post('email')                                     
                );
                $this->guest_model->guest_add($data);


        }


        public function add_departement()
		{
			$data = array(
					'kode_departement' =>'',
					'nama_departement' => $this->input->post('nama_departement'),
					'link_kode' => $this->input->post('link_kode')					
				);
			$insert = $this->Departement_model->Departement_add($data);
			echo json_encode(array("status" => TRUE));
		}



}
