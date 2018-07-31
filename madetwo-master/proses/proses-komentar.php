<?php 
	session_start();
	include 'config.php';

		$pesan =  $_POST['pesan'];
		$nama = $_POST['nama'];
		$date = date('d-m-Y');
			
		$sql = $conn -> query("INSERT INTO chat(nama_user, isi, tanggal) VALUES('$nama','$pesan','$date')");

		if($sql){
			
		}	
		
 ?>
