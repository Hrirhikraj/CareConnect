<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Doctor dashboard</h3>
					 <table align="left" cellpadding="10" cellspacing="0" border="1">
                     <thead><tr><td>S.no</td><td>Name</td><td>Gender</td><td>Age</td><td>Smoking</td><td>Alcohol</td><td>Exercise</td><td>weight</td><td>Stress</td><td>Tobacco</td><td>Sugar</td><td>Pressure</td></tr></thead>
                     
                     <tbody>
                     <?php
					 $con=mysql_query("select * from attribute")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
$c=1;
while($r=mysql_fetch_array($con))
{
$pname=$r['ptnm'];
$age=$r['age'];
$gender=$r['gender'];
$smoking=$r['smoking'];
$drink=$r['drink'];
$exercise=$r['exercise'];
$hypertension=$r['hypertension'];
$hereditary=$r['hereditary'];
$weight=$r['weight'];
$stress=$r['stress'];
$heart_beat=$r['heart_beat'];
$tobacco=$r['tobacco'];
$sugar=$r['sugar'];
$bp=$r['bp'];

echo "<tr><td>$c</td><td>$pname</td><td>$gender</td><td>$age</td><td>$smoking</td><td>$drink</td><td>$exercise</td><td>$weight</td><td>$hypertension</td><td>$tobacco</td><td>$sugar</td><td>$bp</td></tr>";
$c++;
					 }
					 }
					 else
					 {
					 }
					 ?>
                     </tbody>
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
