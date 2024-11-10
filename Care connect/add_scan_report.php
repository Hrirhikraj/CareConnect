<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Add Scan Report</h3>
					      <form method="post" action="" enctype="multipart/form-data">
                          <?php
$b=mysql_query("select * from scan where sreport=''");
while($h=mysql_fetch_array($b))
{
$pname=$h['pname'];
$dname=$h['dname'];
$spart=$h['spart'];
$pdate=$h['pdate'];
$scid=$h['scid'];

?>

						  <div>
						    	<span><label>Patient</label></span>
						    	<span>
								<select name="patient">
								<option value="">Select Patient</option>
								<?php echo "<option value='$scid'>$pname</option>"; ?>
								</select></span>
						    </div>
						  
						  
						 						
							
							<div>
						    	<span><label>Date</label></span>
						    	<span><input name="sdate" type="text" class="textbox" required value="<?php echo "$pdate"; ?>"></span>
						    </div>
							
							<div>
						    	<span><label>Scan Part</label></span>
						    	<span>
									<input name="spart" type="text" class="textbox" value="<?php echo "$spart"; ?>">
								</span>
						    </div>
							
							<div>
						    	<span><label>Doctor</label></span>
						    	<span>
									<input name="dname" type="text" class="textbox" value="<?php echo "$dname"; ?>">
								</span>
						    </div>
							
							<div>
						    	<span><label>Scan Report</label></span>
						    	<span>
									<input name="sreport" type="file" class="textbox" >
								</span>
						    </div>
							
							

<?php
}
?>						    
						   <div>
						   		<span><input type="submit" value="Add scan" name="submit"></span>
                                
						  </div>
					    </form>
				    </div>
  				</div>
								
  				<div class="clear"></div>			
		  </div>
		  <!---728x90--->
</div>
</div>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
$patient=$_POST['patient'];
$sreport=$_FILES['sreport']['name'];

move_uploaded_file($_FILES['sreport']['tmp_name'],"upload/$sreport");




mysql_query("update scan set sreport='$sreport' where scid='$patient'")or die(mysq_error());

echo '<script type="text/javascript">alert("scan added successfully")</script>';
}
?>
<?php include "footer.php"; ?>
