<?php
include"koneksi.php";
$searchTerm = $_GET['term'];
//mendapatkan data yang sesuai dari tabel daftar_kota
$query = mysql_query("SELECT * FROM pemohon WHERE Id_nasabah LIKE '%".$searchTerm."%' or nama_nasabah LIKE '%".$searchTerm."%' ORDER BY nama_nasabah ASC");
$json = array();
while($produk = mysql_fetch_array($query)){
	$json[] = array(
		'label' => $produk['kode'].' - '.$produk['nama'], // text sugesti saat user mengetik di input box
		'value' => $produk['kode'], // nilai yang akan dimasukkan diinputbox saat user memilih salah satu sugesti
	);
}
header("Content-Type: text/json");
//return data json
echo json_encode($data);
?>
