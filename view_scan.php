<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View Scan History</h3>
					<table border="1" cellpadding="10" cellspacing="0" width="100%">
		  
		  <?php
		  
		  echo "<tr><td>Doctor name</td><td>Patient name</td><td>Scan date</td><td>Scan Part</td><td>Scan report</td><td>Add comment</td></tr>";
		  
		  $hq=mysql_query("select * from scan");
		  
		  while($hr=mysql_fetch_array($hq))
		  {
		  $dname=$hr['dname'];
		  $pname=$hr['pname'];
		  $pdate=$hr['pdate'];
		  $spart=$hr['spart'];
		  $sreport=$hr['sreport'];
		  $scid=$hr['scid'];

echo "<tr><td>$dname</td><td>$pname</td><td>$pdate</td><td>$spart</td><td><img src='upload/$sreport' height='100px' /></td><td><a href='scomment.php?scid=$scid&dname=$dname&pname=$pname&pdate=$pdate&spart=$spart'>Add Comment</a></td></tr>";

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