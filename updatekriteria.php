<?php
include"koneksi.php";

session_start();
if(!isset($_SESSION['email'])) {
 
header("location:index.php");
}else{
$idname = $_SESSION['email'];
include"koneksi.php";
$tt=mysql_query("select * from user where id_user='$idname'");
$tmplid=mysql_fetch_array($tt);
}
$id_nasabah=$_POST['nama'];
$id_user=$tmplid['nourut'];
$ktp=$_POST['KTP'];
$scorektp=$_POST['scoreKTP'];
$kk=$_POST['KK'];
$scorekk=$_POST['scoreKK'];
$npwp=$_POST['NPWP'];
$scorenpwp=$_POST['scoreNPWP'];
$surat=$_POST['Suratnikah'];
$scoresurat=$_POST['scoreSuratnikah'];
$tanggungan=$_POST['Tanggungan'];
$scoretanggungan=$_POST['scoreTanggungan'];
$usaha=$_POST['Usaha'];
$scoreusaha=$_POST['scoreUsaha'];
$kerja=$_POST['Kerja'];
$scorekerja=$_POST['scoreKerja'];
$barang=$_POST['Barang'];
$scorebarang=$_POST['scoreBarang'];
$keuangan=$_POST['Keuangan'];
$scorekeuangan=$_POST['scoreKeuangan'];
$laba=$_POST['Laba'];
$scorelaba=$_POST['scoreLaba'];
$pemodalan=$_POST['Pemodalan'];
$scorepemodalan=$_POST['scorePemodalan'];
$domisili=$_POST['Domisili'];
$scoredomisili=$_POST['scoreDomisili'];
$agunan=$_POST['Agunan'];
$scoreagunan=$_POST['scoreAgunan'];
if(isset($_POST['simpan'])){
	$kriteria=mysql_query("UPDATE `kriteria` SET `id_nasabah`='$id_nasabah',`id_user`='$id_user',`ktp`='$ktp',`kk`='$kk',`npwp`='$npwp',`surat_nikah`='$surat',`tanggungan`='$tanggungan',`penghasilan_usaha`='$usaha',`penghasilan_kerja`='$kerja',`persediaan_barang`='$barang',`laporan_keuangan`='$keuangan',`laba_rugi`='$laba',`struktur_pemodalan`='$pemodalan',`domisili_usaha`='$domisili',`agunan`='$agunan' WHERE id_nasabah='$id_nasabah'");
	if($kriteria){
		$tmp1 = mysql_query("SELECT * FROM kriteria where id_nasabah = '$id_nasabah'");
		$msa1 = mysql_fetch_array($tmp1);
		$kre = $msa1['id_kriteria'];
		$jumlh=$scorektp + $scorekk + $scorenpwp + $scoresurat + $scoretanggungan + $scoreusaha + $scorekerja + $scorebarang + $scorekeuangan + $scorelaba + $scorepemodalan + $scoredomisili + $scoreagunan;
		$bobot = mysql_query("UPDATE `bobot` SET `id_kriteria`='$kre',`ktp`='$scorektp',`kk`='$scorekk',`npwp`='$scorenpwp',`surat_nikah`='$scoresurat',`tanggungan`='$scoretanggungan',`penghasilan_usaha`='$scoreusaha',`penghasilan_kerja`='$scorekerja',`persediaan_barang`='$scorebarang',`laporan_keuangan`='$scorekeuangan',`laba_rugi`='$scorelaba',`struktur_pemodalan`='$scorepemodalan',`domisili_usaha`='$scoredomisili',`agunan`='$scoreagunan',`jumlah`='$jumlh' WHERE `id_kriteria`='$kre' ");
		
		if($bobot){
			$tmp1 = mysql_query("SELECT * FROM kriteria where id_nasabah = '$id_nasabah'");
			$msa1 = mysql_fetch_array($tmp1);
			$kre = $msa1['id_kriteria'];
			$c1= $scoreusaha + $scorekerja + $scorebarang;
			$c2= $scoreagunan;
			$c3= $scorekeuangan + $scorelaba + $scorepemodalan;
			$c4= $scoredomisili;
			$c5= $scorektp + $scorekk + $scorenpwp + $scoresurat + $scoretanggungan;
			$matrik=mysql_query("UPDATE `matrik` SET `idnasabah`='$id_nasabah',`idkriteria`='$kre',`kriteria1`='$c1',`kriteria2`='$c2',`kriteria3`='$c3',`kriteria4`='$c4',`kriteria5`='$c5' WHERE `idnasabah`='$id_nasabah' AND `idkriteria`='$kre'");
			if($matrik){
			echo "<script>window.alert('Telah Disimpan')
			window.location='matrik.php?id=$id_nasabah&kriteria=$kre'</script>'";
			}else{
				echo "<script>window.alert('Gagal Disimpan1')
				window.location='home.php?id=home'</script>'";
			}
		}else{
			echo "<script>window.alert('Gagal Disimpan')
			window.location='home.php?id=home'</script>'";
		}
	}else{
		echo "<script>window.alert('Terjadi Kesalahan')
	window.location='home.php?id=home'</script>";
	}
}
?>