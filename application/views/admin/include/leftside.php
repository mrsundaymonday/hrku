   <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?=base_url();?>assets/images/faces/face.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?=$this->session->userdata('username');?></span>
                </div>
                <i class="mdi mdi-bookmark-check nav-profile-badge"></i>
              </a>
            </li>
        
            <li class="nav-item">                
              <a class="nav-link" href="<?=base_url('main');?>">
                <span class="menu-title">Beranda</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#job-handling" aria-expanded="false" aria-controls="job-handling">
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-email-outline menu-icon"></i>
              </a>
              <div class="collapse" id="job-handling">
                <ul class="nav flex-column sub-menu">
                            <?php if($this->session->userdata('level')=='admin'){?>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/cabang');?>">
                                  <span class="menu-title">Cabang</span>
                                  <i class="mdi mdi-amplifier menu-icon"></i>
                                </a>
                              </li>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/lokasi');?>">
                                  <span class="menu-title">Lokasi</span>
                                  <i class="mdi mdi-home-variant menu-icon"></i>
                                </a>
                              </li>
                       
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/departemen');?>">
                                  <span class="menu-title">Departemen</span>
                                  <i class="mdi mdi-account-circle menu-icon"></i>
                                </a>
                              </li>
              
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/level');?>">
                                  <span class="menu-title">Level</span>
                                  <i class="mdi mdi-account-plus menu-icon"></i>
                                </a>
                              </li>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/jabatan');?>">
                                  <span class="menu-title">Jabatan</span>
                                  <i class="mdi mdi-account-plus menu-icon"></i>
                                </a>
                              </li>                   
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/shift');?>">
                                  <span class="menu-title">Shift</span>
                                  <i class="mdi mdi-account-plus menu-icon"></i>
                                </a>
                              </li>
                
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('master2/shift2');?>">
                                  <span class="menu-title">Shift 2</span>
                                  <i class="mdi mdi-account-plus menu-icon"></i>
                                </a>
                              </li>
    
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/biodata');?>">
                                  <span class="menu-title">Biodata</span>
                                  <i class="mdi mdi-account  menu-icon"></i>
                                </a>
                              </li>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/karyawan');?>">
                                  <span class="menu-title">Karyawan</span>
                                  <i class="mdi mdi-account  menu-icon"></i>
                                </a>
                              </li>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/grade');?>">
                                  <span class="menu-title">Grade</span>
                                  <i class="mdi mdi-account  menu-icon"></i>
                                </a>
                              </li>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/komponen');?>">
                                  <span class="menu-title">Komponen</span>
                                  <i class="mdi mdi-account  menu-icon"></i>
                                </a>
                              </li>     
                               <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/deduction');?>">
                                  <span class="menu-title">Deduction</span>
                                  <i class="mdi mdi-account  menu-icon"></i>
                                </a>
                              </li>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/addition');?>">
                                  <span class="menu-title">Addition</span>
                                  <i class="mdi mdi-account  menu-icon"></i>
                                </a>
                              </li>                         
                            <?php } ?>

                </ul>
              </div>
            </li>



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#transaksi-handling" aria-expanded="false" aria-controls="transaksi-handling">
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-email-outline menu-icon"></i>
              </a>
              <div class="collapse" id="transaksi-handling">
                <ul class="nav flex-column sub-menu">
                            <?php if($this->session->userdata('level')=='admin'){?>
                              <li class="nav-item">                
                                <a class="nav-link" href="<?=base_url('main/generategaji');?>">
                                  <span class="menu-title">Generate Gaji</span>
                                  <i class="mdi mdi-account menu-icon"></i>
                                </a>
                              </li>
                             
                            <?php } ?>

                </ul>
              </div>
            </li>




            
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('login/logout');?>">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-power menu-icon"></i>
              </a>
            </li>
            
          </ul>
        </nav>
        <script type="text/javascript">
          //$("li").removeClass("active").eq(1).addClass("active");
          //$('#nav-item2').removeClass('active');
           $(function(){
              $(".nav-item li.active").removeClass('active');
           });

          $('.nav-item').on('click', 'li', function() {
            $('.nav-item li.active').removeClass('active');
            $(this).addClass('active');
        });
        </script>
     