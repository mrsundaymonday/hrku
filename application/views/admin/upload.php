      <style type="text/css">
        table.dataTable, table.dataTable th, table.dataTable td {font-size: 10px;}
      </style>
      <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
             <!--  <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
                  <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div> -->
            </div>
<!--             <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div> -->
            <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?=base_url();?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <p class="font-weight-normal mb-3"> <h4>Welcome <?=$this->session->userdata('username');?></h4></p>
                      <!-- <i class="mdi mdi-chart-line mdi-24px float-right"></i> -->                      
                  </div>
                </div>
              </div>          
            </div>
            <div class="row">
              <div class="col-md-12">
                        <div class="message" style="margin-top: 30px;">
                      <?php if($this->session->flashdata('success')){ ?>       
                                  <div class="alert alert-success">
                                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                                      <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                  </div>
                                  <?php }elseif($this->session->flashdata('error')){?>
                                  <div class="alert alert-danger">
                                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                                      <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                  </div>
                      <?php }?>        
                    </div>
              </div>
              <div class="col-md-12 stretch-card grid-margin">

                <div class="myform">
                  <?php $parameter = array('id'=>'form','class'=>'form-horizontal','enctype'=>'multipart/form-data');?>
                  <?=form_open_multipart('main/process',$parameter);?>      
                      <p>Silahkan upload file excel data payroll yang mau diproses</p>
                       <div class="form-group">
                          <label>File</label>
                          <input type="file" name="file" class="form-control btn-get-started" required>
                        </div>
                      <input type="submit" name="process" id="process" value="Process" class="btn bg-gradient-primary btn-sm" style="float: right;">
                  </form>
                <p style="color: #535353;">Silahkan hapus semua data terlebih dahulu</p><br>
                <a href="#" class="btn btn-md btn-primary cleardata">Clear data</a>
                <p style="color: red; font-size: 10px;">** note: data slip akan dihapus</p>
               </div>
              </div>
            </div>
            <!-- end row -->
              <h3>Result</h3>
              <div id="btn-place"></div>
            <hr>
            <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="table-responsive">
                <table class="table" id="example">
                  <thead>
                    <tr>
                    <th>PDF</th>
                    <th>ID</th>    
                    <th>NIK</th>    
                    <th>NAMA</th>  
                    <th>DEPT</th>  
                    <th>PERIODE</th>
                    <th>TAHUN</th>  
                    <th>GAPOK</th>  
                    <th>TRANSPORT</th>  
                    <th>FUNGSIONAL</th>  
                    <th>JABATAN</th>  
                    <th>KJK</th>  
                    <th>LEMBUR</th>  
                    <th>TUNJ.LAIN-LAIN</th>  
                    <th>BPJS TK</th>  
                    <th>BPJS KESEHATAN</th>  
                    <th>KOPERASI</th>  
                    <th>POT.LAIN-LAIN</th>   
                    <th>POT.KEHADIRAN</th>  
                    <th>TOTAL PENAMBAHAN</th>
                    <th>TOTAL PENGURANG</th>
                    <th>TOTAL DITERIMA</th>
            </tr>
          </thead>
        <tbody>
                  <tr> 

                  <?php  
                  if(!empty($sheet)){ 
                  // Jika data pada database tidak sama dengan empty (alias ada datanya)    
                    foreach($sheet as $value){ 
                    // Lakukan looping pada variabel siswa dari controller      
                        echo "<tr>";   
                        echo "<td><a href='".base_url()."main/pdf/".$value->id."'><i class='mdi mdi-file-pdf-box' style='font-size:35px;'></i></a></td>";
                        echo "<td>".$value->id."</td>";     
                        echo "<td>".$value->nik."</td>";      
                        echo "<td>".$value->nama."</td>";        
                        echo "<td>".$value->dept."</td>";        
                        echo "<td>".$value->periode."</td>";     
                        echo "<td>".$value->tahun."</td>";        
                        echo "<td>".number_format($value->gapok)."</td>";        
                        echo "<td>".number_format($value->tj_transport)."</td>";        
                        echo "<td>".number_format($value->tj_fungsional)."</td>";        
                        echo "<td>".number_format($value->tj_jabatan)."</td>";        
                        echo "<td>".number_format($value->tj_kjk)."</td>";        
                        echo "<td>".number_format($value->lembur)."</td>";        
                        echo "<td>".number_format($value->tj_lain2)."</td>";        
                        echo "<td>".number_format($value->bpjs_tk)."</td>";       
                        echo "<td>".number_format($value->bpjs_kesehatan)."</td>";       
                        echo "<td>".number_format($value->koperasi)."</td>";       
                        echo "<td>".number_format($value->pot_lain2)."</td>";       
                        echo "<td>".number_format($value->pot_kehadiran)."</td>";       
                        echo "<td>".number_format($value->total_penambahan)."</td>";        
                        echo "<td>".number_format($value->total_pengurang)."</td>";        
                        echo "<td>".number_format($value->total_diterima)."</td>";        
                        echo "</tr>";    
                      }  
                    }else{ // Jika data tidak ada    
                      echo "<tr><td colspan='3'>Data tidak ada</td></tr>";  
                    }  ?>  
                  </tbody>
              </table>
            </div>
          </div>
        </div>

</div>

<script type="text/javascript">
      $(document).ready(function(){
      $(".cleardata").click(function(event){
         swal({
            title: "Yakin akan menghapus data slip?",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "Ya",
            confirmButtonColor: "#446bfd "
          }, 
         function(isConfirm){ 
            if (isConfirm) {       
              $(".confirm").attr("disabled", true);
              $.ajax({
                  type: "post",
                  url : "<?php echo site_url('main/truncate')?>/",
                  dataType: "JSON",
                  success: function(data) { }
                }).done(function(data) {
                    swal({
                        title: "Berhasil", 
                        text: "data berhasil dihapus", 
                        type: "success"
                    },function() {
                        window.location.href = "<?php echo site_url('main/upload')?>"
                    });
                }).error(function(data) {
                    swal({
                        title: "Error", 
                        text: "Proses hapus data gagal", 
                        type: "error"
                    },function() {
                        window.location.href = "<?php echo site_url('main/upload')?>"
                      });
                    
                  //swal("Oops", "Gagal koneksi ke server!", "error");
                });
            }/* else {     
              swal("Cancelled", "Pengajuan dibatalkan");
                 } */
            });
          //return false;
        event.preventDefault();
      });
    });
</script>