<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View other doctor prescription</h3>
					<table border="1" cellpadding="10" cellspacing="0">
		  
		  <?php
		  if($_GET['medicine']!='')
		  {
		  echo "<tr><td>Medicine</td><td>Manufacturing date</td><td>Expiry date</td><td>Price</td><td>Uses</td><td>Side Effects</td><td>Composition</td><td>Expert Advice</td><td>Precaution</td><td>More Information</td></tr>";
		  $medicine=$_GET['medicine'];
		  	
		  $hq=mysql_query("select * from medicine where med_name='$medicine'");
		  
		  }
		  while($hr=mysql_fetch_array($hq))
		  {
		$med_name=mysql_real_escape_string($hr['med_name']);
$edate=$hr['edate'];
$mdate=$hr['mdate'];
$mprice=$hr['mprice'];
$mqty=$hr['mqty'];
$msuite=mysql_real_escape_string($hr['msuite']);
$muses=mysql_real_escape_string($hr['muses']);
$mseffect=mysql_real_escape_string($hr['mseffect']);
$mcomp=mysql_real_escape_string($hr['mcomp']);
$madvise=mysql_real_escape_string($hr['madvise']);
$mprecaution=mysql_real_escape_string($hr['mprecaution']);
$minfo=mysql_real_escape_string($hr['minfo']);

echo "<tr><td>$med_name</td><td>$mdate</td><td>$edate</td><td>$mprice</td><td>$muses</td><td>$mseffect</td><td>$mcomp</td><td>$madvise</td><td>$mprecaution</td><td>$minfo</td></tr>";
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