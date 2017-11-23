<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">


   <style>
        table{
            border-collapse: collapse;
            width: 100%;
            'margin: 0 auto;
            padding-top: 35px;
        }
        h2{
            text-align: center;
        }
        h1{
            text-align: center;
        }
        table th{
            border:1px solid #000;
            font-weight: bold;
            text-align: center;
            background-color: #E0E0E0;
        }
        table td{
            border:1px solid #000;
            text-align: center;
            background-color: #F5F5F5;
        }

        th,td{
            padding: 7px;
        }

        #judul{
            font-size: 20px;
            font-weight: bold;
        }

        #tebal2{
            font-weight: bold;
        }

        #tebal{
            border:1px solid #000;
            padding: 3px;
            font-weight: normal;
            text-align: center;
        }

        #garis{
            width: 40%;
            border: 1px solid #000000;
        }
        #nis{
            text-align: left;
        }

    </style>
    <style type="text/css">
        .under { text-decoration: underline;
            color: #000000;
        }
        .over  { text-decoration: overline; }
        .line  { text-decoration: line-through; }
        .blink { text-decoration: blink; }
        .all   { text-decoration: underline overline line-through; }
               { text-decoration: none; }
    </style>
</head>
<body>

<h1><b>SMK Ma'arif 1 Kalirejo Lampung Tengah</b></h1>
<h2>Laporan Penerima Beasiswa</h2>
<hr>
<table>
  <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA SISWA</th>
        <th>NILAI PRESTASI</th>
        <th>NILAI DISIPLIN</th>
        <th>NILAI ABSENSI</th>
        <th>NILAI MPE</th>
        <th>KETERANGAN</th>  
        <th>TAHUN</th>      
    </tr>

   <?php $no = 1; ?>
     <?php foreach($databeasiswa as $beasiswa)
     {
        ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td id="nis"><?php echo $beasiswa->nis; ?></td>
        <td><?php echo $beasiswa->nama_siswa; ?></td>
        <td><?php echo $beasiswa->nilai_prestasi; ?></td>
        <td><?php echo $beasiswa->nilai_disiplin; ?></td>
        <td><?php echo $beasiswa->nilai_absensi; ?></td>
        <td><?php echo $beasiswa->nilai_mpe; ?></td>
        <td><?php echo $beasiswa->keterangan; ?></td>
        <td><?php echo $beasiswa->tahun; ?></td>
    </tr>
    <?php 
    }
    ?>
</table>
</body>
</html>