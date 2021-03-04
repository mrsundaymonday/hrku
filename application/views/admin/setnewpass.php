<style type="text/css">
  .error-message{ color: red; font-size: 9px; }
  label{ color: #898989; }
  .swal2-content { color: #898989 !important;font-size: 14px !important;}
  .swal2-styled.swal2-confirm {background-color: #848484 !important;}
</style>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
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
                </span>
              </div>

            </div>
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Welcome, <?=$this->session->userdata('username');?></h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
  
              <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?=base_url();?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Set new password<i class="mdi mdi-cash-100 mdi-24px float-right"></i></h4>
                      <div class="card card-body">
                          <?=form_open('setpass/newpass')?>
                             <div class="form-group">
                              <input type="hidden" name="defpass" value="<?=$this->session->userdata('password');?>">
                                <label for="pass">Password</label>
                                <p class="error-message"><?php echo form_error('password');?></p>
                                <input type="password" class="form-control" id="pass" placeholder="Password" name="password"  value="<?=set_value('password');?>">
                              </div>
                              <div class="form-group">
                                <label for="passconf">Confirm Password</label>
                                <p class="error-message"><?php echo form_error('confpassword');?></p>
                                <input type="password" class="form-control" id="passconf" placeholder="Confirm Password" name="confpassword"  value="<?=set_value('confpassword');?>">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
            </div>
            </div>

</div>
<script src="<?=base_url();?>assets/js/sweetalert2.js"></script>
<script type="text/javascript">
  $("a").click(function (e) {
    if ($('[name="defpass"]').val()=="rahasia") {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Silahkan ubah password anda terlebih dahulu, untuk menjaga keamanan data gaji anda',
        //footer: 'def: '+$('[name="defpass"]').val()
      });
      e.preventDefault();
    }
  });
</script>