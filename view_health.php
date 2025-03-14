<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>View Health</h3>
					<table class="tbl" border="1" cellpadding="10" cellspacing="0">
		  
		  <?php
		  if($_SESSION['dname']!='')
		  {
		  echo "<tr><td>Doctor Comment</td><td>Doctor Prescription</td><td>Name</td><td>Age</td><td>Gender</td><td>Weight</td><td>Height</td><td>Pulse rate</td><td>BP</td><td>Sugar</td><td>Cholesterol</td><td>Smoking Habit</td><td>Drinking Habit</td><td>Tobacco Useage</td><td>Hypertension</td><td>Hereditary Problems</td><td>Had surgery</td><td>Tablets useage</td><td>Taken treatments</td><td>exercise regularly</td><td>Eating Habits</td><td>Asbestos exposure</td><td>Symptom1</td><td>Symptom2</td><td>Symptom3</td></tr>";
		  $specialist=$_SESSION['specialist'];
		  $ptnm=$_SESSION['pname'];
		  if($specialist=='heart')
		  {
		  $hq=mysql_query("select * from attribute where ptnm='$ptnm' order by heart_count desc");
		  }
		  else if($specialist=='diabetis')
		  {
		  $hq=mysql_query("select * from attribute where ptnm='$ptnm' order by diabetis_count desc");
		  }
		  else if($specialist=='cancer')
		  {
		  $hq=mysql_query("select * from attribute where ptnm='$ptnm' order by cancer _count desc");
		  }
		  
		  
		  }
		  else if($_SESSION['uname']!='')
		  {
		  echo "<tr><td>Name</td><td>Age</td><td>Gender</td><td>Weight</td><td>Height</td><td>Pulse rate</td><td>BP</td><td>Sugar</td><td>Cholesterol</td><td>Smoking Habit</td><td>Drinking Habit</td><td>Tobacco Useage</td><td>Hypertension</td><td>Hereditary Problems</td><td>Had surgery</td><td>Tablets useage</td><td>Taken treatments</td><td>exercise regularly</td><td>Eating Habits</td><td>Asbestos exposure</td><td>Symptom1</td><td>Symptom2</td><td>Symptom3</td></tr>";
		  $ptnm=$_SESSION['uname'];
		  $hq=mysql_query("select * from attribute where ptnm='$ptnm'");
		  }
		  while($hr=mysql_fetch_array($hq))
		  {
		  $age=$hr['age'];
$gender=$hr['gender'];
$weight=$hr['weight'];
$height=$hr['height'];
$hbeat=$hr['hbeat'];
$prate=$hr['prate'];
$bp=$hr['bp'];
$sugar=$hr['sugar'];
$cholesterol=$hr['cholesterol'];

$smoking=$hr['smoking'];
$drink=$hr['drink'];
$tobacco=$hr['tobacco'];
$hypertension=$hr['hypertension'];
$hereditary=$hr['hereditary'];
$surgery=$hr['surgery'];
$tablets=$hr['tablets'];
$treatments=$hr['treatments'];
$exercise=$hr['exercise'];
$ptnm=$hr['ptnm'];
 $aid=$hr['aid'];
$bmi=($weight/(($height/100)*($height/100)));

$blood_count=$hr['blood_count'];

$usalt=$hr['usalt'];
$asbestos_exposure=$hr['asbestos_exposure'];
$veg_nveg=$hr['veg_nveg'];
$cognitive_level=$hr['cognitive_level'];
$symptom1=$hr['symptom1'];
$symptom2=$hr['symptom2'];
$symptom3=$hr['symptom3'];




if($_SESSION['dname']!='')
{
echo "<tr><td><a href='comment.php?aid=$aid'>comment</td><td><a href='prescription.php?aid=$aid'>prescription</td><td>$ptnm</td><td>$age</td><td>$gender</td><td>$weight</td><td>$height</td><td>$prate</td><td>$bp</td><td>$sugar</td><td>$cholesterol</td><td>$smoking</td><td>$drink</td><td>$tobacco</td><td>$hypertension</td><td>$hereditary</td><td>$surgery</td><td>$tablets</td><td>$treatments</td><td>$exercise</td><td>$veg_nveg</td><td>$asbestos_exposure</td><td>$symptom1</td><td>$symptom2</td><td>$symptom3</td></tr>";
}
else if($_SESSION['uname']!='')
{
echo "<tr><td>$ptnm</td><td>$age</td><td>$gender</td><td>$weight</td><td>$height</td><td>$prate</td><td>$bp</td><td>$sugar</td><td>$cholesterol</td><td>$smoking</td><td>$drink</td><td>$tobacco</td><td>$hypertension</td><td>$hereditary</td><td>$surgery</td><td>$tablets</td><td>$treatments</td><td>$exercise</td><td>$veg_nveg</td><td>$asbestos_exposure</td><td>$symptom1</td><td>$symptom2</td><td>$symptom3</td></tr>";
}
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