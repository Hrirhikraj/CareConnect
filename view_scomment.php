<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Scan lab Comments</h3>
				<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
				<tr align="left"><th>Comments</th><th>Scan Part</th><th>Doctor name</th><th>Patient name</th><th>Date</th></tr>
					<?php
					$n=mysql_query("select * from scomments");
					while($h=mysql_fetch_array($n))
					{
					$comments=$h['comments'];
					$spart=$h['spart'];
					$dname=$h['dname'];
					$pname=$h['pname'];
					$cdate=$h['cdate'];
					echo "<tr><td>$comments</td><td>$spart</td><td>$dname</td><td>$pname</td><td>$cdate</td></tr>";
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
<?php include "footer.php"; ?>
