<?php
 // Koneksi
 
 include"Koneksi.php";
	
 $bobot = array(3,1,5,4,3);
 $id_nasabah=$_GET['id'];
 $id_kriteria=$_GET['kriteria'];
 $sql1 = mysql_query("SELECT * FROM matrik where idnasabah = '$id_nasabah' and idkriteria='$id_kriteria'");
 $ma1 = mysql_fetch_array($sql1);
 $idmatrik=$ma1['idmatrik'];
 $crMax = mysql_query("SELECT max(kriteria1) as maxK1, 
						      max(kriteria2) as maxK2,
						      max(kriteria3) as maxK3,
						      max(kriteria4) as maxK4,
							  max(kriteria5) as maxK5  FROM matrik");
 $max = mysql_fetch_array($crMax);
 $sql4 = mysql_query("SELECT * FROM normalisasi");
 $cek=mysql_num_rows($sql4);
 $sql6 = mysql_query("SELECT * FROM matrix");
 while($liat=mysql_num_rows($sql6)){
$sql2 = mysql_query("SELECT * FROM matrik where idnasabah = '$id_nasabah' and idkriteria='$id_kriteria'");
 $dt2 = mysql_fetch_array($sql2);
 $idmatrik1=$dt2['idmatrik'];
 $c1 = 	$dt2['kriteria1']/$max['maxK1'];
 $c2 = 	$dt2['kriteria2']/$max['maxK2'];
 $c3 =  $dt2['kriteria3']/$max['maxK3'];
 $c4 =  $dt2['kriteria4']/$max['maxK4'];
 $c5 =  $dt2['kriteria5']/$max['maxK5'];
 if($liat >= 7){
 $normalisasi=mysql_query("INSERT INTO `normalisasi`(`id`, `idmatrik`, `c1`, `c2`, `c3`, `c4`, `c5`,`saw`) VALUES (NULL, '$idmatrik1','$c1','$c2','$c3','$c4','$c5','0')");
 if($normalisasi){
 $sql3 = mysql_query("SELECT * FROM `normalisasi`");
 while ($dt3 = mysql_fetch_array($sql3)) {
     $poin= round(
    ($bobot[0]*$dt3['c1'])+
    ($bobot[1]*$dt3['c2'])+
    ($bobot[2]*$dt3['c3'])+
    ($bobot[3]*$dt3['c4'])+
    ($bobot[4]*$dt3['c5']),4);
  	$update=mysql_query("update normalisasi set saw ='$poin' where idmatrik='$idmatrik'");
  	if($update){
  		if($poin >= "10"){
      	 $update1=mysql_query("update kriteria set keterangan ='Diterima' where id_kriteria='$id_kriteria'");
	      	 if($update1){
	      	 	echo "<script>window.alert('Matrik Disimpan')
				window.location='home.php?id=home'</script>";
	      	 }else{
	      	 	echo "<script>window.alert('Matrik Error')
				window.location='home.php?id=home'</script>";
	      	 }
   		 }else{
      	 $update1=mysql_query("update kriteria set keterangan ='Ditolak' where id_kriteria='$id_kriteria'");
	      	 if($update1){
	      	 	echo "<script>window.alert('Matrik Disimpan')
				window.location='home.php?id=home'</script>";
	      	 }else{
	      	 	echo "<script>window.alert('Matrik Error')
				window.location='home.php?id=home'</script>";
	      	 }
    	}
  		
  	}
}
}else{
	echo "<script>window.alert('Terjadi Kesalahan')
	window.location='home.php?id=home'</script>";
}
 }else{
	echo "<script>window.alert('Terjadi Kesalahan')
	window.location='home.php?id=home'</script>";
 }
 }
?>