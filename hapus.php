<?php 
session_start();
if(!isset($_SESSION['email'])) {
 
header("location:index.php");
}else{
$idname = $_SESSION['email'];
include"koneksi.php";
}
$id=$_GET['id'];
$at=mysql_query("DELETE FROM `bjb`.`kriteria` WHERE `kriteria`.`id_nasabah` = '$id'");
	echo '<script>window.history.back()</script>';
