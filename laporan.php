<?php
session_start();
if(!isset($_SESSION['email'])) {
 
header("location:index.php");
}else{
$idname = $_SESSION['email'];
include"koneksi.php";
$tt=mysql_query("select * from user where id_user='$idname'");
$tmplid=mysql_fetch_array($tt);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/score.js"></script>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.autocomplete.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.menu.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-ui.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.autocomplete.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
		$("#idnasabah").autocomplete({
		minLength:1,
		source:"autocomplete.php",
		delay:100
	});
			
});
</script>
<style type="text/css">
body {
	background-image: url(image/bg.jpg);
	background-repeat: repeat;
}
Select{
	padding:5px;
}
h1{
	margin-bottom:5px;
	margin-top:5px;
}
td, th{padding:5px}

</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="    margin-left: -5px;
    margin-top: -10px;">
<div style="width:60%; margin-left:20%; margin-right:20%; margin-bottom:3%; background-color: #00EBFF;     height: auto;">
<img src="image/images.png" width="200" height="100" alt="" style=" padding-bottom:20px;"/>
<div role="tabpanel">
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="home.php?id=home" >Home</a></li>
    <li><a href="logout.php" role="tab">Logout</a></li>
  </ul>
  <div id="tabContent1" class="tab-content" style="padding:5px; height:100%">
<form action="laporan.php" method="get">
<label>Id Nasabah</label>
<input name="idnasabah" type="text" id="idnasabah">
<input name="Cari" type="submit" id="Cari" value="Cari">
</form>
<?php
function buatrp($angka)
{
 $jadi = "Rp " . number_format($angka,2,',','.');
return $jadi;
}
	if(isset($_GET['Cari'])){
		$cari = $_GET['idnasabah'];
		$data = mysql_query("select * from pemohon where nama_nasabah like '%".$cari."%' or Id_nasabah like '%".$cari."'");				
	}else{
		$data = mysql_query("select * from pemohon");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	$id_nasabah=$d['Id_nasabah'];
	$ktr = mysql_query("select * from kriteria where id_nasabah='$id_nasabah'");
	$tmplktr = mysql_fetch_array($ktr);
  $cekkriteria=mysql_num_rows($ktr);
	$bbt=mysql_query("select * from bobot where id_kriteria='".$tmplktr['id_kriteria']."'");
	$bobot=mysql_fetch_array($bbt);
	$bunga=($d['besar_permohonan']*12)/100;
	$angsuran=$d['besar_permohonan']/$d['jangka_waktu'];
	$total=$angsuran+$bunga;
  if($cekkriteria > 0){
?>
<table width="100%" border="1" cellpadding="5" cellspacing="5" style="background-color:white; border-collapse: collapse;    border: 2px solid gray; margin-top:2%">
  <tbody>
    <tr style="background-color:orange">
      <th>ID Nasabah</th>
      <th>Nama Nasabah</th>
     </tr>
     <tr>
      <td><?php echo $d['Id_nasabah'];?></td>
      <td valign="middle" ><label style="float:left"><?php echo $d['nama_nasabah'];?></label>
      <a style="float:right" href="print.php?id=<?php echo $d['Id_nasabah'];?>" target="_blank"><button class="btn" style=" font-weight: bold;">Cetak</button></a>
      <a style="float:right; color: red" href="hapus.php?id=<?php echo $d['Id_nasabah'];?>"><button class="btn"style=" font-weight: bold;">Hapus</button></a>
      <a style="float:right" href="Edit.php?id=<?php echo $d['Id_nasabah'];?>"><button class="btn"style=" font-weight: bold;">Ubah</button></a></td>
    </tr>
</tbody>
</table>
<table width="100%" border="1" cellpadding="5" cellspacing="5" style="background-color:white; border-collapse: collapse;    border: 2px solid gray; margin-top:10px">
  <tbody>
    <tr style="background-color:orange">
      <th width="4%" scope="col">No</th>
      <th width="35%" scope="col">Kriteria</th>
      <th width="43%" scope="col">Keterangan</th>
      <th width="18%" scope="col">Bobot</th>
    </tr>
    <tr>
      <td>1</td>
      <td>KTP</td>
      <td><?php echo $tmplktr['ktp'];?></td>
      <td><?php echo $bobot['ktp'];?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>KK</td>
      <td><?php echo $tmplktr['kk'];?></td>
      <td><?php echo $bobot['kk'];?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>NPWP</td>
      <td><?php echo $tmplktr['npwp'];?></td>
      <td><?php echo $bobot['npwp'];?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Surat Nikah / Akta Cerai</td>
      <td><?php echo $tmplktr['surat_nikah'];?></td>
      <td><?php echo $bobot['surat_nikah'];?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Tanggungan</td>
      <td><?php echo $tmplktr['tanggungan'];?></td>
      <td><?php echo $bobot['tanggungan'];?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Penghasilan Usaha</td>
      <td><?php echo $tmplktr['penghasilan_usaha'];?></td>
      <td><?php echo $bobot['penghasilan_usaha'];?></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Penghasilan Kerja</td>
      <td><?php echo $tmplktr['penghasilan_kerja'];?></td>
      <td><?php echo $bobot['penghasilan_kerja'];?></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Persediaan Barang Usaha</td>
      <td><?php echo $tmplktr['persediaan_barang'];?></td>
      <td><?php echo $bobot['persediaan_barang'];?></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Laporan Keuangan Tahunan</td>
      <td><?php echo $tmplktr['laporan_keuangan'];?></td>
      <td><?php echo $bobot['laporan_keuangan'];?></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Laba Rugi</td>
      <td><?php echo $tmplktr['laba_rugi'];?></td>
      <td><?php echo $bobot['laba_rugi'];?></td>
    </tr>
    <tr>
      <td>11</td>
      <td>Struktur Pemodalan</td>
      <td><?php echo $tmplktr['struktur_pemodalan'];?></td>
      <td><?php echo $bobot['struktur_pemodalan'];?></td>
    </tr>
    <tr>
      <td>12</td>
      <td>Domisili Usaha</td>
      <td><?php echo $tmplktr['domisili_usaha'];?></td>
      <td><?php echo $bobot['domisili_usaha'];?></td>
    </tr>
    <tr>
      <td>13</td>
      <td>Agunan</td>
      <td><?php echo $tmplktr['agunan'];?></td>
      <td><?php echo $bobot['agunan'];?></td>
    </tr>
    <tr>
      <td colspan="3" align="center">Jumlah</td>
      <td><?php echo $bobot['jumlah']; ?></td>
    </tr>
    <tr>
      <td colspan="4" align="center"><h3 style="text-transform: uppercase"><?php echo $tmplktr['keterangan']; ?></h3></td>
    </tr>
  </tbody>
</table>
<?php 
}else{

}
} ?>
  </div>
</div>
<script src="js/bootstrap.js" type="text/javascript"></script>
<footer style="bottom:0; z-index:0; position:fixed; padding:10px; background-color:#0015FF; width:60%; color:#FFFFFF; margin-left:-10px; margin-right:20%"><center>
 Copyright &copy; 2018 Bank bjb</center>
 </footer>
</div>
 
</body>
</html>