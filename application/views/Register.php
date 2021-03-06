<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karam Production</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/font-awesome.min.css')?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/simple-line-icons.css')?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/animate.min.css')?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('
asset/css/plugins/icheck/skins/flat/aero.css')?>"/>
  <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url('asset/img/logomi.png')?>">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form action="<?php echo $Action ?>"
method="post" class="form-signin">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">KP</h1>
                  <p class="element-name">Karam Production</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" placehoder="Masukan Nama" name="Nama_Customer" value="<?php echo $Nama_Customer ?>" required>
                    <span class="bar"></span>
                    <label>Nama</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" placehoder="Masukan Username" name="Username" value="<?php echo $Username ?>" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" placehoder="Masukan Password" name="Password" value="<?php echo $Password ?>" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" placehoder="Masukan Email" name="Email" value="<?php echo $Email ?>" class="form-text" required>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" placehoder="Masukan No HP" name="No_HP" value="<?php echo $No_HP ?>" class="form-text" required>
                    <span class="bar"></span>
                    <label>Nomor HP</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" placehoder="Masukan Alamat" name="Alamat" value="<?php echo $Alamat ?>" class="form-text" required>
                    <span class="bar"></span>
                    <label>Alamat</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <select class="form-control" name="Jenis_Kelamin" value="<?php echo $Jenis_Kelamin ?>">
                      <option>Laki Laki</option>
                      <option>Perempuan</option>
                    </select>
                    <span class="bar"></span>
                  </div>
                  <button type="submit" class="btn col-md-12" value="SignUp"><?php echo $Button; ?></button>
                  
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="<?php echo site_url('login'); ?>">Already have an account?</a>
                </div>
                <?php echo $this->session->flashdata('Username'); ?>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url('
')?>asset/js/jquery.min.js<?php echo base_url('
')?>"></script>
      <script src="<?php echo base_url('asset/js/jquery.ui.min.js')?>"></script>
      <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>

      <script src="<?php echo base_url('asset/js/plugins/moment.min.js')?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/icheck.min.js')?>"></script>

      <!-- custom -->
      <script src="<?php echo base_url('asset/js/main.js')?>"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>