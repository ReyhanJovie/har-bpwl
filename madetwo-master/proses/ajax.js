$(document).ready(function(){

	var url = "http://localhost:8080/keranjaa/har-bpwl-master/madetwo-master/komentar.php";
	// Tampil Data
	function manageData(){
		$.ajax({
		url		 : 'http://localhost:8080/keranjaa/har-bpwl-master/madetwo-master/komentar.php',
		method   : "POST",
		}).done(function (data){
			$('#tampilanIsi').html(data);
		});
	}

	function addPesan (){
		$.ajax({
			url : 'proses-komentar.php',
			method : "POST",
		}).done(function(data){
			$('#tampilanIsi').html(data);
		})
	}

})