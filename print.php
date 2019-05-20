<?php
include"koneksi.php";
function buatrp($angka)
{
 $jadi = "Rp " . number_format($angka,2,',','.');
return $jadi;
}
	$id_nasabah=$_GET['id'];
	$data = mysql_query("select * from pemohon where Id_nasabah = '$id_nasabah'");		
	$d = mysql_fetch_array($data);
	$id_nasabah=$d['Id_nasabah'];
	$ktr = mysql_query("select * from kriteria where id_nasabah='$id_nasabah'");
	$tmplktr = mysql_fetch_array($ktr);
	$bbt=mysql_query("select * from bobot where id_kriteria='".$tmplktr['id_kriteria']."'");
	$bobot=mysql_fetch_array($bbt);
	$bunga=($d['besar_permohonan']*12)/100;
	$angsuran=$d['besar_permohonan']/$d['jangka_waktu'];
	$total=$angsuran+$bunga;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Print</title>
<style>
h4{
	margin:5px;
	font-size: 30px;
	font-weight:normal;
}
td{
	margin-left:10px;
}
</style>
</head>

<body>
<script>
		window.print();
	</script>
<div style="vertical-align:middle; width:100%; height:768px  border:gray 1px solid">
<table width="100%" align="center" cellpadding="5" cellspacing="5">
<tbody>
<tr>
<td width="20%" valign="top"><img src="image/images.png" style="width:100%; height:35%"alt=""/></td>
<td width="80%" align="center" valign="middle"><h2 style="font-size:38px">Keputusan Kelayakan Kredit Mikro Utama <br>PT. Bank Pembangunan Jawa Barat dan Banten Tbk (bjb)</h2></td>
</tr>
</tbody>
</table>
<hr style="border:2px solid">
<table width="98%" align="center">
 <tr>
      <td width="48%"><h4>Berikut ini adalah hasil permohonan Kredit Mikro Utama :</h4></td>
    </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
  
    <tr>
      <td width="24%"><h4>Nama</h4></td>
      <td width="76%"><h4 style="text-transform:capitalize">: <?php echo $d['nama_nasabah'];?></h4></td>
    </tr>
    <tr>
      <td><h4>Nomor Perjanian Kredit</h4></td>
      <td><h4>: <?php echo $tmplktr['id_kriteria'];?></h4></td>
    </tr>
    <tr>
      <td><h4>Alamat</h4></td>
      <td><h4>: <?php echo $d['alamat'];?></h4></td>
    </tr>
    <tr>
      <td><h4>KTP</h4></td>
      <td><h4>: <?php echo $d['ktp'];?></h4></td>
    </tr>
    <tr>
      <td><h4>NPWP</h4></td>
      <td><h4>: <?php echo $d['npwp'];?></h4></td>
    </tr>
    <tr>
      <td><h4>Usaha Dagang / Jasa</h4></td>
      <td><h4>: <?php echo $d['jenis_usaha'];?></h4></td>
    </tr>
    <tr>
      <td><h4>Total Angsuran</h4></td>
      <td><h4>: <?php echo buatrp($total); ?> / Bulan</h4></td>
    </tr>
    <tr>
      <td><h4>Plafond Peminjaman</h4></td>
      <td><h4>: <?php echo buatrp($d['besar_permohonan']);?></h4></td>
    </tr>
  </tbody>
</table>
<br>
<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" style="background-color:white; border-collapse: collapse; border: 1px solid gray; margin-top:10px">
  <tbody>
    <tr style="background-color:orange">
      <th width="4%" scope="col"><h4>No</h4></th>
      <th width="35%" scope="col"><h4>Kriteria</h4></th>
      <th width="43%" scope="col"><h4>Keterangan</h4></th>
      <th width="18%" scope="col"><h4>Bobot</h4></th>
    </tr>
    <tr>
      <td><h4>1</h4></td>
      <td><h4>KTP</h4></td>
      <td><h4><?php echo $tmplktr['ktp'];?></h4></td>
      <td><h4><?php echo $bobot['ktp'];?></h4></td>
    </tr>
    <tr>
      <td><h4>2</h4></td>
      <td><h4>KK</h4></td>
      <td><h4><?php echo $tmplktr['kk'];?></h4></td>
      <td><h4><?php echo $bobot['kk'];?></h4></td>
    </tr>
    <tr>
      <td><h4>3</h4></td>
      <td><h4>NPWP</h4></td>
      <td><h4><?php echo $tmplktr['npwp'];?></h4></td>
      <td><h4><?php echo $bobot['npwp'];?></h4></td>
    </tr>
    <tr>
      <td><h4>4</h4></td>
      <td><h4>Surat Nikah / Akta Cerai</h4></td>
      <td><h4><?php echo $tmplktr['surat_nikah'];?></h4></td>
      <td><h4><?php echo $bobot['surat_nikah'];?></h4></td>
    </tr>
    <tr>
      <td><h4>5</h4></td>
      <td><h4>Tanggungan</h4></td>
      <td><h4><?php echo $tmplktr['tanggungan'];?></h4></td>
      <td><h4><?php echo $bobot['tanggungan'];?></h4></td>
    </tr>
    <tr>
      <td><h4>6</h4></td>
      <td><h4>Penghasilan Usaha</h4></td>
      <td><h4><?php echo $tmplktr['penghasilan_usaha'];?></h4></td>
      <td><h4><?php echo $bobot['penghasilan_usaha'];?></h4></td>
    </tr>
    <tr>
      <td><h4>7</h4></td>
      <td><h4>Penghasilan Kerja</h4></td>
      <td><h4><?php echo $tmplktr['penghasilan_kerja'];?></h4></td>
      <td><h4><?php echo $bobot['penghasilan_kerja'];?></h4></td>
    </tr>
    <tr>
      <td><h4>8</h4></td>
      <td><h4>Persediaan Barang Usaha</h4></td>
      <td><h4><?php echo $tmplktr['persediaan_barang'];?></h4></td>
      <td><h4><?php echo $bobot['persediaan_barang'];?></h4></td>
    </tr>
    <tr>
      <td><h4>9</h4></td>
      <td><h4>Laporan Keuangan Tahunan</h4></td>
      <td><h4><?php echo $tmplktr['laporan_keuangan'];?></h4></td>
      <td><h4><?php echo $bobot['laporan_keuangan'];?></h4></td>
    </tr>
    <tr>
      <td><h4>10</h4></td>
      <td><h4>Laba Rugi</h4></td>
      <td><h4><?php echo $tmplktr['laba_rugi'];?></h4></td>
      <td><h4><?php echo $bobot['laba_rugi'];?></h4></td>
    </tr>
    <tr>
      <td><h4>11</h4></td>
      <td><h4>Struktur Pemodalan</h4></td>
      <td><h4><?php echo $tmplktr['struktur_pemodalan'];?></h4></td>
      <td><h4><?php echo $bobot['struktur_pemodalan'];?></h4></td>
    </tr>
    <tr>
      <td><h4>12</h4></td>
      <td><h4>Domisili Usaha</h4></td>
      <td><h4><?php echo $tmplktr['domisili_usaha'];?></h4></td>
      <td><h4><?php echo $bobot['domisili_usaha'];?></h4></td>
    </tr>
    <tr>
      <td><h4>13</h4></td>
      <td><h4>Agunan</h4></td>
      <td><h4><?php echo $tmplktr['agunan'];?></h4></td>
      <td><h4><?php echo $bobot['agunan'];?></h4></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><h4>Jumlah</h4></td>
      <td><h4><?php echo $bobot['jumlah']; ?></h4></td>
    </tr>
  </tbody>
</table>
<br>
<table width="98%" align="center">
 <tr><td>
<h4>Maka berdasarkan hasil keputusan permohonan kelayakan kredit yang tertera dalam tabel diatas adalah : <br></h4></td>
</tr>
<tr><td align="center">
<h4 style="text-transform: uppercase; font-weight:bold"><?php echo $tmplktr['keterangan']; ?></h4></td>
</tr>
<tr>
<td>
<h4>Demikian surat keputusan kelayakan kredit ini dibuat dengan sebanar - benarnya berdasarkan dari hasil data yang diperoleh.</h4>
</td>
</tr>
<tr>
<td align="center">
<h4>Serang <?php $tgl=date('d-m-Y'); echo $tgl; ?></h4>
<br><br><br>
<br><br><br>
<h4><ul>Zulkifly, SE</ul></h4><br>
</td>
</tr>
</table>
</div>
</body>
</html>