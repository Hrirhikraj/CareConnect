<?php include "header.php"; ?>

<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>User Register</h3>
					      <form method="post" action="">
                          <div>
						    	<span><label>Name</label></span>
						    	<span><input name="pname" type="text" class="textbox" required></span>
						    </div>
							

                          <div>
						    	<span><label>Aadhar Id</label></span>
						    	<span><input name="aid" type="text" class="textbox" required></span>
						    </div>
							

							
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input name="uemail" type="email" class="textbox" required></span>
						    </div>
							<!---728x90--->
						    <div>
						     	<span><label>Phone</label></span>
						    	<span><input name="uphone" type="text" class="textbox" required></span>
						    </div>
							
							
							 <div>
						     	<span><label>Address</label></span>
						    	<span>
								<textarea name="addr" required class="textbox"></textarea></span>
						    </div>
                            
							  <div>
						    	<span><label>Dob</label></span><br>
						    	<span>
								<input name="dob" type="text" class="textbox" required value="<?php echo date("Y-m-d"); ?>">
								</span>
						    </div>
							
							 <div>
						    	<span><label>Gender</label></span><br>
						    	<span>
								<select name="gender" class="textbox" required>
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Male">Other</option>
								</select>
								</span>
						    </div>
							
							
							<div>
						    	<span><label>Blood group</label></span><br>
						    	<span>
								<select name="bgroup" class="textbox" required>
							<option value="">Select blood group</option>
							<option value="O+">O+</option>							
							<option value="O-">O-</option>							
							<option value="A+">A+</option>							
							<option value="A-">A-</option>							
							<option value="B+">B+</option>							
							<option value="B-">B-</option>							
							<option value="AB+">AB+</option>							
							<option value="AB-">AB-</option>							
							</select>
								</span>
						    </div>
							
                            
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="uname" type="text" class="textbox" required></span>
						    </div>
						    							<!---728x90--->
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="upass" type="password" class="textbox" required></span>
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
$pname=$_POST['pname'];
$uemail=$_POST['uemail'];
$uphone=$_POST['uphone'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$aid=$_POST['aid'];
$addr=$_POST['addr'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$bgroup=$_POST['bgroup'];
$color_code=$_POST['color_code'];
echo $color_code=substr($color_code,1);

$urdate=date("Y-m-d");


$con=mysql_query("select * from patient where uname='$uname' and upass='$upass'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Patient account already registered")</script>';
}
else
{
mysql_query("insert into patient(pname,uemail,uphone,uname,upass,aid,addr,dob,gender,bgroup,color_code,urdate)values('$pname','$uemail','$uphone','$uname','$upass','$aid','$addr','$dob','$gender','$bgroup','$color_code','$urdate')")or die(mysq_error());
echo '<script type="text/javascript">alert("Patient account registered successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
}
?>
<?php include "footer.php"; ?>

