<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Lab center Profile</h3>
					     
<?php
$lbid=$_SESSION['lbid'];
$l=mysql_query("SELECT * FROM lab WHERE lbid='$lbid'");
while($g=mysql_fetch_array($l))
{
$lbname=$g['lbname'];
$lbemail=$g['lbemail'];
$lbphone=$g['lbphone'];

?>		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Welcome <?php echo $lbname; ?></a></h3>
		
			<div class="contact-form">
            <table align="left" width="400px" cellpadding="10" cellspacing="0">
            <tr><td width="200px">Email</td><td width="10px">:</td><td  width="200px"><?php echo $lbemail; ?></td></tr>
            <tr><td>Phone</td><td>:</td><td><?php echo $lbphone; ?></td></tr>
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
