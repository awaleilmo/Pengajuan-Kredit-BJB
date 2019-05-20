
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
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
<style>
* {
  box-sizing: border-box;
}


.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}


input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
body{
  font-size: 18px;
  margin-left: -15px;
}
h1, .h1{
	margin-bottom:5px;
	margin-top:5px;
	font-size: 25px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
		$("#nama").autocomplete({
		minLength:1,
		source:"autocomplete.php",
		delay:100
	});
			
});
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}
</script>
<form autocomplete="off" action="simpanKriteria.php" method="post">
<table style="width:80%; margin-bottom:4%; margin-top:5%" height="100%" border="0" align="center" cellpadding="1" class="table-responsive table">
  <tbody>
    <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>Character</h1></th>
      </tr>
    <tr>
      <td><label for="platfond">Id Nasabah  </label>
      
        <input name="nama" type="text" required="required" id="nama" style="float:right" autocomplete="on" >
     
        </td>
      </tr>
    <tr>
      <td><label for="Kerja">KTP</label>
        <input name="KTP" type="text" required="required" id="KTP" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreKTP" required id="scoreKTP" style="float:right">
          <option></option>
          <option value="10">Elektrik</option>
          <option value="1">Surat Keterangan</option>
        </select></td>
      </tr>
    <tr>
      <td><label for="Barang">KK</label>
        <input name="KK" type="text" required="required" id="KK" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreKK" required id="scoreKK" style="float:right">
        <option></option>
  		<option value="10">ADA</option>
		<option value="1">TIDAK</option>
		</select></td>
      </tr>
    <tr>
      <td><label>NPWP</label>
        <input name="NPWP" type="text" required="required" id="NPWP" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreNPWP" required id="scoreNPWP" style="float:right">
        	<option></option>
          <option value="10">ADA</option>
          <option value="1">TIDAK</option>
        </select></td>
      </tr>
    <tr>
      <td><label for="Suratnikah">Surat Nikah / Akta Cerai</label>
        <input name="Suratnikah" type="text" required="required" id="Suratnikah" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreSuratnikah" required id="scoreSuratnikah" style="float:right">
        <option></option>
  <option value="10">ADA</option>
  <option value="1">TIDAK</option>
</select></td>
      </tr>
    <tr>
      <td><label for="Tanggungan">Tanggungan</label>
        <input name="Tanggungan" type="text" required="required" id="Tanggungan" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreTanggungan" required id="scoreTanggungan" style="float:right">
        <option></option>
  <option value="10">0 - 1</option>
  <option value="7">2 - 3</option>
  <option value="5">4 - 5</option>
  <option value="3">6 - 7</option>
  <option value="1">&gt;7</option>
</select></td>
      </tr>
   <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>Capacity</h1></th>
      </tr>
    <tr>
      <td><label for="platfond">Penghasilan Usaha</label>
        <input name="Usaha" type="text" required="required" id="Usaha" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreUsaha" required id="scoreUsaha" style="float:right">
        <option></option>
          <option value="10">Layak</option>
          <option value="1">Tidak</option>
        </select>
      </td>
      </tr>
    <tr>
      <td><label for="Kerja">Penghasilan Kerja</label>
        <input name="Kerja" type="text" required="required" id="Kerja" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreKerja" required id="scoreKerja" style="float:right">
        	<option></option>
          <option value="10">&gt; 10.000.000</option>
          <option value="7">10.000.000 - 5.000.000</option>
          <option value="5">5.000.000 - 3.000.000</option>
          <option value="3">3.000.000 - 1.500.000</option>
          <option value="1">&lt; 1.500.000</option>
        </select></td>
      </tr>
    <tr>
      <td><label for="Barang">Persediaan Barang Usaha</label>
        <input name="Barang" type="text" required="required" id="Barang" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreBarang" required id="scoreBarang" style="float:right">
        <option></option>
  <option value="10">ADA</option>
  <option value="1">TIDAK</option>
</select></td>
      </tr>
       <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>Capital</h1></th>
      </tr>
    <tr>
      <td><label for="platfond">Laporan Keuangan</label>
        <input name="Keuangan" type="text" required="required" id="Keuangan" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreKeuangan" required id="scoreKeuangan" style="float:right">
        <option></option>
          <option value="10">ADA</option>
          <option value="1">TIDAK</option>
        </select>
      </td>
      </tr>
    <tr>
      <td><label for="Kerja">Laba Rugi</label>
        <input name="Laba" type="text" required="required" id="Laba" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreLaba" required id="scoreLaba" style="float:right">
        <option></option>
          <option value="10">ADA</option>
          <option value="1">TIDAK</option>
        </select></td>
      </tr>
    <tr>
      <td><label for="Barang">Struktur Pemodalan</label>
        <input name="Pemodalan" type="text" required="required" id="Pemodalan" style="float:right" autocomplete="on" hidden="true">
        <select name="scorePemodalan" id="scorePemodalan" style="float:right">
        <option></option>
  <option value="10">ADA</option>
  <option value="1">TIDAK</option>
</select></td>
      </tr>
      <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>Condition Of Economy</h1></th>
      </tr>
    <tr>
      <td><label for="platfond">Domisili Usaha</label>
        <input name="Domisili" type="text" required="required" id="Domisili" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreDomisili" required id="scoreDomisili" style="float:right">
        <option></option>
          <option value="10">Layak</option>
          <option value="1">Tidak</option>
        </select>
      </td>
    </tr>
    <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>Colleteral</h1></th>
      </tr>
    <tr>
      <td><label for="platfond">Agunan</label>
        <input name="Agunan" type="text" required="required" id="Agunan" style="float:right" autocomplete="on" hidden="true">
        <select name="scoreAgunan" required id="scoreAgunan" style="float:right">
        <option></option>
          <option value="10">Tanah &amp; Bangunan</option>
          <option value="7">Tanah Kosong / Sawah</option>
          <option value="5">Kios / Dasaran / Los / Lapak / Lain Sejenis</option>
          <option value="3">Kendaraan Bermotor</option>
          <option value="1">Depostio</option>
        </select></td>
    </tr>
    <tr>
    <td>
    <button name="simpan" class="btn">Simpan</button>
    </td>
    </tr>
    </tbody>
</table>
</form>