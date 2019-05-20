<form action="simpanpemohon.php" method="post">
<table style="width:80%; margin-bottom:4%; margin-top:5%" height="100%" border="0" align="center" cellpadding="1" class="table">
  <tbody>
  	<tr>
      <td><label for="KTP">Kantor Cabang</label>
        <input name="kantorcabang" type="text" required="required" id="kantorcabang" style="float:right" autocomplete="on">
      </td>
      </tr>
    <tr>
      <td><label for="KK">Kantor Cabang Pembantu</label>
          <input name="kantorpembantu" type="text" required="required" id="kantorpembantu" style="float:right" autocomplete="on">
      </td>
      </tr>
    <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>1. INFORMASI POKOK</h1></th>
      </tr>
    <tr>
      <td><label for="nama">Nama</label>
        <input name="nama" type="text" required="required" id="nama" style="float:right" autocomplete="on"></td>
      </tr>
    <tr>
      <td><label for="KTP">Tempat/Tgl Lahir</label>
        <input name="tanggal" type="date" id="tanggal" style="float:right">
        <input name="tempat" type="text" required="required" id="tempat" style="float:right" autocomplete="on"></td>
      </tr>
    <tr>
      <td><label for="KK">No KTP</label>
        <input name="ktp" type="text" required="required" id="ktp" style="float:right" autocomplete="on">
      </td>
    </tr>
    <tr>
      <td><label for="KK">NPWP</label>
        <input name="npwp" type="text" required="required" id="npwp" style="float:right" autocomplete="on">
      </td>
    </tr>
    <tr>
      <td><label>Alamat</label>
      <textarea name="alamat" required id="alamat" style="float:right; width:70%; height:80%">
      </textarea>
      <input name="kodepos" type="text" id="kodepos" placeholder="Kode Pos:" style="float:right; width:35%">
      <input name="kab" type="text" id="kab" placeholder="Kab/Kotamadya:" style="float:right; width:35%">
      </td>
      </tr>
    <tr>
      <td><label for="warganegara">Telpon Rumah</label>
        <input name="telp" type="text" required="required" id="telp" style="float:right" autocomplete="on"></td>
      </tr>
    <tr>
      <td>
      <label for="KK">HP</label>
      <input name="hp" type="text" required="required" id="hp" style="float:right" autocomplete="on"></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Kewarganegaraan</label>
      <select name="warganegara" id="warganegara" style="float:right">
        <option value="WNA">WNA</option>
        <option value="WNI">WNI</option>
      </select></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Status</label>
      <select name="status" id="status" style="float:right">
        <option value="Menikah">Menikah</option>
        <option value="Janda/Duda">Janda/Duda</option>
        <option value="Belum Menikah">Belum Menikah</option>
      </select></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Jumlah Tanggungan</label>
      <select name="jmlhtanggungan" id="jmlhtanggungan" style="float:right">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Pendidikan Terakhir</label>
      <select name="pendidikan" id="pendidikan" style="float:right">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="DIPLOMA">DIPLOMA</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Nama Ibu Kandung</label>
      <input name="namaibu" type="text" required="required" id="namaibu" style="float:right" autocomplete="on"></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Nama Saudara Kandung Yang Dapat Dihubungi dan Tidak serumah</label>
      <input name="namasaudara" type="text" id="namasaudara" style="float:right" autocomplete="on"></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Alamat</label>
      <textarea name="alamatibu" required id="alamatibu" style="float:right; width:70%; height:80%">
      </textarea>
      <input name="kodeposibu" type="text" id="kodeposibu" placeholder="Kode Pos:" style="float:right; width:35%">
      <input name="kabibu" type="text" id="kabibu" placeholder="Kab/Kotamadya:" style="float:right; width:35%"></td>
    </tr>
    <tr>
      <td>
      <label for="KK">Telpon Rumah</label>
      <input name="telpibu" type="text" required="required" id="telpibu" style="float:right" autocomplete="on"></td>
    </tr>
    <tr>
      <td>
      <label for="KK">HP</label>
      <input name="hpibu" type="text" required="required" id="hpibu" style="float:right" autocomplete="on"></td>
    </tr>
     <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>2. INFORMASI TEMPAT TINGGAL</h1></th>
      </tr>
      <tr>
          <td>
      <label for="KK">Status Tempat Tinggal</label>
        <select name="statustempat" id="statustempat" style="float:right">
          <option value="Sewa/Kontrak">Sewa/Kontrak</option>
          <option value="Orang Tua/Saudara">Orang Tua/Saudara</option>
          <option value="Mencicil">Mencicil</option>
          <option value="Milik Sendiri">Milik Sendiri</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>
      <label for="KK">Lama Menetap</label>
      <input name="lamamenetap" type="text" required="required" id="lamamenetap" placeholder="Tahun" style="float:right" autocomplete="on"></td>
    </tr>
      <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>3. INFORMASI USAHA</h1></th>
      </tr>
      <tr>
            <td>
      <label for="KK">Lama Usaha</label>
        <input name="lamausaha" type="text" required="required" id="lamausaha" placeholder="Tahun" style="float:right" autocomplete="on">
      </td>
    </tr>
    <tr>
      <td>
      <label for="KK">Jenis Usaha</label>
      <select name="jenisusaha" id="jenisusaha" style="float:right">
        <option value="Pertanian">Pertanian</option>
        <option value="Jasa">Jasa</option>
        <option value="Industri">Industri</option>
        <option value="Perdagangan">Perdagangan</option>
        <option value="Lainya">Lainnya</option>
      </select></td>
    </tr>
    <tr>
          <td>
      <label for="KK">Jenis Produk</label>
      <textarea name="produk" required id="produk" style="float:right; width:70%; height:80%">
      </textarea></td>
         </tr>
         <tr>
          <td>
      <label for="KK">Sistem Penjualan</label>
        <select name="sistempenjualan" id="sistempenjualan" style="float:right">
          <option value="Konsinyasi/Bagi Hasil">Konsinyasi/Bagi Hasil</option>
          <option value="Kredit">Kredit</option>
          <option value="Kredit &amp; Tunai">Kredit &amp; Tunai</option>
          <option value="Tunai">Tunai</option>
        </select>
      </td>
      </tr>
       <tr>
          <td>
      <label for="KK">Kepemilikan Tempat Usaha</label>
        <select name="kepemilikan" id="kepemilikan" style="float:right">
          <option value="Sewa">Sewa</option>
          <option value="Cicil">Cicil</option>
          <option value="Milik Sendiri">Milik Sendiri</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </td>
      </tr>
       <tr>
          <td>
      <label for="KK">Lokasi Usaha</label>
        <select name="lokasiusaha" id="lokasiusaha" style="float:right">
          <option value="Lain-Lain">Lain-Lain</option>
          <option value="Berpindah-pindah">Berpindah-pindah</option>
          <option value="Mangkal / Non Permanen">Mangkal / Non Permanen</option>
          <option value="Permanen">Permanen</option>
        </select>
      </td>
      </tr>
       <tr>
          <td>
      <label for="KK">Daerah Pemasaran</label>
        <select name="pemasaran" id="pemasaran" style="float:right">
          <option value="Sekitar Lokasi Usaha">Sekitar Lokasi Usaha</option>
          <option value="Kelurahan/Kecamatan">Kelurahan/Kecamatan</option>
          <option value="Kabupaten/Kotamadya">Kabupaten/Kotamadya</option>
          <option value="Regional/Provinsi">Regional/Provinsi</option>
          <option value="Nasional">Nasional</option>
          <option value="Ekspor">Ekpor</option>
          <option value="Tidak Ada">Tidak Ada</option>
        </select>
      </td>
      </tr>
       <tr>
          <td>
      <label for="KK">Cabang</label>
        <select name="cabang" id="cabang" style="float:right">
          <option value="Tidak Ada">Tidak Ada</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </td>
      </tr>
       <tr>
          <td>
      <label for="KK">Jumlah Tenaga Kerja</label>
        <input name="jmlhtenagakerja" type="text" required="required" id="jmlhtenagakerja" style="float:right" autocomplete="on">
     </td>
      </tr>
       <tr>
          <td>
      <label for="KK">Penglolaan Keuangan</label><br>
      <label>( <em>diisi oleh petugas bank</em> )</label>
        <select name="penglolaankeuangan" id="penglolaankeuangan" style="float:right; width:65%">
          <option value="Tidak ada pencatatan maupun pemisahan pengelolaan keuangan">Tidak ada pencatatan maupun pemisahan pengelolaan keuangan</option>
          <option value="Terdapat pemisahan pengelolaan keuangan namun tidak terdapat pencatatan atau sebaliknya">Terdapat pemisahan pengelolaan keuangan namun tidak terdapat pencatatan atau sebaliknya</option>
          <option value="Ada pemisahan dan pencatatan dilakukan secara sederhana, namun belum memeiliki laporan keuangan">Ada pemisahan dan pencatatan dilakukan secara sederhana, namun belum memeiliki laporan keuangan</option>
          <option value="Ada pemisahan dan pencatatan dilakukan secara baik serta memiliki laporan keuangan sendiri">Ada pemisahan dan pencatatan dilakukan secara baik serta memiliki laporan keuangan sendiri</option>
        </select>
      </td>
      </tr>
      <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>4. HUBUNGAN DENGAN PERBANKAN/LEMBAGA LAINYA</h1></th>
      </tr>
      <tr>
        <td>
      <label for="KK">Nasabah/Debitur Bank ?</label>
        <select name="debitur" id="debitur" style="float:right">
          <option value="Belum Pernah">Belum Pernah</option>
          <option value="Kurang Dari 1 Tahun">Kurang Dari 1 Tahun</option>
          <option value="Diatas 1 Tahun Sampai Dengan 3 Tahun">Diatas 1 Tahun Sampai Dengan 3 Tahun</option>
          <option value="Lebih Dari 3 Tahun">Lebih Dari 3 Tahun</option>
        </select>
      </td>
      </tr>
<tr>
        <td>
      <label for="KK">Nama Bank</label>
        <input name="namabank" type="text" id="namabank" style="float:right" autocomplete="on">
     </td>
      </tr>
<tr>
        <td>
      <label for="KK">Jenis Produk / Jasa Bank</label><br>
      <label>( <em>dapat lebih dari 1</em> )</label>
      <table border="0" align="right" class="table" style="width:70%; background-color:transparent">
        <tbody>
          <tr>
            <td width="40%" scope="col" style="border-top:0px">Tabungan
              <input name="jenisproduk" type="checkbox" class="checkbox-inline" id="jenisproduk" style="float: left; position: static;" value="Tabungan"></td>
            <td width="40%" scope="col" style="border-top:0px">Kredit Usaha
              <input name="jenisproduk" type="checkbox" class="checkbox-inline" id="jenisproduk" style="float: left;position: static;" value="Kredit Usaha"></td>
          </tr>
          <tr>
            <td style="border-top:0px">Giro
              <input name="jenisproduk" type="checkbox" class="checkbox-inline" id="jenisproduk" style="float: left;position: static;" value="Giro"></td>
            <td style="border-top:0px">Kredit Konsumtif / KPR /Multiguna
              <input name="jenisproduk" type="checkbox" class="checkbox-inline" id="jenisproduk" style="float: left;position: static;" value="Kredit Konsumtif / KPR / Multiguna"></td>
          </tr>
          <tr>
            <td style="border-top:0px">Deposito
              <input name="jenisproduk" type="checkbox" class="checkbox-inline" id="jenisproduk" style="float: left;position: static;" value="Deposito"></td>
            <td style="border-top:0px"> Lainnya, Sebutkan
              <input name="jenisproduk" type="text" id="jenisproduk" placeholder="Sebutkan"></td>
          </tr>
        </tbody>
      </table></td>
      </tr>
<tr>
        <td>
      <label for="KK">Pinjaman Dari Bank Lain</label>
      <table width="70%" border="0" align="right" cellpadding="1" cellspacing="1">
  <tbody>
    <tr>
      <td width="50%" align="center">Sisa Pokok</td>
      <td align="center">Jumlah Angsuran</td>
    </tr>
    <tr>
      <td>
        <input name="sisapokok" type="text" id="sisapokok" placeholder="Rp."></td>
      <td><input name="angsuran" type="text" id="angsuran" placeholder="per bulan"></td>
    </tr>
  </tbody>
</table>

      </td>
      </tr>
 <tr>
      <th valign="middle" bgcolor="#00D3FF" scope="col"><h1>5. PERMOHONAN KREDIT</h1></th>
      </tr>
      <tr>
        <td><label for="KK2">Besaran Permohonan</label>
          <input name="besarpermohonan" type="text" id="besarpermohonan" placeholder="Rp." style="float:right">
        </td>
      </tr>
      <tr>
        <td><label for="KK3">Jangka Waktu</label>           
        <input name="jangkawaktu" type="text" id="jangkawaktu" placeholder="Bulan" style="float:right"></td>
      </tr>
      <tr>
        <td><label for="KK4">Tujuan Penggunaan</label>
        <select name="tujuan" id="tujuan" style="float:right">
          <option value="Modal Kerja">Modal Kerja</option>
          <option value="Investasi">Investasi</option>
        </select></td>
      </tr>
      <tr>
        <td><label for="KK5">Jenis Agunan Yang Dimiliki</label><br>
        <label>( <em>dapat lebih dari 1 pilihan</em> ) </label>
        <select name="jenisagunan" id="jenisagunan" style="float:right">
          <option value="Tanah dan/atau Bangunan">Tanah dan/atau Bangunan</option>
          <option value="Kios/Lapak/Los/Toko">Kios/Lapak/Los/Toko</option>
          <option>Kendaraan Bermotor Roda 2</option>
          <option>Kendaraan Bermotor Roda 4</option>
          <option>Lainnya</option>
        </select>
        </td>
      </tr>
      <tr>
        <td><label for="KK6">Bukti Kepemilikan</label>
        <select name="buktikepemilikan" id="buktikepemilikan" style="float:right; width:50%">
          <option value="SHW / SHGB / SHGP">SHW / SHGB / SHGP</option>
          <option value="SPTB / HPK / SIPK">SPTB / HPK / SIPK</option>
          <option value="BPKB">BPKB</option>
          <option value="Giri/Akta Tanah/Letter-c atau bukti kepemilikan lainnya yang sejenis/setingkat">Giri/Akta Tanah/Letter-c atau bukti kepemilikan lainnya yang sejenis/setingkat</option>
        </select>
        </td>
      </tr>
      <tr>
        <td><label for="KK7">Nama Pemilik Agunan</label> <input name="pemilikagunan" type="text" id="pemilikagunan" style="float:right">
</td>
      </tr>
      <tr>
      <td><label for="KK8">Hubungan Dengan Pemohon</label><br>
      <label>( <em>diisi khusus bagi agunan yang bukan atas nama Pemohon</em> ) </label>
      <select name="hubunganpemohon" id="hubunganpemohon" style="float:right">
        <option value="Suami/Istri">Suami/Istri</option>
        <option value="Orang Tua">Orang Tua</option>
        <option value="Saudara Kandung">Saudara Kandung</option>
        <option value="Pihak lainnya yang tidak mempunyau hubungan keluarga">Pihak lainnya yang tidak mempunyau hubungan keluarga</option>
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