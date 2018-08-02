<?php include 'config.php';
	session_start();
	$nama = $_SESSION['nama'];
	$sql = $conn -> query("SELECT * FROM chat order by id desc");

 ?>
                                
<?php while ($rows=$sql -> fetch_assoc()) { ?>
	<?php if($rows['nama_user'] == $nama) { ?>
		<div class="row">
			<div class="col-md-12">
	  			<div class="tampilIsi pull-right" id="tampilanIsi" style=" background: #7dbb26; width: 60%; color: #fff;  "> 
	  				<label><b>You</b> : </label>
	  				<br>
	  				<span><?php echo $rows['isi'] ?>
	  				<br>    
	  				<p class="" style="text-align: right;" ><?php echo $rows['tanggal'] ?> </p></span>
	  				<hr style="background-color: #fff;">   
	  			</div>
	  		</div>
		</div>
		<br>	
<?php } else {?>
  <div class="row">
			<div class="col-md-12">
	  			<div class="tampilIsi pull-left" id="tampilanIsi" style="background: #cdcdcd; width: 60%; color: #444; "> 
	  				<label><?php echo $rows['nama_user'] ?> : </label>
	  				<br>
	  				<span><?php echo $rows['isi'] ?>
	  				<br>    
	  				<p class="" style="text-align: right;" ><?php echo $rows['tanggal'] ?> </p></span>
	  				<hr>   
	  			</div>
	  		</div>
		</div>
		<br>	
<?php } ?>
  <?php } ?>                                    
</div>