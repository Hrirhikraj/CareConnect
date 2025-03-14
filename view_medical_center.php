<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View Medical Center</h3>
					<table border="1" cellpadding="10" cellspacing="0" width="100%">
		  
		  <?php
		 
		  echo "<tr><td>Name</td><td>Email</td><td>Phone</td><td>Proof</td><td>Register date</td><td>Action</td></tr>";

		  $hq=mysql_query("select * from medical_center");
		  while($hr=mysql_fetch_array($hq))
		  {
		  $pname=$hr['mname'];
		  $uemail=$hr['memail'];
		  $uphone=$hr['mphone'];
		  $urdate=$hr['mrdate'];
		   $dproof=$hr['mproof'];
		  $did=$hr['mcid'];
		  $status=$hr['status'];
		  
		  if($status=='0')
		  {
		  $status=1;
		  }
		  else
		  {
		  $status=0;
		  }


echo "<tr><td>$pname</td><td>$uemail</td><td>$uphone</td><td><img src='upload/$dproof' height='100px' /></td><td>$urdate</td><td><a href='view_medical_center.php?mcid=$did&status=$status'>Change status</a></td></tr>";

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
if($_GET['mcid']!='')
{
$mcid=$_GET['mcid'];
$status=$_GET['status'];
mysql_query("update medical_center set status='$status' where mcid='$mcid'");
echo '<meta http-equiv="refresh" content="0;url=view_medical_center.php">';
}
?>