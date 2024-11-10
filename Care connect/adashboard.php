<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View Patient</h3>
					<table border="1" cellpadding="10" cellspacing="0" width="100%">
		  
		  <?php
		 
		  echo "<tr><td>Patient Name</td><td>Email</td><td>Phone</td><td>Address</td><td>Dob</td><td>Gender</td><td>Blood group</td><td>Register date</td><td>Action</td></tr>";

		  $hq=mysql_query("select * from patient");
		  while($hr=mysql_fetch_array($hq))
		  {
		  $pname=$hr['pname'];
		  $uemail=$hr['uemail'];
		  $uphone=$hr['uphone'];
		  $addr=$hr['addr'];
		  $dob=$hr['dob'];
		  $gender=$hr['gender'];
		  $bgroup=$hr['bgroup'];
		  $urdate=$hr['urdate'];
		  $pid=$hr['pid'];
		  $status=$hr['status'];
		  
		  if($status=='0')
		  {
		  $status=1;
		  }
		  else
		  {
		  $status=0;
		  }


echo "<tr><td>$pname</td><td>$uemail</td><td>$uphone</td><td>$addr</td><td>$dob</td><td>$gender</td><td>$bgroup</td><td>$urdate</td><td><a  href='adashboard.php?pid=$pid&status=$status'>Change status</a></td></tr>";

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
if($_GET['pid']!='')
{
$pid=$_GET['pid'];
$status=$_GET['status'];
mysql_query("update patient set status='$status' where pid='$pid'");
echo '<meta http-equiv="refresh" content="0;url=adashboard.php">';
}
?>