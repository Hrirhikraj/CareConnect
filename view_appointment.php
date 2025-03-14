<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View appointment</h3>
					<table border="1" cellpadding="10" cellspacing="0">
		  
		  <?php
		  if($_SESSION['dname']!='')
		  {
		  echo "<tr><td>Patient Name</td><td>Reason</td><td>Appointment Date</td><td>Appointment Time</td><td>Prescription</td><td>View Prescription</td><td>Add Comment</td><td>Scan report</td><td>View other doctor prescription</td></tr>";
		  $dname=$_SESSION['dname'];
		  
		  $hq=mysql_query("select * from appointment where dname='$dname'");
		  
		  }
		  while($hr=mysql_fetch_array($hq))
		  {
		 $pname=$hr['pname'];
		 $_SESSION['pname']=$pname;
$dname=$hr['dname'];
$areason=$hr['areason'];
$adate=$hr['adate'];
$atime=$hr['atime'];
$status=$hr['status'];




if($_SESSION['dname']!='')
{

$sq=mysql_query("select * from scan where dname='$dname' and pname='$pname' and pdate='$adate' and sreport!=''");
$sr=mysql_fetch_array($sq);
$sreport=$sr['sreport'];

echo "<tr><td>$pname</td><td>$areason</td><td>$adate</td><td>$atime</td><td><a href='prescription.php?areason=$areason&pname=$pname'>Prescription</a></td><td><a href='view-prescription.php?areason=$areason&pname=$pname'>View Prescription</a></td><td><a href='dcomment.php?areason=$areason&pname=$pname'>Add Comment</a></td><td><a href='upload/$sreport' target='_blank'>Scan Report</a></td><td><a href='view_other_prescription.php?areason=$areason&pname=$pname' target='_blank'>View other doctor prescription</a></td></tr>";
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