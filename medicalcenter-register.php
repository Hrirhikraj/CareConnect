<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Medical Center Register</h3>
					      <form method="post" action="" enctype="multipart/form-data">
                          <div>
						    	<span><label>Medical Center Name</label></span>
						    	<span><input name="mname" type="text" class="textbox" required></span>
						    </div>
							
							
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input name="memail" type="email" class="textbox" required></span>
						    </div>
							<!---728x90--->
						    <div>
						     	<span><label>Phone</label></span>
						    	<span><input name="mphone" type="text" class="textbox" required></span>
						    </div>
                            
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="muname" type="text" class="textbox" required></span>
						    </div>
						    							<!---728x90--->
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="mupass" type="password" class="textbox" required></span>
						    </div>
							
							<div>
						    	<span><label>Medical Center Proof</label></span>
						    	<span><input name="mproof" type="file" class="textbox" required></span>
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

$mname=$_POST['mname'];
$memail=$_POST['memail'];
$mphone=$_POST['mphone'];
$muname=$_POST['muname'];
$mupass=$_POST['mupass'];

$mproof=$_FILES['mproof']['name'];
$mrdate=date("Y-m-d");

$color_code=$_POST['color_code'];
echo $color_code=substr($color_code,1);


$con=mysql_query("select * from medical_center where muname='$muname' and mupass='$mupass' and memail='$memail' and mphone='$mphone' and mname='$mname'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Medical Center account already registered")</script>';
}
else
{
move_uploaded_file($_FILES['mproof']['tmp_name'],"upload/$mproof");

mysql_query("insert into medical_center(mname,memail,mphone,muname,mupass,color_code,mproof,mrdate)values('$mname','$memail','$mphone','$muname','$mupass','$color_code','$mproof','$mrdate')")or die(mysq_error());
echo '<script type="text/javascript">alert("Medical Center account registered successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=medical-login.php">';
}
}
?>
<?php include "footer.php"; ?>
