<?php include 'config.php';

	$sql = $conn -> query("SELECT * FROM chat order by id desc");
 ?>
                                
<?php while ($rows=$sql -> fetch_assoc()) { ?>
                                        <div class="tampilIsi" id="tampilanIsi"> 
                                            <label><?php echo $rows['nama_user'] ?> : </label>
                                            <br>
                                            <span><?php echo $rows['isi'] ?>
                                            <br>    
                                            <p class="" style="text-align: right;" ><?php echo $rows['tanggal'] ?> </p></span>
                                            <hr>   
                                        </div>
                                    <?php } ?>                                    
                                </div>