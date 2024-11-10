<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Add Employee</h3>
					      <form method="post" action="">
                          <div>
						    	<span><label>Employee</label></span>
						    	<span><input name="emp_name" type="text" class="textbox" required></span>
						    </div>
							
							<div>
						    	<span><label>Email</label></span>
						    	<span><input name="emp_mail" type="email" class="textbox" required></span>
						    </div>
							<!---728x90--->
						    <div>
						     	<span><label>Phone</label></span>
						    	<span><input name="emp_phone" type="text" class="textbox" required></span>
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

$emp_name=$_POST['emp_name'];
$emp_mail=$_POST['emp_mail'];
$emp_phone=$_POST['emp_phone'];



$con=mysql_query("select * from employee where emp_name='$emp_name' and emp_mail='$emp_mail' and emp_phone='$emp_phone'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("employee already added")</script>';
}
else
{
mysql_query("insert into employee(emp_name,emp_mail,emp_phone)values('$emp_name','$emp_mail','$emp_phone')")or die(mysq_error());
$eid=mysql_insert_id();

echo '<script type="text/javascript">alert("employee added successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=emplyeeprofile.php?eid='.$eid.'">';
}
}
?>
<?php include "footer.php"; ?>
