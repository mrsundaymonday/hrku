<style type="text/css" >
.input-group {
	width: 110px !important ;
	margin-bottom: 10px !important ;
}
</style>

<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets_clock/dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets_clock/assets/css/github.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets_clock/assets/css/github.min.css">

<script type="text/javascript" src="<?=base_url();?>assets_clock/assets/js/jquery.min.js">
</script>





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
                </span> Data Shift </h4>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Dashboard / Master / Shift <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
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

                    <button type="button" class="btn btn-gradient-dark btn-fw" onclick="add_shift()">Add Shift</button>
                      <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-md">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Add data shift</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form" class="form-horizontal">
                                          <div class="form-group">
                                            <label>Nama Shift</label>
                                            <input type="hidden" name="id_shift">   
                                             <input type="text" name="nama_shift" class="form-control" required="">
                                          </div>

                                          <div class="form-group">
                                                <label>Jam Masuk</label>
                                                <div class="input-group clockpicker">
                                                  <input type="text" class="form-control"  name="jam_masuk">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                           </div>

                                           <div class="form-group">
                                                <label>Jam Pulang</label>
                                                <div class="input-group clockpicker">
                                                <input type="text" class="form-control" value="08:00" name="jam_pulang">
                                                  <span class="input-group-addon">
                                                      <span class="glyphicon glyphicon-time"></span>
                                                  </span>
                                                </div>
                                            </div>



                                    </div>



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
                                <th>Nama shift</th>
                                <th>Jam Masuk</th>
                                <th>Jam Pulang</th>
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
                           if (empty($shift)) { ?>
                              <tr>
                                <th scope="row" colspan="9">Tidak ada daftar shift</th>
                              </tr>
                          <?php } else{
                                  foreach ($shift as $value) {?>
                                    <tr>
                                      <td><?=$no;?></td>
                                      <td><?=$value->nama_shift;?></td>
                                      <td><?=$value->jam_masuk;?></td>
                                      <td><?=$value->jam_pulang;?></td>                                      
                                      <td><?=$value->created_by;?></td>
                                      <td><?=date('D, d F Y',strtotime($value->created_date));?></td>
                                      <td><?=$value->modified_by;?></td>
                                      <td><?=date('D, d F Y',strtotime($value->modified_date));?></td>
                                      <td>
                                         <a href="#" style="color: #5e7188; font-size: 40px;" id="btnedit" onclick="edit_shift(<?=$value->id_shift;?>)"><i class="mdi mdi-pencil-box-outline"></i></a>
                                      </td>
                                      <td>
                                          <a href="#" style="color: #5e7188; font-size: 40px;" id="btnupdate" onclick="delete_shift(<?=$value->id_shift;?>)"><i class="mdi mdi-trash-can"></i></a>
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

    function add_shift()
    {
     // alert('test');
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#additional').show();
      $('.modal-title').text('Master shift'); // Set title to Bootstrap modal title
      $('#myModal').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }


      $("#form").submit(function(event) {
          var url;
          if(save_method == 'add'){
              url = "<?php echo site_url('master2/save_shift')?>";
          }else{
              url = "<?php echo site_url('master2/update_shift')?>";
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
                          window.location.href = "<?php echo site_url('master2/shift')?>"
                      });
                  }).error(function(data) {
                      swal({
                          title: "Error", 
                          text: "Proses penyimpanan data gagal", 
                          type: "error"
                      },function() {
                          window.location.href = "<?php echo site_url('master2/shift')?>"
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
   

    function edit_shift(id){
      $('.modal-title').text('Edit Master shift'); // Set title to Bootstrap modal title
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('master2/edit_shift/')?>" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              $('[name="id_shift"]').val(data.id_shift);
              $('[name="nama_shift"]').val(data.nama_shift);
              $('#myModal').modal('show'); // show bootstrap modal when complete loaded
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
      });
    }

    function delete_shift(id)
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
            url : "<?php echo site_url('master2/delete_shift')?>/"+id,
            dataType: "JSON",
            success: function(data) { }
          }).done(function(data) {
              swal({
                  title: "Berhasil", 
                  text: "data berhasil dihapus", 
                  type: "success"
              },function() {
                  window.location.href = "<?php echo site_url('master2/shift')?>"
              });
          }).error(function(data) {
              swal({
                  title: "Error", 
                  text: "Proses penyimpanan data gagal", 
                  type: "error"
              },function() {
                  window.location.href = "<?php echo site_url('master2/shift')?>"
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

<script type="text/javascript" src="<?=base_url();?>assets_clock/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets_clock/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets_clock/dist/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript">

$('.clockpicker').clockpicker({
           placement: 'top',
            align: 'left',
            donetext: 'Done'
})
	.find('input').change(function(){
		console.log(this.value);
	});


// var input = $('#single-input').clockpicker({
// 	placement: 'bottom',
// 	align: 'left',
// 	autoclose: true,
// 	'default': 'now'
// });



// $('.clockpicker-with-callbacks').clockpicker({
// 		donetext: 'Done',
// 		init: function() { 
// 			console.log("colorpicker initiated");
// 		},
// 		beforeShow: function() {
// 			console.log("before show");
// 		},
// 		afterShow: function() {
// 			console.log("after show");
// 		},
// 		beforeHide: function() {
// 			console.log("before hide");
// 		},
// 		afterHide: function() {
// 			console.log("after hide");
// 		},
// 		beforeHourSelect: function() {
// 			console.log("before hour selected");
// 		},
// 		afterHourSelect: function() {
// 			console.log("after hour selected");
// 		},
// 		beforeDone: function() {
// 			console.log("before done");
// 		},
// 		afterDone: function() {
// 			console.log("after done");
// 		}
// 	})

// 	.find('input').change(function(){
// 		console.log(this.value);
// 	});

// // Manually toggle to the minutes view
// $('#check-minutes').click(function(e){
// 	// Have to stop propagation here
// 	e.stopPropagation();
// 	input.clockpicker('show')
// 			.clockpicker('toggleView', 'minutes');
// });

// if (/mobile/i.test(navigator.userAgent)) {
// 	$('input').prop('readOnly', true);
// }

        // $('.clockpicker').clockpicker({
        //     placement: 'top',
        //     align: 'left',
        //     donetext: 'Done'
        // });

</script>

<!-- <script type="text/javascript" src="<?=base_url();?>
assets_clock/assets/js/highlight.min.js"></script> -->

<!-- <script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script> -->


