<?php
session_start();
if(!isset($_SESSION['email'])) {
 }
else { 
$email = $_SESSION['email'];
 }
 
 if(!isset($_SESSION['admin'])) {
 }
else { 
$email1 = $_SESSION['admin'];
 }

require_once("koneksi.php");
;


session_destroy();

echo"<script language='javascript'>document.location='index.php'</script>";

?>