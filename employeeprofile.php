<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Medical Center Profile</h3>
					     
<?php
$eid=$_SESSION['eid'];
$l=mysql_query("SELECT * FROM employee WHERE eid='$eid'");
while($g=mysql_fetch_array($l))
{
$emp_name=$g['emp_name'];
$emp_mail=$g['emp_mail'];
$emp_phone=$g['emp_phone'];

?>		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Welcome <?php echo $emp_name; ?></a></h3>
		
			<div class="contact-form">
            <table align="left" width="400px" cellpadding="10" cellspacing="0">
            <tr><td width="200px">Email</td><td width="10px">:</td><td  width="200px"><?php echo $emp_mail; ?></td></tr>
            <tr><td>Phone</td><td>:</td><td><?php echo $emp_phone; ?></td></tr>
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
