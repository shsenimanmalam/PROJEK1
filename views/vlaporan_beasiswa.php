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
    <h3 class="text-center"><b>Laporan Beasiswa</b></h3>
        <table class="table table-bordered">  
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
	<tbody>
	 <?php foreach($databeasiswa as $beasiswa)
	 {
	 	?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $beasiswa->nis; ?></td>
        <td><?php echo $beasiswa->nama_siswa; ?></td>
        <td><?php echo $beasiswa->nilai_prestasi; ?></td>
        <td><?php echo $beasiswa->nilai_disiplin; ?></td>
        <td><?php echo $beasiswa->nilai_absensi; ?></td>
        <td><?php echo $beasiswa->nilai_mpe; ?></td>
        <td><?php echo $beasiswa->keterangan; ?></td>
        <td><?php echo $beasiswa->tahun; ?></td>
    </tr>
    <?php }	?>
</tbody>
</table>
<p style="text-align: center">
	<a href="<?php echo base_url()?>index.php/claporan_beasiswa/cetakbeasiswa">Cetak PDF</a>   
</p>
 
</body>
</html>
