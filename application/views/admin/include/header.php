<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TSM HR-ku</title> 
      <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/vendors/css/vendor.bundle.base.css">


    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/logo.ico" />
    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 

  <style type="text/css">
    .paginate_button{ margin-left: 7px;}  
    #example_filter input { border-radius: 5px; background-color: #fff; float: right; padding-left: 10px; }
    #tbladministrator_filter input { border-radius: 5px; background-color: #fff; float: right; padding-left: 10px; }
    #tblpelapor_filter input { border-radius: 5px; background-color: #fff; float: right; padding-left: 10px; }
   /* #example_filter label { font-size: 18px; color: #606060; display:  }*/
    .card .card-body { padding: 1.5rem 1.5rem !important; }
    .modal-content{font-size: 12px;color: #000;}
    .ui-autocomplete {  z-index: 9999 !important; }
    .form-control{ line-height: 1.5; padding: 7px 10px; background: #f2edf3; }
    select.form-control { color: #0d0a0a;}
    .modal-body{ padding: 25px; }
    .content-wrapper {background: #f7f2f2;padding: 0.5rem 0.7rem !important;}
    textarea.form-control {border: 1px solid #aaa;}
    input.form-control {border: 1px solid #aaa;}
    select.form-control {border: 1px solid #aaa;}
    .jsignature{border: 1px solid #aaa;}
    .img-zoom{ width: 75px !important; padding:1px; transition: transform .2s;}
    .img-zoom:hover { -ms-transform: scale(3.5); /* IE 9 */ -webkit-transform: scale(3.5); /* Safari 3-8 */ transform: scale(3.5);}
    .table{color: #656565 !important;}
    .jSignature{background-color: rgb(180, 175, 181) !important; border: 1px solid #aaa !important;}
    canvas.jSignature { height: 200px !important; }

    .badge{ padding: 0.25rem 0.25rem !important; margin-left: 0.5rem !important; }
    .badge-aktif{ background-color: #b66dff !important; font-size: 10px !important; border-radius: 25px;}
    .badge-warning{ background-color: #b66dff !important; font-size: 10px !important;border-radius: 25px; border: 1px solid #b66dff !important;}
    .badge-expired{ background-color: #b66dff !important; font-size: 10px !important;border-radius: 25px;}
/*    table.dataTable.no-footer { border-bottom: 1px solid #cecece !important;}*/
    table.dataTable tbody th, table.dataTable tbody td { padding: 0px 10px !important; font-size: 13px;}
    .text-secondary, .list-wrapper .remove { color: #a45dff !important; }
    table.dataTable thead th, table.dataTable thead td { padding: 10px 18px;border-bottom: 1px solid #fff !important;}
    table.dataTable.no-footer {border-bottom: 1px solid #fff !important;}

    @media only screen and (min-width: 768px) {
      .navbar .navbar-brand-wrapper .navbar-brand img {height: 75px;width: 150px !important; margin-left: -50px !important;}
      .navbar-brand .brand-logo-mini img{height: 100px !important;width: 500px !important;}
      .sidebar-icon-only .navbar .navbar-brand-wrapper .navbar-brand img {margin-left: 0px !important;}
    }

/*    #example_filter input{ position: sticky; float: left !important; }
    #example_filter { text-align: left !important;}*/
    .dropzone .dz-preview .dz-image img {height: 100px !important;}

    body.modal-open { height: 100vh; overflow-y: hidden;}
    thead input { width: 100%;}
    table.dataTable tbody tr td {
      word-wrap: break-word;
      word-break: break-all;
      }
    .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini img { width: auto !important;}
    .btn-action:hover{ text-decoration: none; color: #b5b5b5 !important; }
 /*Smallscreen*/
    @media screen and (max-width: 600px) {
    body { font-size: 10px;}
    .page-title { font-size: .8rem;}
    .breadcrumb .breadcrumb-item { font-size: 0.7rem; padding-top: 5px;}
    .icon-sm { margin: -4px 4px;}
    .page-title .page-title-icon { width: 30px; height: 30px;}
    .page-title .page-title-icon i {font-size: 12px;}
    .card .card-body { padding: 0.5rem 0.5rem !important; }

.nav-link:hover, .nav-link:focus {background: #f2eade;transition: 0.3s; border-radius: 25px;}
  }


.alert{ font-size: 12px !important; }
.bg-gradient-danger{ background: linear-gradient(to right, #db8f5f, #d9a644) !important;}
.sidebar .nav .nav-item.active > .nav-link .menu-title {color: #898989 !important;}
.menu-title{ margin-left: 10px; margin-right: 10px; }
.nav-link:hover, .nav-link:focus {background: #f2eade;transition: 0.3s; border-radius: 25px;}
.sidebar .nav .nav-item {padding: 0 1.25rem !important;}
.nav-link i {color: #b79494 !important;}
.sidebar .nav .nav-item .nav-link {padding: 0.5rem 0 0.5rem 0 !important;}
.bg-gradient-primary {background: linear-gradient(to right, #db925b, #ee9275) !important;}
.text-primary, .list-wrapper .completed .remove {color: #da9b50 !important;}

.sidebar .nav.sub-menu .nav-item .nav-link::before {
	content: "\F054";
	font-family: "Material Design Icons";
	display: block;
	position: absolute;
	left: -10px !important;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	color: #a2a2a2;
	font-size: .75rem;
}

#form{color: #686868;}
select.form-control { color: #686868 !important;padding: 5px;}
p.txt_info{ color: #686868; font-size: 13px; }

</style>




 }
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="<?=base_url('main');?>"><img src="<?=base_url();?>assets/img/HRku.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="<?=base_url('main');?>"><img src="<?=base_url();?>assets/img/HRku.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
<!--           <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div> -->

          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>