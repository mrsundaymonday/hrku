<?php
Class Master2  extends CI_Controller
{

	function __construct() 
	{   	
    parent::__construct();
		$this->load->helper(array('url','form','file','html'));	
		$this->load->model(array('Master_model'));
		$this->isLoggedIn(FALSE);
	}


function cabang()
	{
	    	$data['cabang'] = $this->Master_model->get_all_cabang();
        $data['content'] = 'admin/mastercabang';
       $this->load->view('admin/include/template', $data); 
   }


   function lokasi()
   {
         $data['lokasi'] = $this->Master_model->get_all_lokasi();
         $data['cabang'] = $this->Master_model->get_all_cabang();
        //  print_r($this->db->last_query());
        //  exit();
         $data['content'] = 'admin/masterlokasi';
        $this->load->view('admin/include/template', $data); 
    }   


    function departemen()
    {
          $data['departemen'] = $this->Master_model->get_all_departemen();
         //  print_r($this->db->last_query());
         //  exit();
          $data['content'] = 'admin/masterdepartemen';
         $this->load->view('admin/include/template', $data); 
     }   
 
     function level()
     {
           $data['level'] = $this->Master_model->get_all_level();
          //  print_r($this->db->last_query());
          //  exit();
           $data['content'] = 'admin/masterlevel';
          $this->load->view('admin/include/template', $data); 
      }   
 
      function jabatan()
      {
          $data['departemen'] = $this->Master_model->get_all_departemen();
          $data['level'] = $this->Master_model->get_all_level();
          $data['jabatan'] = $this->Master_model->get_all_jabatan();
          $data['jabatansupervisi'] = $this->Master_model->get_all_jabatan();
          $data['content'] = 'admin/masterjabatan';
           $this->load->view('admin/include/template', $data); 
       } 

       function shift()
       {
        $data['shift'] = $this->Master_model->get_all_shift();
        //  print_r($this->db->last_query());
        //  exit();
         $data['content'] = 'admin/mastershift';
        $this->load->view('admin/include/template', $data); 

        } 

        function shift2()
        {
         $data['shift'] = $this->Master_model->get_all_shift();
          // print_r($this->db->last_query());
          // exit();
          $data['content'] = 'admin/mastershift2';
         $this->load->view('admin/include/template', $data); 
 
         } 


//cabang CRUD//
   function save_cabang()
   {
      $data=array(
     	'id_cabang'=>'',
	    'nama_cabang'=>$this->input->post('nama_cabang'),
     	'created_by'=>$this->session->userdata('username'),
     	'created_date'=>date('Y-m-d H:i:s'),
     	'modified_by'=>$this->session->userdata('username'),
      'modified_date'=>date('Y-m-d H:i:s')
     	);

    	$save = $this->Master_model->add_data_cabang($data);

	    if($save)
	    {
	      $this->session->set_flashdata('success', 'Data Cabang berhasil disimpan');
	      echo json_encode(array("status" => TRUE));
	      //redirect('dashboard/barang');
	    } else
	    {
	      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
	      echo json_encode(array("status" => FALSE));
	      //redirect('dashboard/barang');
	    }   	
   }

	function edit_cabang($id)
	{
	      $data=$this->Master_model->get_cabang_by_edit_id($id);
	      echo json_encode($data);
	}


   public function update_cabang()
  {
      $data=array(
            'nama_cabang'=>$this->input->post('nama_cabang'),
            'modified_by'=>$this->session->userdata('username'),
            'modified_date'=>date('Y-m-d H:i:s')
         );
    $sukses = $this->Master_model->kategori_update(array('id_cabang' => $this->input->post('id_cabang')), $data);
    if($sukses)
    {
       $this->session->set_flashdata('success', 'Data Cabang berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('page');
    }
    	else
    {
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
     }
  }

  public function delete_cabang($id)
  {
    $this->Master_model->deletecabang_by_id($id);
    echo json_encode(array("status" => TRUE));

  }


// end CRUD master cabang

// CRUD lokasi
   function save_lokasi()
   {
      $data=array(
     	 	'id_lokasi'=>'',
        'nama_lokasi'=>$this->input->post('nama_lokasi'),
        'id_cabang'=>$this->input->post('cabang'),
        'latitude'=>$this->input->post('latitude'),
        'longitude'=>$this->input->post('longitude'),
        'jarak'=>$this->input->post('jarak'),
        'created_by'=>$this->session->userdata('username'),
     		'created_date'=>date('Y-m-d H:i:s'),
     		'modified_by'=>$this->session->userdata('username'),
        'modified_date'=>date('Y-m-d H:i:s')
     	);

    	$save = $this->Master_model->add_data_lokasi($data);

	    if($save)
	    {
	      $this->session->set_flashdata('success', 'Data Lokasi berhasil disimpan');
	      echo json_encode(array("status" => TRUE));
	      //redirect('dashboard/barang');
	    } else
	    {
	      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
	      echo json_encode(array("status" => FALSE));
	      //redirect('dashboard/barang');
	    }   	
   }

function edit_lokasi($id)
		{
		      $data=$this->Master_model->get_lokasi_by_edit_id($id);
		      echo json_encode($data);
		}


   public function update_lokasi()
  {
      $data=array(
            'nama_lokasi'=>$this->input->post('nama_lokasi'),
            'id_regional'=>$this->input->post('regional'),            
            'modified_by'=>$this->session->userdata('nama'),
            'modified_date'=>date('Y-m-d H:i:s')
         );
    $sukses = $this->Master_model->lokasi_update(array('id_lokasi' => $this->input->post('id_lokasi')), $data);
    if($sukses)
    {
       $this->session->set_flashdata('success', 'Data unit usaha berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('page');
    }
    	else
    {
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
     }
  }

  public function delete_lokasi($id)
  {
    $this->Master_model->deletelokasi_by_id($id);
    echo json_encode(array("status" => TRUE));

  }

// lokasi

//CRUD departemen
function save_departemen()
{
   $data=array(
    'id_departemen'=>'',
   'nama_departemen'=>$this->input->post('nama_departemen'),
    'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
   'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_departemen($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data departemen berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }   	
}

function edit_departemen($id)
{
     $data=$this->Master_model->get_departemen_by_edit_id($id);
     echo json_encode($data);
}

public function update_departemen()
{
   $data=array(
         'nama_departemen'=>$this->input->post('nama_departemen'),
         'modified_by'=>$this->session->userdata('username'),
         'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->departemen_update(array('id_departemen' => $this->input->post('id_departemen')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data departemen berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_departemen($id)
{
 $this->Master_model->deletedepartemen_by_id($id);
 echo json_encode(array("status" => TRUE));

}
//end departemen



//master level
function save_level()
{
   $data=array(
    'id_level'=>'',
   'nama_level'=>$this->input->post('nama_level'),
    'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
   'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_level($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data level berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }    
}

function edit_level($id)
{
     $data=$this->Master_model->get_level_by_edit_id($id);
     echo json_encode($data);
}

public function update_level()
{
   $data=array(
         'nama_level'=>$this->input->post('nama_level'),
         'modified_by'=>$this->session->userdata('username'),
         'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->level_update(array('id_level' => $this->input->post('id_level')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data level berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_level($id)
{
 $this->Master_model->deletelevel_by_id($id);
 echo json_encode(array("status" => TRUE));

}
//end amster CRUD level


//master level
function save_grade()
{
   $data=array(
    'id_grade'=>'',
   'nama_grade'=>$this->input->post('nama_grade'),
    'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
   'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_grade($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data level berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }    
}

function edit_grade($id)
{
     $data=$this->Master_model->get_grade_by_edit_id($id);
     echo json_encode($data);
}

public function update_grade()
{
   $data=array(
         'nama_grade'=>$this->input->post('nama_grade'),
         'modified_by'=>$this->session->userdata('username'),
         'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->grade_update(array('id_grade' => $this->input->post('id_grade')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data grade berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_grade($id)
{
 $this->Master_model->deletegrade_by_id($id);
 echo json_encode(array("status" => TRUE));

}
//end amster CRUD grade
/*komponen*/
function save_komponen()
{
   $data=array(
    'id_komponengaji'=>'',
    'id_komponengrade'=>$this->input->post('idgrade'),
    'nama_komponengaji'=>$this->input->post('nama_komponen'),
    'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
    'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_komponengaji($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data komponen berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }    
}

function edit_komponen($id)
{
     $data=$this->Master_model->get_komponengaji_by_edit_id($id);
     echo json_encode($data);
}

public function update_komponen()
{
   $data=array(
          'id_komponengrade'=>$this->input->post('idgrade'),
          'nama_komponengaji'=>$this->input->post('nama_komponen'),
          'modified_by'=>$this->session->userdata('username'),
          'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->komponengaji_update(array('id_komponengaji' => $this->input->post('id_komponen')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data komponen berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_komponen($id)
{
 $this->Master_model->deletekomponengaji_by_id($id);
 echo json_encode(array("status" => TRUE));

}
/*komponen*/

/*karyawan*/
function save_karyawan()
{
   $data=array(
    'id_karyawan'=>'',
    'nama'=>$this->input->post('nama'),
    'nik'=>$this->input->post('nik'),
    'alamat'=>$this->input->post('alamat'),
    'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
    'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_karyawan($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data karyawan berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }    
}

function edit_karyawan($id)
{
     $data=$this->Master_model->get_karyawan_by_edit_id($id);
     echo json_encode($data);
}

public function update_karyawan()
{
   $data=array(
          'nama'=>$this->input->post('nama'),
          'nik'=>$this->input->post('nik'),
          'alamat'=>$this->input->post('alamat'),
          'modified_by'=>$this->session->userdata('username'),
          'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->karyawan_update(array('id_karyawan' => $this->input->post('id_karyawan')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data karyawan berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_karyawan($id)
{
 $this->Master_model->deletekaryawan_by_id($id);
 echo json_encode(array("status" => TRUE));

}
/*karyawan*/

//CRUD jabatan
function save_jabatan()
{
   $data=array(
    'id_jabatan'=>'',
   'nama_jabatan'=>$this->input->post('nama_jabatan'),
   'id_departemen'=>$this->input->post('departemen'),
   'id_level'=>$this->input->post('level'),
   'id_jabatansupervisi'=>$this->input->post('jabatansupervisi'),
   'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
   'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_jabatan($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data jabatan berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }   	
}

function edit_jabatan($id)
{
     $data=$this->Master_model->get_jabatan_by_edit_id($id);
     echo json_encode($data);
}

public function update_jabatan()
{
   $data=array(
         'nama_jabatan'=>$this->input->post('nama_jabatan'),
         'id_departemen'=>$this->input->post('departemen'),
         'id_level'=>$this->input->post('level'),
         'id_jabatansupervisi'=>$this->input->post('jabatansupervisi'),
         'modified_by'=>$this->session->userdata('username'),
         'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->jabatan_update(array('id_jabatan' => $this->input->post('id_jabatan')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data jabatan berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_jabatan($id)
{
 $this->Master_model->deletejabatan_by_id($id);
 echo json_encode(array("status" => TRUE));

}
//end jabatan



//master shift
function save_shift()
{
   $data=array(
    'id_shift'=>'',
   'nama_shift'=>$this->input->post('nama_shift'),
   'jam_masuk'=>$this->input->post('jam_masuk'),
   'jam_pulang'=>$this->input->post('jam_pulang'),
    'created_by'=>$this->session->userdata('username'),
    'created_date'=>date('Y-m-d H:i:s'),
    'modified_by'=>$this->session->userdata('username'),
   'modified_date'=>date('Y-m-d H:i:s')
    );

   $save = $this->Master_model->add_data_shift($data);

   if($save)
   {
     $this->session->set_flashdata('success', 'Data shift berhasil disimpan');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }   	
}

function edit_shift($id)
{
     $data=$this->Master_model->get_shift_by_edit_id($id);
     echo json_encode($data);
}

public function update_shift()
{
   $data=array(
         'nama_shift'=>$this->input->post('nama_shift'),
         'modified_by'=>$this->session->userdata('username'),
         'modified_date'=>date('Y-m-d H:i:s')
      );
 $sukses = $this->Master_model->shift_update(array('id_shift' => $this->input->post('id_shift')), $data);
 if($sukses)
 {
    $this->session->set_flashdata('success', 'Data shift berhasil disimpan');
   echo json_encode(array("status" => TRUE));
   //redirect('page');
 }
   else
 {
   $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
   echo json_encode(array("status" => FALSE));
  }
}

public function delete_shift($id)
{
 $this->Master_model->deleteshift_by_id($id);
 echo json_encode(array("status" => TRUE));

}
//end amster CRUD shift




//CRUD reminder
	function reminder()
	{
		$data['expired'] = $this->Dokumen_model->get_expired_dok();
		$data['warning'] = $this->Dokumen_model->get_warning_dok();
		$data['active'] = $this->Dokumen_model->get_active_dok();
		$data['kategori'] = $this->Master_model->get_all_kategori();
		$data['reminder'] = $this->Master_model->get_all_reminder();
    $data['content'] = 'admin/master_reminder';
    $this->load->view('admin/include/template', $data); 
   }

 function save_reminder()
   {
      $data=array(
     		 'id_reminder'=>'',
	       'kategori_id'=>$this->input->post('kategori'),
	       'reminder_day'=>$this->input->post('reminder_day')
     	);

    	$save = $this->Master_model->add_data_reminder($data);

	    if($save)
	    {
	      $this->session->set_flashdata('success', 'Data reminder berhasil disimpan');
	      echo json_encode(array("status" => TRUE));
	      //redirect('dashboard/barang');
	    } else
	    {
	      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
	      echo json_encode(array("status" => FALSE));
	      //redirect('dashboard/barang');
	    }   	
   }

function edit_reminder($id)
	{
	      $data=$this->Master_model->get_reminder_by_edit_id($id);
	      echo json_encode($data);
	}

   public function update_reminder()
  {
      $data=array(
            'kategori_id'=>$this->input->post('kategori'),
            'reminder_day'=>$this->input->post('reminder_day')
         );
    $sukses = $this->Master_model->reminder_update(array('id_reminder' => $this->input->post('id_reminder')), $data);
    if($sukses)
    {
       $this->session->set_flashdata('success', 'Data reminder berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('page');
    }
    	else
    {
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
     }
  }

  public function delete_reminder($id)
  {
    $this->Master_model->deletereminder_by_id($id);
    echo json_encode(array("status" => TRUE));

  }

  //user
function user()
  {
    $data['expired'] = $this->Dokumen_model->get_expired_dok();
    $data['warning'] = $this->Dokumen_model->get_warning_dok();
    $data['active'] = $this->Dokumen_model->get_active_dok();
    $data['kategori'] = $this->Master_model->get_all_kategori();
    $data['regional'] = $this->Master_model->get_all_regional();
    $data['level'] = $this->Master_model->get_all_level();
    $data['user'] = $this->Master_model->get_all_user();
    $data['content'] = 'admin/master_user';
    $this->load->view('admin/include/template', $data); 
   }


  function save_user()
   {
      $data=array(
         'id_user'=>'',
          'username'=>$this->input->post('username'),
          'nama'=>$this->input->post('nama'),
          'email_user'=>$this->input->post('email_user'),          
          'password'=>md5($this->input->post('password')),          
          'id_level'=>$this->input->post('level'),          
          'id_regional'=>$this->input->post('regional'),          
          'created_by'=>$this->session->userdata('nama'),
          'created_date'=>date('Y-m-d H:i:s'),
          'modified_by'=>$this->session->userdata('nama'),
          'modified_date'=>date('Y-m-d H:i:s')
      );

      $save = $this->Master_model->add_data_user($data);

      if($save)
      {
        $this->session->set_flashdata('success', 'Data kategori berhasil disimpan');
        echo json_encode(array("status" => TRUE));
        //redirect('dashboard/barang');
      } else
      {
        $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
        echo json_encode(array("status" => FALSE));
        //redirect('dashboard/barang');
      }     
   }

  function edit_user($id)
  {
        $data=$this->Master_model->get_user_by_edit_id($id);
        echo json_encode($data);
  }


   public function update_user()
  {
      $data=array(
            'username'=>$this->input->post('username'),
            'nama'=>$this->input->post('nama'),
            'password'=>md5($this->input->post('password')),                      
            'id_level'=>$this->input->post('level'),
            'id_regional'=>$this->input->post('regional'),
            'modified_by'=>$this->session->userdata('nama'),
            'modified_date'=>date('Y-m-d H:i:s')
         );
    $sukses = $this->Master_model->user_update(array('id_user' => $this->input->post('id_user')), $data);
    if($sukses)
    {
       $this->session->set_flashdata('success', 'Data user berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('page');
    }
      else
    {
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
     }
  }

  public function delete_user($id)
  {
    $this->Master_model->deleteuser_by_id($id);
    echo json_encode(array("status" => TRUE));

  }

//master regional
function regional()
  {
    $data['expired'] = $this->Dokumen_model->get_expired_dok();
    $data['warning'] = $this->Dokumen_model->get_warning_dok();
    $data['active'] = $this->Dokumen_model->get_active_dok();
    $data['regional'] = $this->Master_model->get_all_regional();
    $data['content'] = 'admin/master_regional';
    $this->load->view('admin/include/template', $data); 
   }

   function save_regional()
   {
      $data=array(
         'id_regional'=>'',
          'nama_regional'=>$this->input->post('nama_regional'),
         'created_by'=>$this->session->userdata('nama'),
         'created_date'=>date('Y-m-d H:i:s'),
         'modified_by'=>$this->session->userdata('nama'),
          'modified_date'=>date('Y-m-d H:i:s')
      );

      $save = $this->Master_model->add_data_regional($data);

      if($save)
      {
        $this->session->set_flashdata('success', 'Data regional berhasil disimpan');
        echo json_encode(array("status" => TRUE));
        //redirect('dashboard/barang');
      } else
      {
        $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
        echo json_encode(array("status" => FALSE));
        //redirect('dashboard/barang');
      }     
   }

  function edit_regional($id)
  {
        $data=$this->Master_model->get_regional_by_edit_id($id);
        echo json_encode($data);
  }


   public function update_regional()
  {
      $data=array(
            'nama_regional'=>$this->input->post('nama_regional'),
            'modified_by'=>$this->session->userdata('nama'),
            'modified_date'=>date('Y-m-d H:i:s')
         );
    $sukses = $this->Master_model->regional_update(array('id_regional' => $this->input->post('id_regional')), $data);
    if($sukses)
    {
       $this->session->set_flashdata('success', 'Data regional berhasil disimpan');
      echo json_encode(array("status" => TRUE));
      //redirect('page');
    }
      else
    {
      $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
      echo json_encode(array("status" => FALSE));
     }
  }

  public function delete_regional($id)
  {
    $this->Master_model->deleteregional_by_id($id);
    echo json_encode(array("status" => TRUE));

  }

function isLoggedIn()
            {
                $isLoggedIn = $this->session->userdata('isLoggedIn');
                if(!isset($isLoggedIn) || $isLoggedIn != true)
                {
                    echo "<script>alert('You don\'t have permission to access this page, please login');</script>";
                    redirect('login');
                }		
            }





}

?>