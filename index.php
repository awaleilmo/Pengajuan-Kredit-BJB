<?php
session_start();
if(!isset($_SESSION['email'])) {
			
}else{
	header("location:home.php?id=home");
}
if(!isset($_SESSION['admin'])){
	

}else{
header("location:admin.php"); 
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>bjb Kredit Mikro Utama</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.resizable.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>
<style>
input { 
	width:100%;
	height: 35px;
    border: 1px;
    border-bottom: 2px grey solid;
	font-size:18px;
	}
input:-webkit-autofill{
	border-bottom: 2px #0A00FF solid;
	}
input:focus{
	border-bottom: 2px #0A00FF solid;
	outline:0px;
	}
	 #slideshow { 
    margin: 50px auto; 
	margin-left:5%; margin-top:7%;
    position: relative; 
    width: 50%; 
    height: 350px; 
    padding: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.4);
	float:left; 
}

#slideshow > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}
</style>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000).next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
	},  3000);
$(function() {
	$( "#Dialog1" ).dialog(); 
});
</script>

</head>

<body style="margin:0px; background-image:url(image/back1.jpg); background-repeat:repeat; height:100%">
<table width="100%" align="center" bgcolor="#FFFFFF" style=" background-color: #00E3FF; box-shadow:0px 0px 5px 0px">
<tr>
<td width="40%">
  <img src="image/images.png" width="20%" height="20%" /></td>
  <td align="left">
  <label style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px; ">bjb Kredit Mikro Utama</label>
  </td>
  </tr></table>
<div class="container">
<div class="page-header">
<div id="slideshow">
<div><img src="image/bjb2-900.jpg" width="100%" height="350" alt=""/></div>
<div><img src="image/umkm.jpg" width="100%" height="350" alt=""/></div>
<div><img src="image/kmu-500x235-042018.jpg" width="100%" height="350" alt=""/></div>
</div>
<form method="get" action="index.php" style="width:100%">
<table id="tabuser" align="center" cellpadding="10" cellspacing="2" style=" width:25%; background-color:white; border-radius:3px; float:right; margin-top:7%; margin-right:10%; box-shadow:1px 1px 5px 1px grey">
  <tbody>
    <tr>
      <td align="center">
      <h5><label style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:24px">Please Login</label></h5>
      </td>
      </tr>
    <tr>
      <td><span id="user" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">ID User</span></td>
      </tr>
    <tr>
      <td><input name="username" type="text" autofocus required id="username" placeholder="ID User"></td>
      </tr>
      <tr><td>
       <button name="lanjut" id="lanjut" 
      class="ui-button ui-state-default ui-corner-all ui-button-text-only" style="    width: 30%;
    padding: 2%;"><strong>Lanjut</strong></button></td></tr>
   </tbody>
   </table>
   </form>
   <?php
   	include"koneksi.php";
	if(isset($_GET['lanjut'])){
		$id_user=$_GET['username'];
		$mdb=mysql_query("select * from user where id_user='$id_user'");
		$cek = mysql_num_rows($mdb);
		if($cek > 0 or $id_user=="admin"){
		?><script>
		$(document).ready(function(e) {
			$("#tabpass").show('fast');
			$("#tabuser").hide('fast');
			$("#username1").val("<?php echo $id_user; ?>");
		});
		</script><?php
		}else{
			echo "<div id='Dialog1'><center><strong>ID User Tidak Terdaftar</strong></center></div>
				  <script>$(document).click(function(e) {
        window.location='index.php'
    });</script>";
		}
	}
?>
   <form method="post" action="loginproses.php" style="width:100%">
   <table id="tabpass" hidden="true" align="center" cellpadding="10" cellspacing="2" style=" width:25%; background-color:white; border-radius:3px; float:right; margin-top:7%; margin-right:10%; box-shadow:1px 1px 5px 1px grey">
  <tbody>
  <tr>
      <td align="center">
      <h5><label style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:24px">Please Input Your Password</label></h5>
      </td>
      </tr>
    <tr>
    <tr>
      <td></td>
      </tr>
    <tr>
      <td>
      <input name="username1" type="text" id="username1" style="display:none">
      <input name="password" type="password" autofocus id="password" placeholder="Password"></td>
      </tr>
    <tr>
      <td>
      <button id="Button1" name="loginbutton"><strong>Login</strong></button>
      </td>
      </tr>
  </tbody>
</table>
</form>
</div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
</script>
</body>
</html>