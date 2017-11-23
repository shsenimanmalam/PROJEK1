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

    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <!-- Data tables -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid" id="header" style="height: 80px"> <!--Awal Panel Admin -->
      <div class="row">

        <div class="col-md-3" style="padding-top: 18px;">
          
          <h1 id="h1"><b>Panel Admin</b></h1>
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

              <li class="li">
                  <a style="color: #004d40" href="<?php echo base_url();?>index.php/siswa"><i class="glyphicon glyphicon-th">&nbsp;</i>Data Siswa
                  </a>
              </li>

              <li class="li"> <a style="color: #004d40" href="<?php echo base_url();?>index.php/h_siswa"><i class="glyphicon glyphicon-plus">&nbsp;</i>Perhitungan MPE</a></li>

              <li class="li"> <a style="color: #004d40" href="<?php echo base_url();?>index.php/data_bobot"><i class="glyphicon glyphicon-plus">&nbsp;</i>Data Bobot</a></li>

              <li class="li"> <a style="color: #004d40" href="<?php echo base_url();?>index.php/up_admin"><i class="glyphicon glyphicon-plus">&nbsp;</i>UBAH PASSWORD</a></li>
              
              <li class="dropdown">
                <a style="background-color:#fff"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-briefcase">&nbsp;</i>Laporan<span class="caret"></span></a>
                <ul class="dropdown-menu">

                  <li><a href="<?php echo base_url();?>index.php/claporan_siswa" style="background-color: #fff">Laporan Siswa</a></li>
                  <li><a href="<?php echo base_url();?>index.php/claporan_beasiswa" style="background-color: #fff">Laporan Beasiswa</a></li>
                  <li><a href="<?php echo base_url();?>index.php/claporan_mpe" style="background-color: #fff">Laporan Perhitungan MPI</a></li>
                  
                </ul>
              </li>

              <li class="li"><a style="color: #004d40" href="#" onclick="add_sisw()">>About</a></li>
              <li class="li"><a style="color: #004d40" href="<?php echo base_url('index.php/login_admin/logout'); ?>">Logout</a></li>
            </ul>

          </nav>
        </div> <!--Akhir Sidebar -->
        <script type="text/javascript">
          /*modal abot*/
          function add_sisw()
{
    $('#modal_for').modal('show'); // show bootstrap modal
}

        </script>

        <div class="modal fade" id="modal_for" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content" style="width: 1100px; height: 1000px;">
                  <div class="modal-header">
                      <h1 class="text-center">About</h1>
                  </div>
                  <div class="modal-body form">
                      <h3 class="text-center">SMK Ma'arif 1 Kalirejo Lampung Tengah</h3><br><br><br><br>
                      <p>Sekolah kebanggan dan sekolah yang menunjang iilmu pengetahuan dengan penuh iman</p>
                      <p>Mengembangkan ilmu pengetahuan islam dan menjadikan patokan untuk pedoman semoga menjadi tempat didik yang terbaik dan selalu berdaya saing tinggi :)</p>
                      <p>Sekolah kebanggan dan sekolah yang menunjang iilmu pengetahuan dengan penuh iman</p>
                      <p>Mengembangkan ilmu pengetahuan islam dan menjadikan patokan untuk pedoman semoga menjadi tempat didik yang terbaik dan selalu berdaya saing tinggi :)</p><br><br>
                      <img id="asd" src="<?php echo base_url('assets/img/aaa.jpeg')?>">
                  </div>
                  
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!-- End Bootstrap modal -->    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>