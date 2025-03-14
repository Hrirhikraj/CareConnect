<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View prescription</h3>
					<table border="1" cellpadding="10" cellspacing="0">
		  
		  <?php
		  if($_SESSION['dname']!='')
		  {
		  $dname=$_SESSION['dname'];
		   $pname=$_GET['pname'];
		   $areason=$_GET['areason'];
		  echo "<tr><td>Reason</td><td>Medicine</td><td>Doctor name</td><td>Patient name</td><td>Prescription Date</td><td>Total medicine</td><td>Total days</td><td>Intake</td></tr>";
		 
		  $hq=mysql_query("select * from prescription where dname='$dname' and pname='$pname' and reason='$areason'");
		  
		  }
		  while($hr=mysql_fetch_array($hq))
		  {
$dname=$hr['dname'];
$pname=$hr['pname'];
$areason=$hr['reason'];
$pdate=$hr['pdate'];
$medicine=$hr['medicine'];
$status=$hr['status'];
$tmedi=$hr['tmedi'];
$tdays=$hr['tdays'];
$morning=$hr['morning'];
$afternoon=$hr['afternoon'];
$night=$hr['night'];
$pbid=$hr['pbid'];
if($status==0)
{
$status='1';
}
else
{
$status='0';
}



echo "<tr><td>$areason</td><td>$medicine</td><td>$dname</td><td>$pname</td><td>$pdate</td><td>$tmedi</td><td>$tdays</td><td>morning:$morning,afternoon:$afternoon,night:$night</td></tr>";

		  }
		  ?>
		  </table>
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
if(isset($_GET['pbid']))
{
$pbid=$_GET['pbid'];
$status=$_GET['status'];
$uname=$_SESSION['uname'];
mysql_query("update prescription set status='$status' where pbid='$pbid' and pname='$uname'");
echo '<script type="text/javascript">alert("Prescription status updated successfully")</script>';
}
?> 