<?php include "header.php"; 
$areason=$_GET['areason'];
$pname=$_GET['pname'];

?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Prescription</h3>
					      <form method="post" action="">
					    	<div>
						    	<span><label>Reason</label></span>
						    	<span><input name="reason" type="text" class="textbox" value="<?php echo $areason; ?>"></span>
						    </div>
							
							<div>
						    	<span><label>Medicine</label></span>
						    	<span>
								<?php
								$cdate=date("Y-m-d");
								$con=mysql_query("select * from medicine where msuite='$areason' and edate>'$cdate'")or die(mysq_error());
								while($hr=mysql_fetch_array($con))
		  						{
								$med_name=$hr['med_name'];
								echo "<input type='checkbox' name=medicine[] value='$med_name'>$med_name";
								}
								?>
								
								</span>
						    </div>
							
							<div>
						    	<span><label>Medicine Intake</label></span>
						    	<span>
								<input type="checkbox" value="morning" name="intake[]" />morning
								<input type="checkbox" value="afternoon" name="intake[]" />afternoon
								<input type="checkbox" value="night" name="intake[]" />night
								</span>
						    </div>
							
							
							<div>
						    	<span><label>Total Days</label></span>
						    	<span>
								<input name="tdays" type="text" class="textbox" value="">
								</span>
						    </div>
							<div>
						    	<span><label>Total Medicne</label></span>
						    	<span>
								<input name="tmedi" type="text" class="textbox" value="">
								</span>
						    </div>
							
							
							<div>
						    	<span><label>Scan Needed</label></span>
						    	<span>
								<input type="radio" value="yes" name="scan" />yes
								<input type="radio" value="no" name="scan" />no
								</span>
						    </div>
							
							<div>
						    	<span><label>Scan Part</label></span>
						    	<span>
									<input name="spart" type="text" class="textbox" value="">
								</span>
						    </div>
							


						   <div>
						   		<span><input type="submit" value="Prescription" name="submit"></span>
                                
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
$reason=$_POST['reason'];

$medicine=$_POST['medicine'];
$intake=$_POST['intake'];
$tmedi=$_POST['tmedi'];
$tdays=$_POST['tdays'];
$scan=$_POST['scan'];
$spart=$_POST['spart'];


foreach ($intake as $intakes=>$value) {
			 
if($value=='morning')			 
{
$morning='1';
}
if($value=='afternoon')			 
{
$afternoon='1';
}

if($value=='night')			 
{
$night='1';
}

        }


$dname=$_SESSION['dname'];
$pdate=date("Y-m-d");


$con=mysql_query("select * from prescription where dname='$dname' and medicine='$medicine' and pname='$pname' and pdate='$pdate'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("prescription already added")</script>';
}
else
{
foreach($medicine as $medicines=>$mval)
{

mysql_query("insert into prescription(reason,medicine,dname,tmedi,tdays,morning,afternoon,night,pname,pdate)values('$reason','$mval','$dname','$tmedi','$tdays','$morning','$afternoon','$night','$pname','$pdate')")or die(mysq_error());
}
if($scan=='yes')
{
mysql_query("insert into scan(dname,pname,pdate,spart)values('$dname','$pname','$pdate','$spart')");
}


echo '<script type="text/javascript">alert("prescription added")</script>';
}
}
?>
<?php include "footer.php"; ?>
