$(document).ready(function(){
    $("select").change(function(){
     	if (document.getElementById("select").value=="Pilih Tanggal") {
			document.getElementById("tgl").innerHTML = "<label for='tampil'>Pilih Tanggal</label><input type='date' class='form-control' style='width: 200px;'></input>";
		}
		else{
			document.getElementById("tgl").innerHTML = ""
		}
    });
});