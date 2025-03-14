<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Hospital dashboard</h3>
					
					<form method="post" action="">
					    	<div>
						    	<span><label>Patient</label></span>
						    	<span>
								<select name="pname">
								<option value="">Select Patient</option>
								<?php
								$u=mysql_query("select * from attribute");
								while($i=mysql_fetch_array($u))
								{
								$ptnm=$i['ptnm'];
								echo "<option value='$ptnm'>$ptnm</option>";
								}
								
								?>
								</select>
								
								</span>
						    </div>
							
								<div>
						    	<span><label>Doctor</label></span>
						    	<span>
								<select name="dname">
								<option value="">Select Doctor</option>
								<?php
								$r=mysql_query("select * from doctor");
								while($e=mysql_fetch_array($r))
								{
								$dname=$e['dname'];
								echo "<option value='$dname'>$dname</option>";
								}
								
								?>
								</select>
								
								</span>
						    </div>
							
						    							<!---728x90--->
						    <div>
						     	<span><label>Appointment Reason</label></span>
						    	<span><input name="areason" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>Appointment Date</label></span>
						    	<span><input name="adate" type="text" class="textbox" value="<?php echo date('Y-m-d'); ?>"></span>
						    </div>


						    <div>
						     	<span><label>Appointment Time</label></span>
						    	<span><input name="atime" type="text" class="textbox" value="<?php echo date('H:i:s'); ?>"></span>
						    </div>

							
						   <div>
						   		<span><input type="submit" value="Fix Appointment" name="submit"></span>
						  </div>
					    </form>
					 <!--<table align="left" cellpadding="10" cellspacing="0" border="1">
                     <thead><tr><td>S.no</td><td>Name</td><td>Gender</td><td>Age</td><td>Smoking</td><td>Alcohol</td><td>Exercise</td><td>weight</td><td>Stress</td><td>Tobacco</td><td>Sugar</td><td>Pressure</td></tr></thead>
                     
                     <tbody>
                     <?php
					 $con=mysql_query("select * from attribute")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
$c=1;
while($r=mysql_fetch_array($con))
{
$pname=$r['ptnm'];
$age=$r['age'];
$gender=$r['gender'];
$smoking=$r['smoking'];
$drink=$r['drink'];
$exercise=$r['exercise'];
$hypertension=$r['hypertension'];
$hereditary=$r['hereditary'];
$weight=$r['weight'];
$stress=$r['stress'];
$heart_beat=$r['heart_beat'];
$tobacco=$r['tobacco'];
$sugar=$r['sugar'];
$bp=$r['bp'];

echo "<tr><td>$c</td><td>$pname</td><td>$gender</td><td>$age</td><td>$smoking</td><td>$drink</td><td>$exercise</td><td>$weight</td><td>$hypertension</td><td>$tobacco</td><td>$sugar</td><td>$bp</td></tr>";
$c++;
					 }
					 }
					 else
					 {
					 }
					 ?>
                     </tbody>
                     </table>-->    
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
$dname=$_POST['dname'];
$areason=$_POST['areason'];
$adate=$_POST['adate'];
$atime=$_POST['atime'];

$con=mysql_query("select * from appointment where pname='$pname' and adate='$adate' and atime='$atime' and dname='$dname'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Appointment already registered")</script>';
}
else
{
mysql_query("insert into appointment(pname,dname,adate,areason,atime)values('$pname','$dname','$adate','$areason','$atime')")or die(mysq_error());
echo '<script type="text/javascript">alert("Appointment registered successfully")</script>';
}
}
?>
<?php include "footer.php"; ?>
