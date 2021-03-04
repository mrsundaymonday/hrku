 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login HR-ku</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
<!--
   
<link rel="icon" href="<?php // echo base_url();?>assets/img/favicon.png" type="image/x-icon">  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
---- Include the above in your HEAD tag --------

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 Include the above in your HEAD tag

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php // echo base_url();?>assets/css/login.css"> -->
<!-- Include the above in your HEAD tag -->
  <style type="text/css">
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
 /* background: #007bff;*/
  /*background: linear-gradient(to right, #0062E6, #33AEFF);*/
/*  background: linear-gradient(to right, #ffedb5, #d0f740)*/
  background: linear-gradient(to right, #fff, #fff);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  /*box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);*/
  color: #fff;
  background: none;
}

.card-signin .card-title {
  margin-bottom: 0.5rem;
  font-weight: 600;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 1rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #b3b3b3;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}



.footer{
  font-size: 10px;
  display: block;
  float: right;
}
.welcome_message{
  font-size: 11px;
  display: block;
  text-align: center;
}

#message{
  font-size: 12px;
  color: red;
  text-align: center;
}
.modal-title {padding: 0rem 1rem; font-size: 15px ! important;}
.modal-body{padding: 0 1rem;}
a{color: #fff !important;}
a:hover{text-decoration: none;}
.forgot{ margin-top: 10px; float: right; }

:root{
  animation: bounce; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s; /* don't forget to set a duration! */
}

.logoeo{ 
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}

.alert{ font-size: 12px !important; }

  </style>
</head>

<body>
  
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
  -->  
  

  <div class="bg"></div>
    <div class="container animate__animated animate__fadeInLeft">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <!-- <h5 class="card-title text-center">Sign In</h5> -->
               <div class="brand-logo">
                   <img class="img-responsive logoeo" src="<?=base_url();?>assets/img/HRku.png">
                  <!-- <h1 style="text-align: center; font-size: 3.5rem;margin-bottom: 0rem !important; color: #69b300; font-weight: bolder; letter-spacing: 0.1em">INSANI</h1> -->
             <!--      <h3 style="color:#5b5b5b; text-align: center;">foundation</h3> -->
                  <p style="text-align: center;color: #b3b3b3; font-size: 12px;">Silahkan login untuk mengelola data</p>
                </div>
                    <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert"></a>
                                <strong>Sukses!</strong> <?php echo $this->session->flashdata('success');?>
                            </div>
                    <?php };?>
                    <?php 
                      if ($this->session->flashdata('error')) {?>
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert"></a>
                                <strong>Maaf!</strong> <?php echo $this->session->flashdata('error');?>
                            </div>
                  <?php };?>
        
              <div id="message"></div>
              <?=form_open('login/verify',array('class'=>'form-signin','id'=>'form'));?>
              <div class="form-label-group">
                <input type="text" id="username" class="form-control" placeholder="Username" required autofocus name="username" value="<?=set_value('username');?>" autocomplete="off">
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control" placeholder="Password" required name="password">
                <label for="password">Password</label>
              </div>

           <!--    <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div> -->
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" style="background-color: #D98D2C; border-color: #fff !important;">Sign in</button>
              <a class="small-text forgot" href="#myModal" data-toggle="modal">Forgot password?</a>
          <!--     <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php // echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>-->
             </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html> 