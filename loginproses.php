<?php
include"koneksi.php"; 
$username = $_POST['username1'];
$password = $_POST['password'];
if(empty($password)){
	
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
	

	session_start();
	$sa=mysql_query("select * from user where id_user='$username' and password='$password'");
	$da=mysql_num_rows($sa);
	if ($da>0){
		$_SESSION['email'] = $username;
		echo '<script>window.history.back()</script>';
	}elseif($username == "admin" and $password == "admin1234"){
		$_SESSION['admin'] = $username;
		echo '<script>window.history.back()</script>';
	}else{		
		echo "<script>window.alert('Password Tidak Benar')
		window.location='index.php'</script>";
	}
}
		
	
?>