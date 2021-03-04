 <!-- Google Font: Source Sans Pro -->
 <!-- <link rel ="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<script type="text/javascript" src = "//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script> -->

<style type="text/css">
  .accordion-button{ float: right; z-index: 9999; position: absolute;margin: -45px 92.5%; text-decoration: none; color: #fff; }
    @media screen and (max-width: 600px) {
    .accordion-button{ float: right; z-index: 9999; position: absolute;margin: -45px 84%; text-decoration: none; color: #fff; }
    .salary-table {font-size: 10px !important; color: #696969;}
  }
</style>

 <style type="text/css">
 .row {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
    margin-right: -7.5px !important;
    margin-left: -17.5px !important;
}

.row2 {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
    margin-right: -7.5px !important;
    margin-left: -7.5px !important;
    margin-top: 10.5px !important;
}

.col-sm-3 {
  -ms-flex: 0 0 25% !important;
  flex: 0 0 25% !important;
  max-width: 11% !important;

}

.btn2 {
    box-sizing: border-box;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #eccd24;
    border: 2px solid #64c107;
    border-radius: 0.6em;
    color: #e74c3c;
    cursor: pointer;
    display: flex;
    align-self: center;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1;
    margin: 20px;
    padding: 1.2em 2.8em;
    text-decoration: none;
    text-align: center;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
}

.btn2:hover, .btn2:focus {
  color: #fff;
  outline: 0;
}

.first {
  transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
}
.first:hover {
  box-shadow: 0 0 40px 40px #e74c3c inset;
}

div.dataTables_wrapper div.dataTables_length select 
{
    width: auto;
    display: inline-block;
    font-size: large;
    padding-block: inherit;
}

body:not(.sidebar-mini-md) .content-wrapper, body:not(.sidebar-mini-md) .main-footer, body:not(.sidebar-mini-md) .main-header 
{
    transition: margin-left .3s ease-in-out !important;
    margin-left: 16px !important;
}
</style>

<script>
  function onclickadd()
  {
    $('#add-tab').trigger('click');
    // $('#edit-tab').attr('class', 'disabled');
  }
</script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets_other/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>assets_other/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets_other/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets_other/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets_other/dist/css/adminlte.min.css">
<!-- datatable -->


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
                        <div class="page-header">
                                <h3 class="page-title">
                                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                    <i class="mdi mdi-home"></i>
                                    </span> Welcome, <?=$this->session->userdata('username');?> </h3>
                                <nav aria-label="breadcrumb">
                                    <ul class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                    </li>
                                    </ul>
                                </nav>

                         </div>
          
                        <!-- tes -->
                        <section class="content">
                            <div class="container-fluid">
                            <div class="row2">
                                <div class="col-sm-3">
                                    <button type="button" class="btn2 first" onclick="onclickadd();" >Add Data</button> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="card card-primary card-outline card-tabs">
                                    <div class="card-header p-0 pt-1 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="list-tab" data-toggle="pill" 
                                            href="#list" role="tab" aria-controls="list" aria-selected="true">List Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="add-tab" data-toggle="pill" href="#add" 
                                            role="tab" aria-controls="add" aria-selected="false">Add Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="edit-tab" data-toggle="pill" href="#edit" role="tab" aria-controls="edit" aria-selected="false">Edit Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="report-tab" data-toggle="pill" href="#report" 
                                            role="tab" aria-controls="report" aria-selected="false">Report</a>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-three-tabContent">
                                        <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">

                                                                    <!-- Content Header (Page header) -->
                                                        <!-- Content Header (Page header) -->
                                                        <section class="content-header">
                                                        <div class="container-fluid">
                                                            <div class="row mb-2">
                                                            <div class="col-sm-6">
                                                                <h1>Master Guest</h1>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ol class="breadcrumb float-sm-right">
                                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                                <li class="breadcrumb-item active">DataTables</li>
                                                                </ol>
                                                            </div>
                                                            </div>
                                                        </div><!-- /.container-fluid -->
                                                        </section>

                                                        <!-- Main content -->
                                                        <section class="content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card">
                                                                        <!-- /.card-header -->
                                                                        <div class="card-body">
                                                                            <table id="example1" class="table table-bordered table-striped">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>User</th>
                                                                                <th>Name</th>
                                                                                <th>Password</th>
                                                                                <th>Address</th>
                                                                                <th>HP</th>
                                                                                <th>Phone</th>
                                                                                <th>Email</th>                                                        
                                                                                <th>Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            <?php foreach($guest  as $value) { ?>
                                                                            <tr>
                                                                                <td><?=$value->user; ?></td>
                                                                                <td><?=$value->nama; ?></td>
                                                                                <td><?=$value->password; ?></td>
                                                                                <td><?=$value->alamat; ?></td>
                                                                                <td><?=$value->hp; ?></td>
                                                                                <td><?=$value->telp; ?></td>
                                                                                <td><?=$value->email; ?></td>
                                                                                <td  >
                                                                                <button type="button" class="btn btn-block bg-gradient-primary" onclick="$('#edit-tab').trigger('click')" >
                                                                                    Edit</button>
                                                                                <button type="button" class="btn btn-block bg-gradient-danger">Delete</button>                                                      
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <?php } ?>

                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <th>User</th>
                                                                                <th>Name</th>
                                                                                <th>Password</th>
                                                                                <th>Address</th>
                                                                                <th>HP</th>
                                                                                <th>Phone</th>
                                                                                <th>Email</th>                                                        
                                                                                <th>Action</th>
                                                                            </tr>
                                                                            </tfoot>
                                                                            </table>
                                                                        </div>
                                                                        <!-- /.card-body -->
                                                                    </div>
                                                                    <!-- /.card -->
                                                                </div>
                                                            <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.container-fluid -->
                                                        </section>
                                                        <!-- /.content -->

                                        </div>
                                        <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">
                                                                <!-- Content Wrapper. Contains page content -->
                                                                <!-- Content Header (Page header) -->
                                                                <section class="content-header">
                                                                    <div class="container-fluid">
                                                                    <div class="row mb-2">
                                                                        <div class="col-sm-6">
                                                                        <h1>Master Guest</h1>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                        <ol class="breadcrumb float-sm-right">
                                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                                            <li class="breadcrumb-item active">Master Guest</li>
                                                                        </ol>
                                                                        </div>
                                                                    </div>
                                                                    </div><!-- /.container-fluid -->
                                                                </section>
                                                                <!-- Main content -->
                                                                <form action="<?=base_url('guest/add_guest'); ?>" method="post" enctype="multipart/form-data" >
                                                                    <section class="content">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                        <!-- left column -->
                                                                        <div class="col-md-12">
                                                                        <!-- general form elements -->
                                                                            <!-- general form elements -->
                                                                            <!-- /.card -->
                                                                            <!-- Input addon -->
                                                                            <div class="card card-info">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Input Master Guest</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fab fa-amilia"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Username" name="user">
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                                                </div>
                                                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fab fa-amilia"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Name" name="nama">
                                                                                </div>


                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-house-user"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Address" name="alamat">
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Handphone" name="hp">
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Home Phone" name="telp">
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                </div>
                                                                                <input type="email" class="form-control" placeholder="Email" name="email">
                                                                                </div>
                                                                            <!-- /.row -->
                                                                                <!-- /input-group -->
                                                                                <!-- /input-group -->
                                                                            <!-- /input-group -->
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                            </div>
                                                                            <!-- /.card -->
                                                                            <!-- /.card -->
                                                                            <div class="card card-primary">
                                                                            <!-- /.card-header -->
                                                                            <!-- form start -->
                                                                                <form>
                                                                                <!-- /.card-body -->
                                                                                    <div class="card-footer">
                                                                                    <button type="submit" id="btnsaveadd" class="btn btn-primary" >Submit</button>
                                                                                    <button type="button" id="btncanceladd" class="btn btn-danger">Cancel</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <!-- /.card -->
                                                                            <!-- general form elements -->
                                                                        </div>
                                                                        <!--/.col (left) -->
                                                                        </div>
                                                                        <!-- /.row -->
                                                                    </div><!-- /.container-fluid -->
                                                                    </section>
                                                                <!-- /.content -->
                                                                </form>

                                                                <!-- /.content-wrapper -->
                                        </div>
                                        <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                                                                <!-- Content Wrapper. Contains page content -->
                                                                <!-- Content Header (Page header) -->
                                                                <section class="content-header">
                                                                    <div class="container-fluid">
                                                                    <div class="row mb-2">
                                                                        <div class="col-sm-6">
                                                                        <h1>Master Guest</h1>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                        <ol class="breadcrumb float-sm-right">
                                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                                            <li class="breadcrumb-item active">Master Guest</li>
                                                                        </ol>
                                                                        </div>
                                                                    </div>
                                                                    </div><!-- /.container-fluid -->
                                                                </section>

                                                                <!-- Main content -->
                                                                <section class="content">
                                                                    <div class="container-fluid">
                                                                    <div class="row">
                                                                        <!-- left column -->
                                                                        <div class="col-md-12">
                                                                        <!-- general form elements -->

                                                                        <!-- general form elements -->
                                                                
                                                                        <!-- /.card -->

                                                                        <!-- Input addon -->
                                                                        <div class="card card-info">
                                                                            <div class="card-header">
                                                                            <h3 class="card-title">Input Master Guest</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fab fa-amilia"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Username">
                                                                            </div>

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                                                </div>
                                                                                <input type="password" class="form-control" placeholder="Password">
                                                                            </div>

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fab fa-amilia"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Name">
                                                                            </div>



                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-house-user"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Address">
                                                                            </div>

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Handphone">
                                                                            </div>

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" placeholder="Home Phone">
                                                                            </div>

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                </div>
                                                                                <input type="email" class="form-control" placeholder="Email">
                                                                            </div>

                                                                

                                                                        


                                                                            <!-- /.row -->

                                                                            <!-- /input-group -->


                                                                            <!-- /input-group -->

                                                                
                                                                            <!-- /input-group -->
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                        <!-- /.card -->

                                                                        <!-- /.card -->




                                                                        <div class="card card-primary">

                                                                            <!-- /.card-header -->
                                                                            <!-- form start -->
                                                                            <form>

                                                                            <!-- /.card-body -->

                                                                            <div class="card-footer">
                                                                                <button type="submit" id="btnsaveedit" class="btn btn-primary">Submit</button>
                                                                                <button type="button" id="btncanceledit" class="btn btn-danger">Cancel</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- /.card -->

                                                                        <!-- general form elements -->

                                                                        <!-- /.card -->


                                                                        <!-- /.card -->

                                                                        <!-- /.card -->

                                                                        </div>
                                                                        <!--/.col (left) -->


                                                                    </div>
                                                                    <!-- /.row -->
                                                                    </div><!-- /.container-fluid -->
                                                                </section>
                                                                <!-- /.content -->

                                                                <!-- /.content-wrapper -->
                                        </div>
                                        <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                    </div>
                                </div>

                                </div>


                            

                                
                                <!-- /.card -->
                        
                                <!-- /.card -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                <!-- /.content -->

                        <!-- tes -->

           </div>


