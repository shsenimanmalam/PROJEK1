<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Css style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">


    <!-- Data tables -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid" id="header" style="height: 80px"> <!--Awal Panel Admin -->
      <div class="row">

        <div class="col-md-3" style="padding-top: 18px;">
          <!-- <img src="<?php echo base_url('assets/img/aaa.jpeg')?>"> -->
          <h1 id="h1"><b>Panel Kepala Sekolah</b></h1>
        </div>

        <div class="col-md-9" id="kanann">
          <img src="<?php echo base_url('assets/img/aaa.jpeg')?>">
          <h1 id="h3">SMK Ma'arif 1 Kalirejo Lampung Tengah</h1>
        </div>

      </div>
    </div> <!--Akhir Panel Admin -->

    <div class="container-fluid" style="margin-top: 8px;"> <!-- Awal sidebar dan Content -->
      <div class="row"> <!-- awal row sidebar dan content -->

        <div class="col-md-3"> <!--Awal Sidebar -->
          <nav id="mainNavbar">
            <ul class="nav nav-pills nav-stacked">

              <li class="navbar-brand"><b>Menu</b></li>
              <li class="li"> <a style="color: #004d40" href="<?php echo base_url();?>index.php/up_ks"><i class="glyphicon glyphicon-plus">&nbsp;</i>UBAH PASSWORD</a></li>

              <li class="li">
                  <a style="color: #004d40" href="<?php echo base_url()?>index.php/claporan_siswa">&nbsp;<i class="glyphicon glyphicon-plus">&nbsp;</i>Laporan Siswa
                  </a>
              </li>
              
              <li class="li"> <a style="color: #004d40" href="<?php echo base_url()?>index.php/claporan_beasiswa"><i class="glyphicon glyphicon-plus">&nbsp;</i>Laporan Beasiswa</a></li>

              <li class="li"> <a style="color: #004d40" href="<?php echo base_url()?>index.php/claporan_mpe"><i class="glyphicon glyphicon-plus">&nbsp;</i>Laporan Perhitungan MPI</a></li>
              
              <li class="li"><a style="color: #004d40" href="<?php echo base_url('index.php/login_ks/logout'); ?>">Logout</a></li>
            </ul>

          </nav>
        </div> <!--Akhir Sidebar -->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>