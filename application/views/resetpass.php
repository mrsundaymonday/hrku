<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reset Password Sistem Informasi Dokumen GA</title>
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
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/tsm.ico" />
    <style type="text/css">
      .auth .brand-logo img { width: 310px; }
      .text-purple {color: #a45eff;}
      .text-purple:hover {text-decoration: none;}

    @media only screen and (max-width: 600px) {
      .p-5 { padding: 0.5rem !important;}
      .content-wrapper { padding: 0rem 1.25rem !important;}
      }
      .form-control { border: 1px solid #a5b0cc !important;}
      .form-control-lg { padding: 0rem 0.9rem !important;}
      .modal-body { padding: 0rem 1rem !important;}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img class="img-responsive" src="<?=base_url();?>assets/images/doc_header.png">
                </div>
                <h4><center>Sistem Informasi <br> Dokumen General Affair <br>Reset Password</center></h4>
                 <h6 class="font-weight-light"><center></center></h6> 
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
                 <div id="message" style="color: red;"></div>
            <?php $last=end($this->uri->segments);?>
            <?php echo form_open('changepass/setnew/'.$last); ?>
                  <div class="form-group">  
                   <?php echo form_error('password');?>
                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password" value="<?=set_value('password');?>">
                  </div>
                  <div class="form-group">
                   <?php echo form_error('confpassword');?>
                    <input type="password" name="confpassword" class="form-control form-control-lg" id="confpassword" placeholder="Konfirmasi Password" value="<?=set_value('confpassword');?>">
                  </div>
                  <div class="mt-3">
                     <input type="submit"class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" id="confirm-button" value="Set New">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url();?>assets/js/off-canvas.js"></script>
    <script src="<?=base_url();?>assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url();?>assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>