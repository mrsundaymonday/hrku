<style type="text/css">
  .accordion-button{ float: right; z-index: 9999; position: absolute;margin: -45px 92.5%; text-decoration: none; color: #fff; }
    @media screen and (max-width: 600px) {
    .accordion-button{ float: right; z-index: 9999; position: absolute;margin: -45px 84%; text-decoration: none; color: #fff; }
    .salary-table {font-size: 10px !important; color: #696969;}
  }
  .salary-table {font-size: 13px; color: #696969;}
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
            

          <?php if (empty($slip)) { ?>
            <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                  <img src="<?=base_url();?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">E-slip tidak tersedia<i class="mdi mdi-cash-100 mdi-24px float-right"></i></h4>
                  </div>                
                </div>
              </div>
            </div>
          <?php }else{
           /* print_r($this->db->last_query());
            exit();*/

              foreach ($slip as $value) { ?>
  
              <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?=base_url();?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">E-Slip <?=$value->periode;?> <?=$value->tahun;?><i class="mdi mdi-cash-100 mdi-24px float-right"></i></h4>
                      <p></p>
                      <p><?=$value->nama;?></p>
                      <h1>Rp. <?=number_format($value->total_diterima);?>,-</b></h1>
                      <small>Total pendapatan yang diterima</small>
                     <p>
                      <a class="accordion-button" data-toggle="collapse" href="#collapseExample<?=$value->id;?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                       <i class="mdi mdi-arrow-down mdi-24px float-right"></i>
                      </a>
                    </p>
                    <div class="collapse" id="collapseExample<?=$value->id;?>">
                      <div class="card card-body">
                        <table class="salary-table">
                              <tbody>
                                <tr>
                                  <td width="150px">NIK</td>
                                  <td width="200px">: <?=$value->nik;?></td>
                                  <td width="150px"></td>
                                  <td width="270px"><b> <?=$value->periode;?> - <?=$value->tahun;?></b> </td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>NAMA</td>
                                  <td>: <?=$value->nama;?></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>DEPARTMENT</td>
                                  <td>: <?=$value->dept;?></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td style="padding-top:10px;"><u>Pendapatan: </u></td>
                                  <td></td>
                                  <td><u>Pengurang: </u></td>
                                  <td></td>
                                </tr>

                                <tr>
                                  <td>Gaji pokok</td>
                                  <td>: Rp. <?=number_format($value->gapok);?></td>
                                  <td>BPJS TK</td>
                                  <td>: Rp. <?=number_format($value->bpjs_tk);?></td>
                                </tr>
                                <tr>
                                  <td>Tunj. Transport</td>
                                  <td>: Rp. <?=number_format($value->tj_transport);?></td>
                                  <td>BPJS Kesehatan</td>
                                  <td>: Rp. <?=number_format($value->bpjs_kesehatan);?></td>
                                </tr>
                                <tr>
                                  <td>Tunj. Fungsional</td>
                                  <td>: Rp. <?=number_format($value->tj_fungsional);?></td>
                                  <td>Koperasi</td>
                                  <td>: Rp. <?=number_format($value->koperasi);?></td>
                                </tr>
                                <tr>
                                  <td>Tunj. Jabatan</td>
                                  <td>: Rp. <?=number_format($value->tj_jabatan);?></td>
                                  <td>Pot. Lain-lain (Gaji)</td>
                                  <td>: Rp. <?=number_format($value->pot_lain2);?></td>
                                </tr>
                                <tr>
                                  <td>Tunj. KJK</td>
                                  <td>: Rp. <?=number_format($value->tj_kjk);?></td>
                                  <td>Pot. Kehadiran</td>
                                  <td>: Rp. <?=number_format($value->pot_kehadiran);?></td>
                                </tr>
                                <tr>
                                  <td>Lembur</td>
                                  <td>: Rp. <?=number_format($value->lembur);?></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>T.Lain-lain</td>
                                  <td>: Rp. <?=number_format($value->tj_lain2);?></td>
                                  <td>Total Pengurang</td>
                                  <td>: Rp. <?=number_format($value->total_pengurang);?></td>
                                </tr>

                                <tr>
                                  <td><b>Total Penambahan</b></td>
                                  <td><b>: Rp. <?=number_format($value->total_penambahan);?></b></td>
                                  <td><b>Total yang diterima</b></td>
                                  <td><b>: Rp. <?=number_format($value->total_diterima);?></b></td>
                                </tr>
                              </tbody>
                            </table>
                      </div>
                    </div>

                  </div>
              </div>
            </div>
            </div>
      <?php } } ?>

</div>