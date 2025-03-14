<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View Doctor</h3>
					<table border="1" cellpadding="10" cellspacing="0" width="100%">
		  
		  <?php
		 
		  echo "<tr><td>Name</td><td>Email</td><td>Phone</td><td>Specialist</td><td>Hospital name</td><td>Experience</td><td>Dob</td><td>Proof</td><td>Register date</td><td>Action</td></tr>";

		  $hq=mysql_query("select * from doctor");
		  while($hr=mysql_fetch_array($hq))
		  {
		  $pname=$hr['dfname'];
		  $uemail=$hr['demail'];
		  $uphone=$hr['dphone'];
		  $dob=$hr['dob'];
		  $exp=$hr['exp'];
		  $dproof=$hr['dproof'];
		  $urdate=$hr['drdate'];
		  $did=$hr['did'];
		   $hname=$hr['hname'];
          $specialist=$hr['specialist'];
		  $status=$hr['status'];
		  
		  if($status=='0')
		  {
		  $status=1;
		  }
		  else
		  {
		  $status=0;
		  }


echo "<tr><td>$pname</td><td>$uemail</td><td>$uphone</td><td>$specialist</td><td>$hname</td><td>$exp</td><td>$dob</td><td><img src='upload/$dproof' /></td><td>$urdate</td><td><a  href='view_doctor.php?pid=$did&status=$status'>Change status</a></td></tr>";

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
mysql_query("update doctor set status='$status' where did='$pid'");
echo '<meta http-equiv="refresh" content="0;url=view_doctor.php">';
}
?>