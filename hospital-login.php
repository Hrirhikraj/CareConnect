<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Hospital Login</h3>
					      <form method="post" action="">
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="huname" type="text" class="textbox"></span>
						    </div>
						    							<!---728x90--->
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="hupass" type="password" class="textbox"></span>
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
						   		<span><input type="submit" value="Login" name="submit"></span>
                                <a href="hospital-register.php"><span><input type="button" value="Hospital Register" name=""></span></a>
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
$huname=$_POST['huname'];
$hupass=$_POST['hupass'];

$color_code=$_POST['color_code'];
$color_code=substr($color_code,1);



$con=mysql_query("select * from hospital where huname='$huname' and hupass='$hupass' and color_code='$color_code'  and status='1'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
$cr=mysql_fetch_array($con);
$_SESSION['hname']=$cr['hname'];
$_SESSION['hid']=$cr['hid'];
echo '<script type="text/javascript">alert("Hospital logged in successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=hospital_profile.php">';
}
else
{
echo '<script type="text/javascript">alert("Hospital details mismatch")</script>';
}
}
?>
<?php include "footer.php"; ?>
