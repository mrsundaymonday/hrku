<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct() 
	{   	
   	parent::__construct();		
   	
   		//include APPPATH.'third_party/PHPExcel/PHPExcel.php';
   		require_once APPPATH."/third_party/PHPExcel.php";
		$this->load->helper(array('url','form','file'));	
		$this->load->library(array('upload','form_validation','Pdf'));
		$this->load->model(array('File_model','Guest_model','Master_model','Payroll_model','Karyawan_model','Deduction_model','Addition_model')); 
		//$this->load->library("excel");
		$this->isLoggedIn(FALSE);
		if ($this->session->userdata('password')==$this->config->item('passdef')) {
			redirect('setpass');
		}

	}

	
	public function index()
	{		
		// $current = $this->File_model->get_current();
		// $data['slip']=$this->File_model->get_by_nik($current->periode,$current->tahun);
		$data['content'] = 'admin/dashboard';
        $this->load->view('admin/include/template', $data);	
	}

	// public function index()
	// {		
	// 	$current = $this->File_model->get_current();
	// 	$data['slip']=$this->File_model->get_by_nik($current->periode,$current->tahun);
	// 	$data['content'] = 'admin/payroll';
    //     $this->load->view('admin/include/template', $data);	
	// }
	



	public function history()
	{		
		$data['slip']=$this->File_model->get_by_nik_recap();
		/*print_r($this->db->last_query());
		exit();*/
		$data['content'] = 'admin/history';
        $this->load->view('admin/include/template', $data);	
	}

	public function upload()
	{		
		//$data['kategori_pegawai']=$this->Kategori_pegawai_model->get_data();
		//$data['content'] = 'admin/admhome';
		//$this->load->view('admin/include/template',$data);
		$data['sheet']=$this->File_model->get_data();
		$data['content'] = 'admin/upload';
        $this->load->view('admin/include/template', $data);	
	}
	function truncate(){
		$this->db->truncate('tbl_slip');
		$this->session->set_flashdata('success', 'data donatur dan donasi berhasil dihapus');
		//$data['content'] = 'admin/uploaduser';
       	//$this->load->view('admin/include/template', $data);
		 echo json_encode(array("status" => TRUE));
	}
	
	public function payroll()
	{	
		$data['content'] = 'admin/payroll';
        $this->load->view('admin/include/template', $data);	
	}

	public function process()
	{
		    $config['upload_path'] = './assets/excel/';   
		    $config['allowed_types'] = 'xlsx';
		    $config['max_size']  = '2048';    
		    $config['overwrite'] = true;   
		    $config['file_name'] = 'payroll_'.time();    
		    $this->upload->initialize($config); 
		    // Load konfigurasi uploadnya    
		    if($this->upload->do_upload('file')){ 
		    	$file = $this->upload->data();
		    	$sign=array('id'=>'','signature'=>$this->input->post('signature'));

		    	$data=array(
		    		'id'=>'',
		    		'namafile'=>$file['file_name'],
		    		'uploaded'=>date('Y-m-d H:i:s')
		    	);
		    	$save_file = $this->File_model->save($data);
		    	//$save_signature = $this->File_model->save_signature($sign);

		    	//echo 'success uploaded file '.$file['file_name'].'<br>';
		    	//echo "<a href='".base_url('main')."' class='btn btn-info btn-md'>Go back</a>";

		    	$this->__preview($file['file_name']);				
		    }else{      // Jika gagal :      
		    	$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
		    	return $return;    
		    }

	/*	$data['sheet']=$this->File_model->get_data();
		$this->load->view('fupload',$data);*/
	
	}

	function __preview($namafile){
		$excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('./assets/excel/'.$namafile); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
        $data['sheet'] = $sheet; 
        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
	    $numrow = 1;
	    foreach($sheet as $row){
	      // Cek $numrow apakah lebih dari 1
	      // Artinya karena baris pertama adalah nama-nama kolom
	      // Jadi dilewat saja, tidak usah diimport
	      if($numrow > 1){
	        // Kita push (add) array data ke variabel data
	        $data=array(
	          'id'=>'', // Insert data nis dari kolom A di excel
	          'nik'=>$row['B'], // Insert data nama dari kolom B di excel
	          'nama'=>$row['C'], // Insert data nama dari kolom B di excel
	          'dept'=>$row['D'], // Insert data nama dari kolom B di excel
	          'periode'=>$row['E'],
	          'tahun'=>$row['F'], // Insert data nama dari kolom B di excel
	          'gapok'=>$row['G'], // Insert data nama dari kolom B di excel
	          'tj_transport'=>$row['H'], // Insert data nama dari kolom B di excel
	          'tj_fungsional'=>$row['I'], // Insert data nama dari kolom B di excel
	          'tj_jabatan'=>$row['J'], // Insert data nama dari kolom B di excel
	          'tj_kjk'=>$row['K'], // Insert data nama dari kolom B di excel
	          'lembur'=>$row['L'], // Insert data nama dari kolom B di excel
	          'tj_lain2'=>$row['M'], // Insert data nama dari kolom B di excel
	          'total_penambahan'=>$row['N'], // Insert data nama dari kolom B di excel
	          'bpjs_tk'=>$row['O'], // Insert data nama dari kolom B di excel
	          'bpjs_kesehatan'=>$row['P'], // Insert data nama dari kolom B di excel
	          'koperasi'=>$row['Q'], // Insert data nama dari kolom B di excel
	          'pot_lain2'=>$row['R'], // Insert data nama dari kolom B di excel
	          'pot_kehadiran'=>$row['S'], // Insert data nama dari kolom B di excel
	          'total_pengurang'=>$row['T'], // Insert data nama dari kolom B di excel
	          'total_diterima'=>$row['U'],// Insert data nama dari kolom B di excel
	        );
	      $this->File_model->save_excel($data);
	      }
	      $numrow++; // Tambah 1 setiap kali looping
	    } 
	    redirect('main','refresh');    
	}
	
function pdf($id){	
	$data['sheet']=$this->File_model->get_by_id($id);
//	$data['sign']=$this->File_model->get_sign();
/*	print_r($this->db->last_query());
	exit();*/
	$this->load->view('e-slip',$data);
}


//leo
public function cabang()
{	
	$data['cabang'] = $this->Master_model->get_all_cabang();
	$data['content'] = 'admin/mastercabang';
	$this->load->view('admin/include/template', $data);	
}

public function lokasi()
{	
	$data['cabang'] = $this->Master_model->get_all_lokasi();
	$data['content'] = 'admin/masterlokasi';
	$this->load->view('admin/include/template', $data);	
}
public function grade()
{	
	$data['grade'] = $this->Master_model->get_all_grade();
	$data['content'] = 'admin/mastergrade';
	$this->load->view('admin/include/template', $data);	
}
public function komponen()
{	
	$data['grade'] = $this->Master_model->get_all_grade();
	$data['komponen'] = $this->Master_model->get_all_komponengaji();
	$data['content'] = 'admin/masterkomponen';
	$this->load->view('admin/include/template', $data);	
}
public function deduction()
{	
	$data['deduction'] = $this->Deduction_model->get_all_deduction();
	$data['komponen'] = $this->Master_model->get_komponen_deduction();
	$data['content'] = 'admin/masterdeduction';
	$this->load->view('admin/include/template', $data);	
}
public function addition()
{	
	$data['addition'] = $this->Addition_model->get_all_addition();
	$data['komponen'] = $this->Master_model->get_komponen_addition();
	$data['row'] = $this->Master_model->get_komponen_addition_row();
	$data['content'] = 'admin/masteraddition';
	$this->load->view('admin/include/template', $data);	
}
public function generategaji()
{	
	$data['periode'] = $this->Master_model->getperiode();
	  /*print_r($this->db->last_query());
	    exit();   */
	$data['content'] = 'admin/prosesgaji';
	$this->load->view('admin/include/template', $data);	
}

public function prosespayroll()
{
	   $data=array(
	    'id_masterperiode'=>'',
	    'bulan'=>$this->input->post('bulan'),
	    'tahun'=>$this->input->post('tahun'),
	    'status'=>'1',
	    'created_by'=>$this->session->userdata('username'),
	    'created_date'=>date('Y-m-d H:i:s'),
	    'modified_by'=>$this->session->userdata('username'),
	    'modified_date'=>date('Y-m-d H:i:s')
	    );
	$save = $this->Payroll_model->prosespayroll($data);
   if($save)
   {
     $prepare_add = $this->Addition_model->get_pemasukan($this->input->post('bulan'),$this->input->post('tahun'));
     print_r($this->db->last_query());
     exit();






     $this->session->set_flashdata('success', 'Data Payroll berhasil diproses');
     echo json_encode(array("status" => TRUE));
     //redirect('dashboard/barang');
   } else
   {
     $this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
     echo json_encode(array("status" => FALSE));
     //redirect('dashboard/barang');
   }    
}

public function search_karyawan(){
	 if (isset($_GET['term'])) {
	    $result = $this->Karyawan_model->search_karyawan($_GET['term']);    
	      
	    if (count($result) > 0) {
	      foreach ($result as $row)
	          $arr_result[] = array(
	                'label'         => $row->nama,
	                'description'   => $row->id_karyawan
	               );
	          echo json_encode($arr_result);
	     }
	 } 
}

function save_deduction(){
		for ($i=0; $i <count($this->input->post('jumlah')) ; $i++) { 		
			$data=array( 
					'id_pengeluaran'=>'',
					'id_masterkaryawan'=>$this->input->post('id_karyawan'),
					'id_komponen_pengurang'=> $this->input->post('id_komponengaji')[$i],
					'jumlah_pengurang'=> $this->input->post('jumlah')[$i],
					'bulan'=> $this->input->post('bulan'),
					'tahun'=> $this->input->post('tahun'),
					'created_by'=>$this->session->userdata('username'),
			     	'created_date'=>date('Y-m-d H:i:s'),
			     	'modified_by'=>$this->session->userdata('username'),
			      	'modified_date'=>date('Y-m-d H:i:s')
				);	
			$this->Deduction_model->add_data_deduction($data);
			$this->session->set_flashdata('success','Data berhasil ditambahkan atau diubah');				
			}
			echo json_encode(array("status" => TRUE));
		}

function save_addition(){
		for ($i=0; $i <count($this->input->post('jumlah')) ; $i++) { 		
			$data=array( 
					'id_pemasukan'=>'',
					'id_masterkaryawan'=>$this->input->post('id_karyawan'),
					'id_komponenpenambah'=> $this->input->post('id_komponengaji')[$i],
					'jumlah_penambah'=> $this->input->post('jumlah')[$i],
					'bulan'=> $this->input->post('bulan'),
					'tahun'=> $this->input->post('tahun'),
					'created_by'=>$this->session->userdata('username'),
			     	'created_date'=>date('Y-m-d H:i:s'),
			     	'modified_by'=>$this->session->userdata('username'),
			      	'modified_date'=>date('Y-m-d H:i:s')
				);	
			$this->Addition_model->add_data_addition($data);
			}
			$this->session->set_flashdata('success','Data berhasil ditambahkan atau diubah');				
			echo json_encode(array("status" => TRUE));
		}


public function biodata()
{	
	$data['guest'] = $this->Guest_model->getallguest();
	$data['content'] = 'admin/biodata3';
	$this->load->view('admin/include/template', $data);	
}

public function karyawan()
{	
	$data['karyawan'] = $this->Master_model->get_all_karyawan();
	$data['content'] = 'admin/masterkaryawan';
	$this->load->view('admin/include/template', $data);	
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
