  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style type="text/css">
      .ui-autocomplete {  z-index: 9999 !important; }
      .btn i { font-size: 1.5rem !important;}
      .form-group { margin-bottom: 10px !important;}
  </style>

<div class="main-panel">
          <div class="content-wrapper">
            <!-- <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
                  <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div> -->
            

            <div class="page-header">
              <h4 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Data Deduction </h4>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Dashboard / Master / Deduction <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="card card-img-holder text-white">
                  <div class="card-body">

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

                    <button type="button" class="btn btn-gradient-dark btn-fw" onclick="add_deduction()">Add Deduction</button>
                      <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-md">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Add data Deduction</h4>
                                    </div>


                                     <div class="modal-body">
                                        <form action="#" id="form" class="form-horizontal">
                                          <div class="form-group">
                                               <label>Periode</label>
                                               <select name="bulan" class="form-control" required="">
                                                 <option value=""></option>
                                                 <option value="Januari">Januari</option>
                                                 <option value="Februari">Februari</option>
                                                 <option value="Maret">Maret</option>
                                                 <option value="April">April</option>
                                                 <option value="Mei">Mei</option>
                                                 <option value="Juni">Juni</option>
                                                 <option value="Juli">Juli</option>
                                                 <option value="Agustus">Agustus</option>
                                                 <option value="September">September</option>
                                                 <option value="Oktober">Oktober</option>
                                                 <option value="November">November</option>
                                                 <option value="Desember">Desember</option>
                                               </select>                                              
                                            </div>
                                              <div class="form-group">
                                               <label>Tahun</label>
                                                <input type="text" name="tahun" class="form-control" required="">
                                              </div>
                                          <div class="form-group" >
                                              <label for="cari">Search karyawan</label>
                                              <input type="text" id="cari_karyawan" class="form-control" name="cari_karyawan" placeholder="Cari nama" required>
                                              <input type="hidden" id="id_karyawan" name="id_karyawan" required>
                                          </div>
                                          <?php 
                                            $i=1; 
                                            foreach ($komponen as $value): ?>
                                            <div class="form-group" >
                                              <label for="<?=$value->nama_komponengaji;?>"><?=$value->nama_komponengaji;?></label>
                                              <input type="text" id="jumlah[]" class="form-control" name="jumlah[]" placeholder="<?=$value->nama_komponengaji;?>" required onkeypress="return isNumber(event)">
                                              <input type="hidden" name="id_komponengaji[]" value="<?=$value->id_komponengaji;?>">
                                            </div>
                                          <?php 
                                            $i++;
                                           endforeach ?>
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-gradient-dark btn-fw" data-dismiss="modal">Close</button> 
                                      <button type="submit" class="btn btn-gradient-dark btn-fw">Simpan</button>
                                    </div>
                                   </form>
                                  </div>
                                </div>
                          </div>
  


                  <h4 class="card-title"></h4>
                    <div class="table-responsive">
                      <table class="table" id="example">
                        <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Komponen</th>
                                <th>Nama Karyawan</th>
                                <th>Amount</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Modify By</th>
                                <th>Modify Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                          <?php
                            $no=1;
                           if (empty($deduction)) { ?>
                              <tr>
                                <th scodpe="row" colspan="9">Tidak ada daftar deduction</th>
                              </tr>
                          <?php } else{
                                  foreach ($deduction as $value) {?>
                                    <tr>
                                      <td><?=$no;?></td>
                                      <td><?=$value->nama;?></td>
                                      <td><?=$value->nama_komponengaji;?></td>
                                      <td><?=$value->jumlah_pengurang;?></td>
                                      <td><?=$value->bulan;?></td>
                                      <td><?=$value->tahun;?></td>
                                      <td><?=$value->created_by;?></td>
                                      <td><?=date('D, d F Y',strtotime($value->created_date));?></td>
                                      <td><?=$value->modified_by;?></td>
                                      <td><?=date('D, d F Y',strtotime($value->modified_date));?></td>
                                      <td>
                                         <a href="#" style="color: #5e7188; font-size: 40px;" id="btnedit" onclick="edit_deduction(<?=$value->id_pengeluaran;?>)"><i class="mdi mdi-pencil-box-outline"></i></a>
                                      </td>
                                      <td>
                                          <a href="#" style="color: #5e7188; font-size: 40px;" id="btnupdate" onclick="delete_deduction(<?=$value->id_pengeluaran;?>)"><i class="mdi mdi-trash-can"></i></a>
                                     </td>
                                    </tr>
                              <?php 
                                    $no++;
                                    }} ?>
                            </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
          

            </div>    
        
          </div>

<script type="text/javascript">
    var save_method; //for save method string
    var table;

    function add_deduction()
    {
     // alert('test');
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#additional').show();
      $('.modal-title').text('Master Deduction'); // Set title to Bootstrap modal title
      $('#myModal').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }


      $("#form").submit(function(event) {
          var url;
          if(save_method == 'add'){
              url = "<?php echo site_url('main/save_deduction')?>";
          }else{
              url = "<?php echo site_url('main/update_deduction')?>";
          }
         swal({
              title: "Simpan data?", 
              type: "info",
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
                    url : url,
                    data: $('#form').serialize(),
                    dataType: "JSON",
                    success: function(data) { }
                  }).done(function(data) {
                      swal({
                          title: "Berhasil", 
                          text: "Penyimpanan data berhasil", 
                          type: "success"
                      },function() {
                          window.location.href = "<?php echo site_url('main/deduction')?>"
                      });
                  }).error(function(data) {
                      swal({
                          title: "Error", 
                          text: "Proses penyimpanan data gagal", 
                          type: "error"
                      },function() {
                          window.location.href = "<?php echo site_url('main/deduction')?>"
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
   

    function edit_deduction(id){
      $('.modal-title').text('Edit Master Deduction'); // Set title to Bootstrap modal title
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('master2/edit_deduction/')?>" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              $('[name="id_deduction"]').val(data.id_pengeluaran);
              $('[name="nama_deduction"]').val(data.nama_deduction);
              $('#myModal').modal('show'); // show bootstrap modal when complete loaded
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
      });
    }

    function delete_deduction(id)
    {
      swal({
      title: "Hapus data?", 
      type: "info",
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
            url : "<?php echo site_url('master2/delete_deduction')?>/"+id,
            dataType: "JSON",
            success: function(data) { }
          }).done(function(data) {
              swal({
                  title: "Berhasil", 
                  text: "data berhasil dihapus", 
                  type: "success"
              },function() {
                  window.location.href = "<?php echo site_url('master2/Deduction')?>"
              });
          }).error(function(data) {
              swal({
                  title: "Error", 
                  text: "Proses penyimpanan data gagal", 
                  type: "error"
              },function() {
                  window.location.href = "<?php echo site_url('master2/Deduction')?>"
                });
              
            //swal("Oops", "Gagal koneksi ke server!", "error");
          });
      }/* else {     
        swal("Cancelled", "Pengajuan dibatalkan");
           } */
      });
    return false;
    }



</script>

  <script type="text/javascript">
    $.noConflict();
    $("#cari_karyawan").autocomplete({
          source: "<?php echo site_url('main/search_karyawan');?>",     
          select: function (event, ui) {
            $('[name="cari_karyawan"]').val(ui.item.label); 
            $('[name="id_karyawan"]').val(ui.item.description);  
            },
          change: function(event, ui) {
                  if (!ui.item) {
                    $('[name="cari_karyawan"]').val("");  
                    $('[name="id_karyawan"]').val(""); 
                  }
              }
        });

  function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    } 

   var jumlah = document.getElementById('amount');
    jumlah.addEventListener('keyup', function(e){
      jumlah.value = formatRupiah(this.value, 'Rp. ');
    });  
  
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

  function currencyFormat(num) {
      return 'Rp. ' + parseFloat(num).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }


</script>