<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Doctor Profile</h3>
					     
<?php
$did=$_SESSION['did'];
$l=mysql_query("SELECT * FROM doctor WHERE did='$did'");
while($g=mysql_fetch_array($l))
{
$specialist=$g['specialist'];
$dfname=$g['dfname'];
$demail=$g['demail'];
$dphone=$g['dphone'];
$dname=$g['dname'];
$dpass=$g['dpass'];
$docid=$g['docid'];
$hname=$g['hname'];
$exp=$g['exp'];
$dob=$g['dob'];

?>		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Welcome <?php echo $dname; ?></a></h3>
		
			<div class="contact-form">
            <table align="left" width="400px" cellpadding="10" cellspacing="0">
            <tr><td width="200px">Doctor Name</td><td width="10px">:</td><td width="200px"><?php echo $dfname; ?></td></tr>
            <tr><td>Doctor Id</td><td>:</td><td><?php echo $docid; ?></td></tr>
            <tr><td>Email</td><td>:</td><td><?php echo $demail; ?></td></tr>
            <tr><td>Phone</td><td>:</td><td><?php echo $dphone; ?></td></tr>
            <tr><td>Specialization</td><td>:</td><td><?php echo $specialist; ?></td></tr>
            <tr><td>Hospital name</td><td>:</td><td><?php echo $hname; ?></td></tr>
            <tr><td>Experience</td><td>:</td><td><?php echo $exp; ?></td></tr>
			<tr><td>Dob</td><td>:</td><td><?php echo $dob; ?></td></tr>
            </table>
            
		    </div>
			
		</div>
<?php
}
?>		
						 
				    </div>
  				</div>
								
  				<div class="clear"></div>			
		  </div>
		  <!---728x90--->
</div>
</div>
</div>
</div>
<?php include "footer.php"; ?>
