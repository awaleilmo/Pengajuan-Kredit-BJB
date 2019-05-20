<?php
include"koneksi.php";
		$iduser=$_GET['set'];
		$mdb=mysql_query("delete from user where id_user='$iduser'");
		if($mdb){
			echo "<script>window.location='admin.php'</script>";
		}else{
			echo "<script>window.alert('Gagal Dihapus')
			window.location='admin.php'</script>";
		}
?>