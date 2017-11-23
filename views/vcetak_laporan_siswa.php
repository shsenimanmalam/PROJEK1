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
            padding: 3px;
            font-weight: bold;
            text-align: center;
            background-color: #E0E0E0;
        }
        table td{
            border:1px solid #000;
            padding: 3px;
            text-align: center;
            background-color: #F5F5F5;
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
<h2>Laporan Data Siswa</h2>
<hr>
<table>
     <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA SISWA</th>
        <th>JENIS KELAMIN</th>
		<th>KELAS</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>NAMA ORANG TUA</th>
        <th>TAHUN</th>
    </tr>

   <?php $no = 1; ?>
	 <?php foreach($datasiswa as $rbarang)
	 {
	 	?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td id="nis"><?php echo $rbarang->nis; ?></td>
        <td><?php echo $rbarang->nama_siswa; ?></td>
        <td><?php echo $rbarang->jenis_kelamin; ?></td>
        <td><?php echo $rbarang->kelas; ?></td>
        <td><?php echo $rbarang->tempat_lahir; ?></td>
        <td><?php echo $rbarang->tanggal_lahir; ?></td>
        <td><?php echo $rbarang->nama_orang_tua; ?></td>
        <td><?php echo $rbarang->tahun; ?></td>
    </tr>
    <?php 
	}
	?>
</table>
</body>
</html>