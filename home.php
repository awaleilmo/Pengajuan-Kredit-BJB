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
<title>UMKM bjb</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<style type="text/css">

body {
	background-image: url(image/bg.jpg);
	background-repeat: repeat;
	background-attachment:fixed;
	font-size:18px;
	font-family: Arial;
  margin-left: -15px;
}
Select{
	padding:5px;
}
h1, .h1{
	margin-bottom:5px;
	margin-top:5px;
	font-size: 25px;
}
</style>
<style type="text/css">
.parallax2 {
    /* The image used */
    background-image: url(image/kmu-500x235-042018.jpg);

    /* Set a specific height */
    min-height: 435px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: 50% 70%;
    background-repeat: no-repeat;
    background-size: 60% 67%;}
	
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div style="width:100%;">
<div style="background-color:white; width:90%;  position:fixed; margin-top:-2%; margin-left:5%; margin-right:5%">
<img src="image/images.png" width="100" height="100" alt="" style=" padding-bottom:20px;"/>
</div>
<div role="tabpanel">
  <ul class="nav nav-tabs" role="tablist" style="background-color: white; margin-top:4.5%; padding:1px; position:fixed; width:90%; border-bottom:2px solid black; margin-left:4%; margin-right:5%">
    <?php
	if($_GET['id'] == "nasabah"){?>
    <li><a href="home.php?id=home" data-toggle="" role="tab">Home</a></li>
    <li><a href="home.php?id=pemohon" data-toggle="" role="tab">Pemohon</a></li>
    <li><a href="home.php?id=kriteria" data-toggle="" role="tab">Kriteria</a></li>
    <li><a href="laporan.php" role="tab">Laporan</a></li>
    <li class="active"><a href="home.php?id=nasabah" data-toggle="" role="tab">Data Nasabah</a></li>
    <li><a href="logout.php" role="tab">Logout</a></li>
     <?php }elseif($_GET['id'] == "home"){?>
    <li class="active"><a href="#home.php?id=home" data-toggle="" role="tab">Home</a></li>
	<li><a href="home.php?id=pemohon" data-toggle="" role="tab">Pemohon</a></li>
    <li><a href="home.php?id=kriteria" data-toggle="" role="">Kriteria</a></li>
    <li><a href="laporan.php" role="tab">Laporan</a></li>
    <li><a href="home.php?id=nasabah" data-toggle="" role="tab">Data Nasabah</a></li>
    <li><a href="logout.php" role="tab">Logout</a></li>
    <?php }elseif($_GET['id'] == "kriteria"){?>
    <li><a href="home.php?id=home" data-toggle="" role="tab">Home</a></li>
    <li><a href="home.php?id=pemohon" data-toggle="" role="tab">Pemohon</a></li>
    <li class="active"><a href="#home.php?id=kriteria" data-toggle="" role="tab">Kriteria</a></li>
    <li><a href="laporan.php" role="tab">Laporan</a></li>
    <li><a href="home.php?id=nasabah" data-toggle="" role="tab">Data Nasabah</a></li>
    <li><a href="logout.php" role="tab">Logout</a></li>
    <?php }elseif($_GET['id'] == "pemohon"){?>
    <li><a href="home.php?id=home" data-toggle="" role="tab">Home</a></li>
    <li class="active"><a href="#home.php?id=pemohon" data-toggle="" role="tab">Pemohon</a></li>
    <li><a href="home.php?id=kriteria" data-toggle="" role="tab">Kriteria</a></li>
    <li><a href="laporan.php" role="tab">Laporan</a></li>
    <li><a href="home.php?id=nasabah" data-toggle="" role="tab">Data Nasabah</a></li>
    <li><a href="logout.php" role="tab">Logout</a></li>
    <?php } ?>
  </ul>
  <div style="width:90%; background-color: white; height: auto; margin-left:5%; margin-right:5%; margin-bottom:3%; margin-top:9%; border:black 2px solid">
  <div id="tabContent1" class="tab-content">
  <?php if($_GET['id'] == "home"){?>
 	<div class="tab-pane fade in active" id="home1">
      <div class="parallax2"></div>
      <div style="background-color:#E2C81D; width:100%; padding-top:5px">
      <h2>bjb Kredit Mikro Utama</h2>
      <hr style="    border-top: 10px solid #eee;">
      </div>
     
      <ol style="width:70%; margin-left:15%; margin-right:15%">
        <li>
          <h4><strong>Sasaran</strong></h4>
          <p>Calon nasabah yang dapat menikmati fasilitas Kredit Mikro Utama dari <strong>bjb</strong> sahabat usaha Layanan <strong>UMKM</strong>, adalah Para pelaku usaha perorangan Badan Usaha (PT,CV) dalam sektor ekonomi produktif yang masuk kategori Usaha Mikro Kecil dan Menengah seperti pengusaha kecil, pedagang, wirausaha, wiraswasta produktif (khusus perorangan) yang saat ini aktif menjalankan usahanya minimal 2 tahun.</p>
        </li>
        <li>
          <h4><strong>Tujuan pengajuan kredit</strong></h4>
          <ul>
            <li>Modal Kerja</li>
            <li>Investasi</li>
          </ul>
        </li>
        <li>
          <h4><strong>Besar Plafon kredit</strong></h4>
          <p>Minimal 5 Juta s/d 500 Juta</p>
        </li>
        <li>
          <h4><strong>Jangka Waktu Pinjaman</strong></h4>
          <ul>
            <li>Minimum 12 Bulan dan maksimum 60 Bulan</li>
            <li>Khusus plafon ≤ 50 Juta, jangka waktu kredit maksimum 36 bulan</li>
          </ul>
        </li>
        <li>
          <h4><strong>Dokumen Persyaratan kredit<br>
            <br>
          </strong>Perorangan</h4>
          <ul>
            <li>Dokumen Identitas (copy sesuai asli)
              <ul>
                <li>KTP calon debitur &amp; pasangan (bila ada) yang masih berlaku</li>
                <li>NPWP calon debitur &amp; pasangan</li>
                <li>Kartu Keluarga</li>
                <li>Akta Nikah/ Surat Cerai/Surat Kematian (apabila relevan)</li>
              </ul>
            </li>
            <li>Dokumen Usaha (copy sesuai asli)
              <ul>
                <li>Surat Keterangan Usaha (SKU) atau Surat Ijin Usaha Perdagangan (SIUP)</li>
                <li>SIUP untuk Plafon kredit ≥ 250 Juta</li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>Dokumen kepemilikan Agunan (asli) beserta kelengkapan / dokumen pendukungnya</li>
          </ul>
          <h4>Badan Usaha (PT)</h4>
          <ul>
            <li>Dokumen Identitas (copy sesuai asli)
              <ul>
                <li>KTP Pengurus Badan Usaha</li>
                <li>KTP Penjamin (jka agunan bukan atas nama badan usaha)</li>
                <li>KTP Pasangan Penjamin (jika agunan bukan atas nama badan usaha)</li>
                <li>NPWP atas nama badan usaha</li>
                <li>Identitas Perusahaan</li>
                <li>Akta Pendirian PT dan perubahannya</li>
              </ul>
            </li>
            <li>Dokumen Usaha (copy sesuai asli)
              <ul>
                <li>Surat Ijin Usaha atas nama badan usaha</li>
                <li>TDP</li>
                <li>SKDP (Surat Keterangan Domisili Perusahaan)</li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>Dokumen kepemilikan Agunan (asli) beserta kelengkapan / dokumen pendukungnya</li>
          </ul>
          <h4>Badan Usaha (CV)</h4>
          <ul>
            <li>Dokumen Identitas (copy sesuai asli)
              <ul>
                <li>KTP Pengurus Badan Usaha</li>
                <li>KTP Penjamin (jika agunan bukan atas nama badan usaha)</li>
                <li>KTP Pasangan Penjamin (jika agunan bukan atas nama badan usaha)</li>
                <li>NPWP atas nama badan usaha</li>
                <li>Akta Pendirian CV dan perubahannya</li>
                <li>Bukti Pendaftaran CV sebagai badan usaha dari Pengadilan Negeri Setempat</li>
                <li>Akta Perubahan Tentang Anggaran Dasar</li>
                <li>Bukti pendaftaran dari Pengadilan Negeri setempat untuk perubahan Anggaran Dasar tersebut</li>
              </ul>
            </li>
            <li>Dokumen Usaha (copy sesuai asli)
              <ul>
                <li>Surat Ijin Usaha atas nama badan usaha</li>
                <li>TDP</li>
                <li>SKDP (Surat Keterangan Domisili Perusahaan)</li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>Dokumen kepemilikan Agunan (asli) beserta kelengkapan / dokumen pendukungnya</li>
          </ul>
        </li>
      </ol> 
      
      </div>
  <?php }elseif($_GET['id'] == "kriteria"){?>
    <div class="tab-pane fade in active" id="paneTwo1">
         <?php include"C1.php"; ?>
  	</div>
  <?php }elseif($_GET['id'] == "pemohon"){?>
    <div class="tab-pane fade  in active" id="paneTwo2">
      <?php include"pemohon.php"; ?>
    </div>
  <?php }elseif($_GET['id'] == "nasabah"){?>
    <div class="tab-pane fade in active" id="datanasabah">
      <?php include"datanasabah.php"; ?>
    </div>
  <?php } ?>
  </div>
  </div>
  </div>
<footer style="bottom:0; z-index:0; position:fixed; padding:10px; background-color:#0015FF; width:100%; color:#FFFFFF;"><center>
 <em>Copyright</em> &copy; 2018 Bank bjb</center>
 </footer>
</div>
 <script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="js/score.js"></script>
</body>
</html>
