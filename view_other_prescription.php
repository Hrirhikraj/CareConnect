<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View other doctor prescription</h3>
					<table border="1" cellpadding="10" cellspacing="0">
		  
		  <?php
		  if($_SESSION['dname']!='')
		  {
		  echo "<tr><td>Patient Name</td><td>Reason</td><td>Medicine</td><td>Doctor name</td><td>Medicine Intake</td><td>Total Days</td><td>Total Medicine</td><td>Scan Report</td></tr>";
		  $dname=$_SESSION['dname'];
		  
		  $areason=$_GET['areason'];
		  $pname=$_GET['pname'];
		  	
		  $hq=mysql_query("select * from prescription where dname!='$dname' and reason='$areason' and pname='$pname' and status='1'");
		  
		  }
		  while($hr=mysql_fetch_array($hq))
		  {
		 $pname=$hr['pname'];
$dname=$hr['dname'];
$areason=$hr['reason'];
$pdate=$hr['pdate'];
$medicine=$hr['medicine'];
$status=$hr['status'];

$adate=$hr['adate'];
$atime=$hr['atime'];
$status=$hr['status'];

$intake=$hr['intake'];
$tmedi=$hr['tmedi'];
$morning=$hr['morning'];
$afternoon=$hr['afternoon'];
$night=$hr['night'];

$intake="Morning:$morning,Afternoon:$afternoon,Night:$night";


$tdays=$hr['tdays'];
$scan=$hr['scan'];
$spart=$hr['spart'];





if($_SESSION['dname']!='')
{

$sq=mysql_query("select * from scan where dname='$dname' and pname='$pname' and pdate='$adate' and sreport!=''");
$sr=mysql_fetch_array($sq);
$sreport=$sr['sreport'];

echo "<tr><td>$pname</td><td>$areason</td><td>$medicine</td><td>$dname</td><td>$intake</td><td>$tdays</td><td>$tmedi</td><td><a href='upload/$sreport' target='_blank'>Scan Report</a></td></td></tr>";
}
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