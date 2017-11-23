<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
   <link href="<?php echo base_url();?>/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/stylelaporan.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />

  
</head>
 
<body>
<div class="container">
    <img src="<?php echo base_url('assets/img/aaa.jpeg')?>">
    <h5><b>SMK Ma'arif 1 Kalirejo Lampung Tengah</b></h5>
    <h3 class="text-center"><b>Laporan Siswa</b></h3>
        <table class="table table-bordered">  
            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>KELAS</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>NAMA ORANG TUA</th>   
                <th>TAHUN</th>      
            </tr>
     <?php $no = 1; ?>
	<tbody>
	 <?php foreach($datasiswa as $rbarang)
	 {
	 	?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $rbarang->nis; ?></td>
        <td><?php echo $rbarang->nama_siswa; ?></td>
        <td><?php echo $rbarang->jenis_kelamin; ?></td>
        <td><?php echo $rbarang->kelas; ?></td>
        <td><?php echo $rbarang->tempat_lahir; ?></td>
        <td><?php echo $rbarang->tanggal_lahir; ?></td>
        <td><?php echo $rbarang->nama_orang_tua; ?></td>
        <td><?php echo $rbarang->tahun; ?></td>
    </tr>
    <?php }	?>
</tbody>
</table>
<p style="text-align: center">
	<a class="btn btn-primary" href="<?php echo base_url()?>index.php/claporan_siswa/cetaksiswa">Cetak PDF</a>   
</p>
 
</body>
</html>
