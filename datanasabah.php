<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/score.js"></script>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.autocomplete.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.menu.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-ui.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.autocomplete.min.js" type="text/javascript"></script>
<form action="home.php?id=nasabah" method="get" style="padding:10px;margin-top:5%">
<label>Id Nasabah</label>
<input name="id" type="text" id="id" value="nasabah" hidden="true">
<input name="idnasabah" type="text" id="idnasabah">
<button id="Button1" name="button" value="cari" class="btn"><strong>Cari</strong></button>
</form>
<script>
$(document).ready(function(){
		$("#idnasabah").autocomplete({
		minLength:1,
		source:"autocomplete.php",
		delay:100
	});
			
});
</script>
<?php
if(isset($_GET['button'])){
	$cari = $_GET['idnasabah'];
}
?>
<table width="100%" border="0" class="table-responsive table table-striped">
  <tbody>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Nasabah</th>
      <th scope="col">Nama</th>
      <th scope="col">No KTP</th>
    </tr>
    	<?php 
	if(isset($_GET['idnasabah'])){
		$cari = $_GET['idnasabah'];
		$data = mysql_query("select * from pemohon where nama_nasabah like '%".$cari."%' or Id_nasabah like '%".$cari."'");				
	}else{
		$data = mysql_query("select * from pemohon");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['Id_nasabah']; ?></td>
      <td><?php echo $d['nama_nasabah']; ?></td>
      <td><?php echo $d['ktp']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
