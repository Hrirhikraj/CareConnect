<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Admin Login</h3>
					      <form method="post" action="">
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="aname" type="text" class="textbox"></span>
						    </div>
						    							<!---728x90--->
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="apass" type="password" class="textbox"></span>
						    </div>
						    
														
						   <div>
						   		<span><input type="submit" value="Login" name="submit"></span>
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
$aname=$_POST['aname'];
$apass=$_POST['apass'];


if(($aname=='admin')&&($apass=='admin'))
{
$_SESSION['aid']='admin';
echo '<script type="text/javascript">alert("Admin logged in successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=adashboard.php">';
}
else
{
echo '<script type="text/javascript">alert("Admin details mismatch")</script>';
}
}
?>
<?php include "footer.php"; ?>
