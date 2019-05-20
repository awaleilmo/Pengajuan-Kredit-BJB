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
	$tmp = mysql_query("SELECT * FROM kriteria where id_nasabah = '$id_nasabah'");
	$msa = mysql_num_rows($tmp);
if($msa['id_nasabah'] > 0 ){
	$kriteria=mysql_query("INSERT INTO `kriteria`(`id_kriteria`, `id_nasabah`, `id_user`, `ktp`, `kk`, `npwp`, `surat_nikah`, `tanggungan`, `penghasilan_usaha`, `penghasilan_kerja`, `persediaan_barang`, `laporan_keuangan`, `laba_rugi`, `struktur_pemodalan`, `domisili_usaha`, `agunan`,`keterangan`)
	VALUES ( NULL, '$id_nasabah','$id_user','$ktp', '$kk', '$npwp', '$surat', '$tanggungan', '$usaha', '$kerja','$barang', '$keuangan', '$laba', '$pemodalan', '$domisili', '$agunan', 'Ditolak' )");
	if($kriteria){
		$tmp1 = mysql_query("SELECT * FROM kriteria where id_nasabah = '$id_nasabah'");
		$msa1 = mysql_fetch_array($tmp1);
		$kre = $msa1['id_kriteria'];
		$jumlh=$scorektp + $scorekk + $scorenpwp + $scoresurat + $scoretanggungan + $scoreusaha + $scorekerja + $scorebarang + $scorekeuangan + $scorelaba + $scorepemodalan + $scoredomisili + $scoreagunan;
		$bobot = mysql_query("INSERT INTO `bobot`(`id_score`, `id_kriteria`, `ktp`, `kk`, `npwp`, `surat_nikah`, `tanggungan`, `penghasilan_usaha`, `penghasilan_kerja`, `persediaan_barang`, `laporan_keuangan`, `laba_rugi`, `struktur_pemodalan`, `domisili_usaha`, `agunan`, `jumlah`)
			VALUES (NULL ,'$kre', '$scorektp','$scorekk', '$scorenpwp', '$scoresurat', '$scoretanggungan', '$scoreusaha', '$scorekerja','$scorebarang', '$scorekeuangan', '$scorelaba', '$scorepemodalan', '$scoredomisili', '$scoreagunan', '$jumlh') ");
		
		if($bobot){
			$tmp1 = mysql_query("SELECT * FROM kriteria where id_nasabah = '$id_nasabah'");
			$msa1 = mysql_fetch_array($tmp1);
			$kre = $msa1['id_kriteria'];
			$c1= $scoreusaha + $scorekerja + $scorebarang;
			$c2= $scoreagunan;
			$c3= $scorekeuangan + $scorelaba + $scorepemodalan;
			$c4= $scoredomisili;
			$c5= $scorektp + $scorekk + $scorenpwp + $scoresurat + $scoretanggungan;
			$matrik=mysql_query("INSERT INTO `matrik`(`idmatrik`, `idnasabah`, `idkriteria`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`) VALUES(NULL,'$id_nasabah','$kre','$c1','$c2','$c3','$c4','$c5')");
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
}else{
	echo "<script>window.alert('Nasabah Sudah Terdaftar')
	window.location='home.php?id=home'</script>";
}
}
?>