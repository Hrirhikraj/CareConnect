<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Doctor Register</h3>
					      <form method="post" action="" enctype="multipart/form-data">
                          <div>
						    	<span><label>Doctor Name</label></span>
						    	<span><input name="dfname" type="text" class="textbox" required></span>
						    </div>
							
							
							<div>
						    	<span><label>Doctor Id</label></span>
						    	<span><input name="docid" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input name="demail" type="email" class="textbox" required></span>
						    </div>
							<!---728x90--->
						    <div>
						     	<span><label>Phone</label></span>
						    	<span><input name="dphone" type="text" class="textbox" required></span>
						    </div>
                            
                            <div>
						    	<span><label>Specialization</label></span><br>
						    	<span>
								<input name="specialist" type="text" class="textbox" required>
								</span>
						    </div>
							
							
						<div>
						    	<span><label>Hospital name</label></span><br>
						    	<span>
								<input name="hname" type="text" class="textbox" required>
								</span>
						    </div>

     <div>
						    	<span><label>Experience</label></span><br>
						    	<span>
								<input name="exp" type="text" class="textbox" required>
								</span>
						    </div>
							
							
							     <div>
						    	<span><label>Dob</label></span><br>
						    	<span>
								<input name="dob" type="text" class="textbox" required value="<?php echo date("Y-m-d"); ?>">
								</span>
						    </div>
														
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="dname" type="text" class="textbox" required></span>
						    </div>
						    							<!---728x90--->
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="dpass" type="password" class="textbox" required></span>
						    </div>
							
							<div>
						    	<span><label>Doctor Proof</label></span>
						    	<span><input name="dproof" type="file" class="textbox" required></span>
						    </div>
							
							<div>
						     	<span><label>Color code</label></span>
						    	<span>
								<?php
								$i=rand(1,3);
								if($i==1)
								{
								echo "<input type='button' name='c[]' value='c1' id='c1' onclick='clr(this.value)' />";
								echo "<input type='button' name='c[]' value='c2' id='c2' onclick='clr(this.value)' />";
								echo "<input type='button' name='c[]' value='c3' id='c3' onclick='clr(this.value)' />";
								}
								else if($i==2)
								{
								echo "<input type='button' name='c[]' value='c4' id='c4' onclick='clr(this.value)' />";
								echo "<input type='button' name='c[]' value='c5' id='c5' onclick='clr(this.value)' />";
								echo "<input type='button' name='c[]' value='c6' id='c6' onclick='clr(this.value)' />";
								}
								else if($i==3)
								{
								echo "<input type='button' name='c[]' value='c7' id='c7' onclick='clr(this.value)' />";
								echo "<input type='button' name='c[]' value='c8' id='c8' onclick='clr(this.value)' />";
								echo "<input type='button' name='c[]' value='c9' id='c9' onclick='clr(this.value)' />";
								}
								?>
								<input type="hidden" id="color" name="color_code" />
								</span>
								
								
								</span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Register" name="submit"></span>
                                
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

$specialist=$_POST['specialist'];
$dfname=$_POST['dfname'];
$demail=$_POST['demail'];
$dphone=$_POST['dphone'];
$dname=$_POST['dname'];
$dpass=$_POST['dpass'];
$docid=$_POST['docid'];
$hname=$_POST['hname'];
$exp=$_POST['exp'];
$dob=$_POST['dob'];
$dproof=$_FILES['dproof']['name'];
$color_code=$_POST['color_code'];
echo $color_code=substr($color_code,1);

$drdate=date("Y-m-d");


$con=mysql_query("select * from doctor where dname='$dname' and dpass='$dpass' and dphone='$dphone' and demail='$demail' and specialist='$specialist'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Doctor account already registered")</script>';
}
else
{
move_uploaded_file($_FILES['dproof']['tmp_name'],"upload/$dproof");

mysql_query("insert into doctor(dfname,demail,dphone,dname,dpass,specialist,docid,hname,exp,dob,color_code,dproof,drdate)values('$dfname','$demail','$dphone','$dname','$dpass','$specialist','$docid','$hname','$exp','$dob','$color_code','$dproof','$drdate')")or die(mysq_error());
echo '<script type="text/javascript">alert("Doctor  account registered successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=doctor-login.php">';
}
}
?>
<?php include "footer.php"; ?>
