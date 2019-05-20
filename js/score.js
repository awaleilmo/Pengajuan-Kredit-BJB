 $(document).ready(function(){
    $("#scoreKTP").change(function() {
		var str = $("#scoreKTP option:selected");
    	var kss = str.text();
            $("#KTP").val(kss);
    });
    $("#scoreKK").change(function() {
    var str = $("#scoreKK option:selected");
      var kss = str.text();
            $("#KK").val(kss);
    });
    $("#scoreNPWP").change(function() {
    var str = $("#scoreNPWP option:selected");
      var kss = str.text();
            $("#NPWP").val(kss);
    });
    $("#scoreSuratnikah").change(function() {
    var str = $("#scoreSuratnikah option:selected");
      var kss = str.text();
            $("#Suratnikah").val(kss);
    });
    $("#scoreTanggungan").change(function() {
    var str = $("#scoreTanggungan option:selected");
      var kss = str.text();
            $("#Tanggungan").val(kss);
    });
    $("#scoreUsaha").change(function() {
    var str = $("#scoreUsaha option:selected");
      var kss = str.text();
            $("#Usaha").val(kss);
    });
    $("#scoreKerja").change(function() {
    var str = $("#scoreKerja option:selected");
      var kss = str.text();
            $("#Kerja").val(kss);
    });
    $("#scoreBarang").change(function() {
    var str = $("#scoreBarang option:selected");
      var kss = str.text();
            $("#Barang").val(kss);
    });
    $("#scoreKeuangan").change(function() {
    var str = $("#scoreKeuangan option:selected");
      var kss = str.text();
            $("#Keuangan").val(kss);
    });
    $("#scoreLaba").change(function() {
    var str = $("#scoreLaba option:selected");
      var kss = str.text();
            $("#Laba").val(kss);
    });
    $("#scorePemodalan").change(function() {
    var str = $("#scorePemodalan option:selected");
      var kss = str.text();
            $("#Pemodalan").val(kss);
    });
    $("#scoreDomisili").change(function() {
    var str = $("#scoreDomisili option:selected");
      var kss = str.text();
            $("#Domisili").val(kss);
    });
    $("#scoreAgunan").change(function() {
    var str = $("#scoreAgunan option:selected");
      var kss = str.text();
            $("#Agunan").val(kss);
    });
  });