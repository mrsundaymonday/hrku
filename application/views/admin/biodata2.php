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
                </span> Data Kategori </h4>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Dashboard / Master / Kategori <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
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



                    <button type="button" class="btn btn-gradient-dark btn-fw" onclick="add_kategori()">Add Kategori</button>
                      <!-- Modal -->

                          <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-md">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Add data Kategori</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form" class="form-horizontal">
                                          <div class="form-group">
                                            <label>Kategori</label>
                                            <input type="hidden" name="id_kategori">   
                                             <input type="text" name="nama_kategori" class="form-control" required="">
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
  

                      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                                      </button>
                                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>

                                  </div>
                                  <div class="modal-body">
                                      <div role="tabpanel">
                                          <!-- Nav tabs -->
                                          <ul class="nav nav-tabs" role="tablist">
                                              <li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Upload</a>

                                              </li>
                                              <li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Browse</a>

                                              </li>
                                          </ul>
                                          <!-- Tab panes -->
                                          <div class="tab-content">
                                              <div role="tabpanel" class="tab-pane active" id="uploadTab">upload Tab</div>
                                              <div role="tabpanel" class="tab-pane" id="browseTab">browseTab</div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary save">Save changes</button>
                                  </div>
                              </div>
                          </div>
                      </div>
  




                  <h4 class="card-title"></h4>
                    <div class="table-responsive">
                      <table class="table" id="example">
                        <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
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
                           if (empty($kategori)) { ?>
                              <tr>
                                <th scope="row" colspan="9">Tidak ada daftar kategori</th>
                              </tr>
                          <?php } else{
                                  foreach ($kategori as $value) {?>
                                    <tr>
                                      <td><?=$no;?></td>
                                      <td><?=$value->nama_kategori;?></td>
                                      <td><?=$value->created_by;?></td>
                                      <td><?=date('D, d F Y',strtotime($value->created_date));?></td>
                                      <td><?=$value->modified_by;?></td>
                                      <td><?=date('D, d F Y',strtotime($value->modified_date));?></td>
                                      <td>
                                         <a href="#" style="color: #5e7188; font-size: 40px;" id="btnedit" onclick="edit_kategori(<?=$value->id_kategori;?>)"><i class="mdi mdi-pencil-box-outline"></i></a>
                                      </td>
                                      <td>
                                          <a href="#" style="color: #5e7188; font-size: 40px;" id="btnupdate" onclick="delete_kategori(<?=$value->id_kategori;?>)"><i class="mdi mdi-trash-can"></i></a>
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

    function add_kategori()
    {
     // alert('test');
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#additional').show();
      $('.modal-title').text('Master Kategori'); // Set title to Bootstrap modal title
      $('#myModal2').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }


      $("#form").submit(function(event) {
          var url;
          if(save_method == 'add'){
              url = "<?php echo site_url('master/save_kategori')?>";
          }else{
              url = "<?php echo site_url('master/update_kategori')?>";
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
                          window.location.href = "<?php echo site_url('master/kategori')?>"
                      });
                  }).error(function(data) {
                      swal({
                          title: "Error", 
                          text: "Proses penyimpanan data gagal", 
                          type: "error"
                      },function() {
                          window.location.href = "<?php echo site_url('master/kategori')?>"
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
   

    function edit_kategori(id){
      $('.modal-title').text('Edit Master Kategori'); // Set title to Bootstrap modal title
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('master/edit_kategori/')?>" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              $('[name="id_kategori"]').val(data.id_kategori);
              $('[name="nama_kategori"]').val(data.nama_kategori);
              $('#myModal').modal('show'); // show bootstrap modal when complete loaded
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
      });
    }


    function delete_kategori(id)
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
            url : "<?php echo site_url('master/delete_kategori')?>/"+id,
            dataType: "JSON",
            success: function(data) { }
          }).done(function(data) {
              swal({
                  title: "Berhasil", 
                  text: "data berhasil dihapus", 
                  type: "success"
              },function() {
                  window.location.href = "<?php echo site_url('master/kategori')?>"
              });
          }).error(function(data) {
              swal({
                  title: "Error", 
                  text: "Proses penyimpanan data gagal", 
                  type: "error"
              },function() {
                  window.location.href = "<?php echo site_url('master/kategori')?>"
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
function addImage(pk) {
    alert("addImage: " + pk);
}

$('#myModal .save').click(function (e) {
    e.preventDefault();
    addImage(5);
    $('#myModal').modal('hide');
    //$(this).tab('show')
    return false;
})

</script>


