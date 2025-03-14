<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Hospital Register</h3>
					      <form method="post" action="" enctype="multipart/form-data">
                          <div>
						    	<span><label>Hospital Name</label></span>
						    	<span><input name="hname" type="text" class="textbox" required></span>
						    </div>
							
							
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input name="hemail" type="email" class="textbox" required></span>
						    </div>
							<!---728x90--->
						    <div>
						     	<span><label>Phone</label></span>
						    	<span><input name="hphone" type="text" class="textbox" required></span>
						    </div>
                            
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="huname" type="text" class="textbox" required></span>
						    </div>
						    							<!---728x90--->
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="hupass" type="password" class="textbox" required></span>
						    </div>
						    
							
							<div>
						    	<span><label>Hospital Proof</label></span>
						    	<span><input name="hproof" type="file" class="textbox" required></span>
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

$hname=$_POST['hname'];
$hemail=$_POST['hemail'];
$hphone=$_POST['hphone'];
$huname=$_POST['huname'];
$hupass=$_POST['hupass'];
$hproof=$_FILES['hproof']['name'];
$hrdate=date("Y-m-d");

$color_code=$_POST['color_code'];
echo $color_code=substr($color_code,1);


$con=mysql_query("select * from hospital where huname='$huname' and hupass='$hupass' and hemail='$hemail' and hphone='$hphone' and hname='$hname'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Hospital account already registered")</script>';
}
else
{
move_uploaded_file($_FILES['hproof']['tmp_name'],"upload/$hproof");
mysql_query("insert into hospital(hname,hemail,hphone,huname,hupass,color_code,hproof,hrdate)values('$hname','$hemail','$hphone','$huname','$hupass','$color_code','$hproof','$hrdate')")or die(mysq_error());
echo '<script type="text/javascript">alert("Hospital registered successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=hospital-login.php">';
}
}
?>
<?php include "footer.php"; ?>
