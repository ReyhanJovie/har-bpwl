<?php 	
	
	session_start();
	
	session_destroy();
	unset($_SESSION['nama']);

 ?>

 <script> 
 	alert('Logout Berhasil !');
 	window.location = '../';
</script>