<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View Hospital</h3>
					<table border="1" cellpadding="10" cellspacing="0" width="100%">
		  
		  <?php
		 
		  echo "<tr><td>Name</td><td>Email</td><td>Phone</td><td>Proof</td><td>Register date</td><td>Action</td></tr>";

		  $hq=mysql_query("select * from hospital");
		  while($hr=mysql_fetch_array($hq))
		  {
		  $pname=$hr['hname'];
		  $uemail=$hr['hemail'];
		  $uphone=$hr['hphone'];
		  $urdate=$hr['hrdate'];
		   $dproof=$hr['hproof'];
		  $did=$hr['hid'];
		  $status=$hr['status'];
		  
		  if($status=='0')
		  {
		  $status=1;
		  }
		  else
		  {
		  $status=0;
		  }


echo "<tr><td>$pname</td><td>$uemail</td><td>$uphone</td><td><img src='upload/$dproof' height='100px' /></td><td>$urdate</td><td><a href='view_hospital.php?hid=$did&status=$status'>Change status</a></td></tr>";

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
if($_GET['hid']!='')
{
$hid=$_GET['hid'];
$status=$_GET['status'];
mysql_query("update hospital set status='$status' where hid='$hid'");
echo '<meta http-equiv="refresh" content="0;url=view_hospital.php">';
}
?>