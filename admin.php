<?php
session_start();
if(!isset($_SESSION['admin'])) {
 
header("location:index.php");
}else{
$idname = $_SESSION['admin'];
include"koneksi.php";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<link href="jquery-mobile/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.resizable.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	font-family: Arial;
	font-style: normal;
	font-size: 18px;
	color: #000000;
}
</style>
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.dialog.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page" id="page">
  <div data-role="header" style="position: relative; width:100%; top:0; background:#00EBFF; border-bottom:2px #000000 solid">
  <table>
  <tr>
  <td><img src="image/images.png" width="30%" height="20%" /></td>
  <td align="center"><h1 style="color: #000000; text-shadow: 0px 0px #020202; font-size:18px; margin-top:25px;">ADMIN <br>Kredit Mikro Utama <br>PT. Bank Pembangunan Jawa Barat dan Banten Tbk (bjb)</h1>
  </td>
  </tr>
  </table>
  </div>
  <a href="logout.php" data-role="button" target="_self">Logout</a>
  <div data-role="content" style="margin-bottom:35px;">
  	<table width="100%" border="0"  style=" border-collapse:collapse;">
  <tbody>
  <tr>
      <td width="75%" colspan="3" align="left" valign="top">
      <div data-role="collapsible-set">
        <div data-role="collapsible" style="position:static">
          <h3 style="width:12%">Tambah</h3>
          <form method="get" action="admin.php">
          <table width="100%" border="0">
              <tbody>
                <tr>
                  <td><div data-role="fieldcontain">
                    <input name="user" type="text" autofocus required="required" id="user" placeholder="ID User" value=""  />
                  </div></td>
                  <td><div data-role="fieldcontain">
                    <input name="nama" type="text" required="required" id="nama" placeholder="Nama" value=""  />
                  </div></td>
                  <td><div data-role="fieldcontain">
                    <input name="password" type="password" required="required" id="password" placeholder="Password" maxlength="16"  />
                  </div></td>
                  <td>
					<input name="simpan" type="submit" id="simpan" value="Simpan" />
                  </td>
                 
                </tr>
              </tbody>
            </table>
		</form>
        </div>
      </div>
      </td>
      <td align="center" valign="top">
      <form method="get" action="admin.php">
      <div data-role="fieldcontain">
        <input type="search" name="Cari" id="Cari" value=""  />
      </div>
      </form>
      </td>
      </tr>
  </tbody>
  </table>
  <form method="get" action="admin.php">	
	<table width="100%" border="1"  style=" border-collapse:collapse;">
  <tbody>
    <tr>
   	  <th width="5%" scope="col">No</th>
      <th width="23%" scope="col">ID User</th>
      <th width="28%" scope="col">Nama</th>
      <th width="24%" scope="col">Password</th>
      <th width="20%" scope="col">Action</th>
    </tr>
   <?php 
	 if(isset($_GET['simpan'])){
		$iduser=$_GET['user'];
		$nama=$_GET['nama'];
		$pass=$_GET['password'];
		$mdb=mysql_query("INSERT INTO `user`(`id_user`, `nama`, `password`) 		 VALUES('$iduser','$nama','$pass')");
		if($mdb){
			echo "<div id='Dialog1'><center><strong>Berhasil Disimpan</strong></center></div>
				  <script>$(document).click(function(e) {
				  window.location='admin.php'});</script>";
		}else{
			echo "<div id='Dialog1'><center><strong>Gagal Diubah</strong></center></div>
				  <script>$(document).click(function(e) {
				  window.location='admin.php'});</script>";
		}
  	}
	if(isset($_GET['Cari'])){
		$carinya=$_GET['Cari'];
		$dk=mysql_query("select * from user where id_user like '%".$carinya."%' or nama like '%".$carinya."%' or password like '%".$carinya."%'");
	}else{
   		$dk=mysql_query("select * from user");
	}
		$no=1;
		while($tmpl=mysql_fetch_array($dk)){
	if(isset($_GET['ubah'])){
		$idubah=$_GET['set'.$tmpl['id_user'].''];
		$iduserubah=$_GET['id_useredit'.$tmpl['id_user'].''];
		$namaedit=$_GET['namaedit'.$tmpl['id_user'].''];
		$passedit=$_GET['passedit'.$tmpl['id_user'].''];
		$mdb=mysql_query("UPDATE user SET id_user='$iduserubah', nama='$namaedit', password='$passedit' where id_user='$idubah'");
		if($mdb){
			echo "<div id='Dialog1'><center><strong>Berhasil Disimpan</strong></center></div>
				  <script>$(document).click(function(e) {
				  window.location='admin.php'});</script>";
		}else{
			echo "<div id='Dialog1'><center><strong>Gagal Diubah</strong></center></div>
				  <script>$(document).click(function(e) {
				  window.location='admin.php'});</script>";
		}
  	}
   ?>
    <tr>
	  <td align="center" valign="middle"><?php echo $no++ ?></td>
      <td>
        <div data-role="fieldcontain" style="display:none" id="id_useredit<?php echo $tmpl['id_user']; ?>">
          <input type="text" name="id_useredit<?php echo $tmpl['id_user']; ?>"   value="<?php echo $tmpl['id_user']; ?>"  />
          
        </div>	
        <div data-role="fieldcontain" style="display:none">
        <input type="text" name="set<?php echo $tmpl['id_user']; ?>" style=" display:none"  value="<?php echo $tmpl['id_user']; ?>"  /></div>
        <label id="idlabel<?php echo $tmpl['id_user']; ?>" style="margin-left:15px"><?php echo $tmpl['id_user']; ?></label>     
      </td>
      <td><div data-role="fieldcontain" style="display:none" id="namaedit<?php echo $tmpl['id_user']; ?>">
          <input type="text" name="namaedit<?php echo $tmpl['id_user']; ?>"  value="<?php echo $tmpl['nama']; ?>"  />
        </div>	
        <label id="namalabel<?php echo $tmpl['id_user']; ?>" style="margin-left:15px;text-transform: capitalize;"><?php echo $tmpl['nama']; ?></label>
      </td>
      <td>
      <div  id="passedit<?php echo $tmpl['id_user']; ?>" data-role="fieldcontain" style="display:none">
          <input type="text" name="passedit<?php echo $tmpl['id_user']; ?>" value="<?php echo $tmpl['password']; ?>"  />
        </div>	
      <label id="passlabel<?php echo $tmpl['id_user']; ?>" style="margin-left:15px"><?php echo $tmpl['password']; ?></label></td>
      <td align="center">
      <div id="i<?php echo $tmpl['id_user']; ?>" data-role="controlgroup" data-type="horizontal">
      <a href="#" id="edit<?php echo $tmpl['id_user']; ?>" data-role="button">Edit</a>
      <a href="adminproses.php?set=<?php echo $tmpl['id_user']; ?>" data-role="button" target="_blank">Hapus</a>
      </div>
      <div id="c<?php echo $tmpl['id_user']; ?>" hidden="true" data-role="controlgroup" data-type="horizontal">
        <input name="ubah" type="submit" id="ubah" value="Simpan" />
        <a id="batal<?php echo $tmpl['id_user']; ?>" href="#" data-role="button">Batal</a>
      </div>
      
      </td>
    </tr>
    <script>
		$("#edit<?php echo $tmpl['id_user']; ?>").click(function(e) {
            $("#idlabel<?php echo $tmpl['id_user']; ?>").hide('fast');
			$("#namalabel<?php echo $tmpl['id_user']; ?>").hide('fast');
			$("#passlabel<?php echo $tmpl['id_user']; ?>").hide('fast');
			$("#i<?php echo $tmpl['id_user']; ?>").hide('fast');
			$("#id_useredit<?php echo $tmpl['id_user']; ?>").show('fast');
			$("#namaedit<?php echo $tmpl['id_user']; ?>").show('fast');
			$("#passedit<?php echo $tmpl['id_user']; ?>").show('fast');
			$("#c<?php echo $tmpl['id_user']; ?>").show('fast');
        });
		$("#batal<?php echo $tmpl['id_user']; ?>").click(function(e) {
            window.location='admin.php';
        });
		$(function() {
			$( "#Dialog1" ).dialog(); 
		});
	</script>
    <?php } ?>
  </tbody>
</table>
</form>
  </div>
  <div data-role="footer" style="z-index:0; bottom:0; position:fixed; width:100%; background:#00EBFF">
    <h4 style="color: #000000; text-shadow: 0px 0px #020202"><center>
 Copyright &copy; 2018 Bank bjb</center></h4>
  </div>
</div>
</body>
</html>