<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>User Profile</h3>
					     
<?php
$uname=$_SESSION['uname'];
$l=mysql_query("SELECT * FROM patient WHERE uname='$uname'");
while($g=mysql_fetch_array($l))
{
$pname=$g['pname'];
$uemail=$g['uemail'];
$uphone=$g['uphone'];
$uname=$g['uname'];
$upass=$g['upass'];
$aid=$g['aid'];
$addr=$g['addr'];
$dob=$g['dob'];
$gender=$g['gender'];
$bgroup=$g['bgroup'];

?>		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Welcome <?php echo $uname; ?></a></h3>
		
			<div class="contact-form">
            <table align="left" width="400px" cellpadding="10" cellspacing="0">
            <tr><td>Name</td><td>:</td><td><?php echo $pname; ?></td></tr>
            <tr><td width="200px">Email</td><td width="10px">:</td><td  width="200px"><?php echo $uemail; ?></td></tr>
            <tr><td>Phone</td><td>:</td><td><?php echo $uphone; ?></td></tr>
            <tr><td>Address</td><td>:</td><td><?php echo $addr; ?></td></tr>
            <tr><td>Dob</td><td>:</td><td><?php echo $dob; ?></td></tr>
            <tr><td>Gender</td><td>:</td><td><?php echo $gender; ?></td></tr>
            <tr><td>Blood group</td><td>:</td><td><?php echo $bgroup; ?></td></tr>
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
