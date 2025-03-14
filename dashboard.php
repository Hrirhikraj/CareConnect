<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Patient dashboard</h3>
						<form id="ContactForm" action="" method="post">
            <div>
             
			  <div class="wrapper"> <span>Patient:</span>
			  <select name="ptnm">
			  <option value="">Select</option>
			  <?php
			  $l=mysql_query("SELECT * FROM patient");
while($g=mysql_fetch_array($l))
{
$uname=$g['uname'];
echo "<option value=$uname>$uname</option>";
}
?>
			  
			  </select>
              </div>
             
			 
			  <div class="wrapper"> <span>Age:</span>
                <input type="text" class="input" name='age'>
              </div>


			  <div class="wrapper">
						    	<span>Gender</span>
						    
								<select name="gender" class="textbox" required>
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Male">Other</option>
								</select>
						    </div>
							


             
              <div class="wrapper"> <span>Weight:</span>
                <input type="text" class="input" name='weight'>
              </div>
			  
			  <div class="wrapper"> <span>Height:</span>
                <input type="text" class="input" name='height'>
              </div>
			  
			  <div class="wrapper"> <span>Heart beat rate:</span>
                <input type="text" class="input" name='hbeat'>
              </div>
			  <div class="wrapper"> <span>Pulse rate:</span>
                <input type="text" class="input" name='prate'>
              </div>
			  <div class="wrapper"> <span>Blood pressure level:</span>
                <input type="text" class="input" name='bp'>
              </div>
			  <div class="wrapper"> <span>Sugar level:</span>
                <input type="text" class="input" name='sugar'>
              </div>
			  <div class="wrapper"> <span>Cholesterol level:</span>
                <input type="text" class="input" name='cholesterol'>
              </div>
			  <div class="wrapper"> <span>Whether you have smoking habits:</span>
				  <input type="radio" name='smoking' value="1">Yes
                <input type="radio" name='smoking' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether you have drinking habits:</span>
				<input type="radio" name='drink' value="1">Yes
                <input type="radio" name='drink' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether you have intake tobacco products:</span>
				<input type="radio" name='tobacco' value="1">Yes
                <input type="radio" name='tobacco' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether you have hypertension:</span>
				<input type="radio" name='hypertension' value="1">Yes
                <input type="radio" name='hypertension' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether you have hereditary problems:</span>
				<input type="radio" name='hereditary' value="1">Yes
                <input type="radio" name='hereditary' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether you have surgery:</span>
				<input type="radio" name='surgery' value="1">Yes
                <input type="radio" name='surgery' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether they have taken any tablets previously:</span>
				<input type="radio" name='tablets' value="1">Yes
                <input type="radio" name='tablets' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether they have taken any treatments previously:</span>
				<input type="radio" name='treatments' value="1">Yes
                <input type="radio" name='treatments' value="0">No
              </div>
			  <div class="wrapper"> <span>Whether they exercise regularly:</span>
				<input type="radio" name='exercise' value="1">Yes
                <input type="radio" name='exercise' value="0">No
              </div>
			  
			  <div class="wrapper"> <span>Eating Habits:</span>
				<input type="radio" name='veg_nveg' value="1">Non Veg
                <input type="radio" name='veg_nveg' value="0">Veg
              </div>
			  
			   <div class="wrapper"> <span>Asbestos exposure:</span>
				<input type="radio" name='asbestos_exposure' value="1">Yes
                <input type="radio" name='asbestos_exposure' value="0">No
              </div>
			  
			  <div class="wrapper"> <span>Symptom1:</span>
				<input type="checkbox" name='symptom1[]' value="healing">healing
                <input type="checkbox" name='symptom1[]' value="bluredvision">blured vision
				<input type="checkbox" name='symptom1[]' value="thirsty">thirsty
                <input type="checkbox" name='symptom1[]' value="itching">itching
                <input type="checkbox" name='symptom1[]' value="losingweight">Losing weight
              </div>

			  <div class="wrapper"> <span>Symptom2:</span>
				<input type="checkbox" name='symptom2[]' value="chestpain">chestpain
                <input type="checkbox" name='symptom2[]' value="dizziness">dizziness
				<input type="checkbox" name='symptom2[]' value="nausea">nausea
                <input type="checkbox" name='symptom2[]' value="shortnessofbreath">shortness of breath
                <input type="checkbox" name='symptom2[]' value="fastheartbeat">fast heart beat
				<input type="checkbox" name='symptom2[]' value="sweating">sweating
              </div>
			  
			  <div class="wrapper"> <span>Symptom3:</span>
				<input type="checkbox" name='symptom3[]' value="chestpain">chestpain
                <input type="checkbox" name='symptom3[]' value="bronchitis">bronchitis
				<input type="checkbox" name='symptom3[]' value="yellowingofskin">yellowing of skin
                <input type="checkbox" name='symptom3[]' value="severecough">severe cough
                <input type="checkbox" name='symptom3[]' value="pneumonia">pneumonia
				<input type="checkbox" name='symptom3[]' value="lumps">lumps
              </div>
			  
			  
			 <input type="submit" name="submit" value=" Add "  class="button"></div>
          </form>
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
if(isset($_POST['submit']))
{
$blood_count=$_POST['blood_count'];

$usalt=$_POST['usalt'];
$asbestos_exposure=$_POST['asbestos_exposure'];
$veg_nveg=$_POST['veg_nveg'];
$cognitive_level=$_POST['cognitive_level'];

$symptom1=$_POST['symptom1'];
$symptom2=$_POST['symptom2'];
$symptom3=$_POST['symptom3'];


$diabetis_count=count($symptom1);
$heart_count=count($symptom2);
$cancer_count=count($symptom3);


$symptom1=implode(",",$_POST['symptom1']);;
$symptom2=implode(",",$_POST['symptom2']);
$symptom3=implode(",",$_POST['symptom3']);

$age=$_POST['age'];

$weight=$_POST['weight'];
$height=$_POST['height'];
$hbeat=$_POST['hbeat'];
$prate=$_POST['prate'];
$bp=$_POST['bp'];
$sugar=$_POST['sugar'];
$cholesterol=$_POST['cholesterol'];
$smoking=$_POST['smoking'];
$drink=$_POST['drink'];
$tobacco=$_POST['tobacco'];
$hypertension=$_POST['hypertension'];
$hereditary=$_POST['hereditary'];
$surgery=$_POST['surgery'];
$tablets=$_POST['tablets'];
$treatments=$_POST['treatments'];
$exercise=$_POST['exercise'];
$ptnm=$_POST['ptnm'];

$q=mysql_query("select * from  attribute where ptnm='$ptnm'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
/*echo "<script type='text/javascript'>alert('Patient health details already added');</script>";*/

mysql_query("update  attribute set age='$age',weight='$weight',height='$height',hbeat='$hbeat',prate='$prate',bp='$bp',sugar='$sugar',cholesterol='$cholesterol',smoking='$smoking',drink='$drink',tobacco='$tobacco',hypertension='$hypertension',hereditary='$hereditary',surgery='$surgery',tablets='$tablets',treatments='$treatments',exercise='$exercise',ptnm='$ptnm',blood_count='$blood_count',usalt='$usalt',asbestos_exposure='$asbestos_exposure',veg_nveg='$veg_nveg',cognitive_level='$cognitive_level',symptom1='$symptom1',symptom2='$symptom2',symptom3='$symptom3',diabetis_count='$diabetis_count',heart_count='$heart_count',cancer_count='$cancer_count' where ptnm='$ptnm'")or die(mysql_error());
echo "<script type='text/javascript'>alert('Patient health details updated successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_health.php">';
}
else
{
mysql_query("insert into attribute(age,weight,height,hbeat,prate,bp,sugar,cholesterol,smoking,drink,tobacco,hypertension,hereditary,surgery,tablets,treatments,exercise,ptnm,blood_count,usalt,asbestos_exposure,veg_nveg,cognitive_level,symptom1,symptom2,symptom3,diabetis_count,heart_count,cancer_count)values('$age','$weight','$height','$hbeat','$prate','$bp','$sugar','$cholesterol','$smoking','$drink','$tobacco','$hypertension','$hereditary','$surgery','$tablets','$treatments','$exercise','$ptnm','$blood_count','$usalt','$asbestos_exposure','$veg_nveg','$cognitive_level','$symptom1','$symptom2','$symptom3','$diabetis_count','$heart_count','$cancer_count')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Patient health details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_health.php">';
}

}
?>	
<?php include "footer.php"; ?>
