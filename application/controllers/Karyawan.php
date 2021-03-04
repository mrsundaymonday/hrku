<?php
Class Karyawan extends Ci_Controller
{
	Function __construct()
	{
		Parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->helper(array('form', 'url'));
        $this->load->model('Karyawan_model');
        $this->load->library(array('form_validation','pdf'));        
        $this->isLoggedIn(FALSE);
	}

   function save(){
      $data=array(
     		'id'=>'',
        'nama_dept'=>$this->input->post('nama_dept'),
        'kategori'=>$this->input->post('kategori'),
     		'created_by'=>$this->session->userdata('nama'),
     		'created_date'=>date('Y-m-d H:i:s'),
     		'modified_by'=>$this->session->userdata('nama'),
        'modified_date'=>date('Y-m-d H:i:s')
     	);

   	$save = $this->Karyawan_model->add_karyawan($data);
    if($save){
      $this->session->set_flashdata('success', 'Data Karyawan berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('dashboard/barang');
    }else{
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
      //redirect('dashboard/barang');
    }   	
   }


function edit_karyawan($id){
      $data=$this->Karyawan_model->get_departemen_by_edit_id($id);
      echo json_encode($data);
}


   public function update_karyawan()
  {
      $data=array(
            'nama_dept'=>$this->input->post('nama_dept'),
            'kategori'=>$this->input->post('kategori'),
            'modified_by'=>$this->session->userdata('nama'),
            'modified_date'=>date('Y-m-d H:i:s')
         );
    $sukses = $this->Kayawan_model->karyawan_update(array('id' => $this->input->post('id_departemen')), $data);
    if($sukses){
       $this->session->set_flashdata('success', 'Data departemen berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('page');
    }else{
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
     }
  }


  public function delete_karyawan($id){
    $this->Karyawan_model->deletekaryawan_by_id($id);
    echo json_encode(array("status" => TRUE));

  }






    function isLoggedIn(){
    $isLoggedIn = $this->session->userdata('isLoggedIn');
    if(!isset($isLoggedIn) || $isLoggedIn != true){
    //  echo '<scriYou don\'t have permission to access this page. <a href="../login">Login</a>';
      echo "<script>alert('You don\'t have permission to access this page, please login');</script>";
    redirect('login');
    }   
  }



 }