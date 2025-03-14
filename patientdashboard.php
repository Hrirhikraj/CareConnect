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
					      <form method="post" action="">
                          <div>
						    	<span>Your age</span><br/>
						        <span><input name="age" type="radio" class="textbox" value="30"> <30 
                                <input name="age" type="radio" class="textbox" value="31"> >30
                                </span><br/><br/>
						    </div>
                            
						    <div>
						    	<span>Gender</span><br/>
						    	<span><input name="gender" type="radio" class="textbox" value="male"> Male 
                                <input name="gender" type="radio" class="textbox" value="female"> Female 
                                </span><br/><br/>
						    </div>
							
						    <div>
You have smoking habit<br/>					    	
<span><input name="smoking" type="radio" class="textbox" value="1"> Yes 
                                <input name="smoking" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>

 <div>
You	have Alcohol Intake	<br/>			    	
<span><input name="alcohol" type="radio" class="textbox" value="1"> Yes 
                                <input name="alcohol" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>

<div>
Do you Exercise Regularly<br/>			    	
<span><input name="exercise" type="radio" class="textbox" value="0"> Yes 
                                <input name="exercise" type="radio" class="textbox" value="1"> No 
                                </span><br/><br/>

</div>

<div>
Do you intake fast food	 <br/>   	
<span><input name="fast_food" type="radio" class="textbox" value="1"> Yes 
                                <input name="fast_food" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>

<div>
Do you have history of Hereditary heart disease <br/>		    	
<span><input name="hereditary" type="radio" class="textbox" value="1"> Yes 
                                <input name="hereditary" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>


<div>
Are you overweight	<br/>				    	
<span><input name="overweight" type="radio" class="textbox" value="1"> Yes 
                                <input name="overweight" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>

<div>
Are you mentally stressed	<br/>				    	
<span><input name="stress" type="radio" class="textbox" value="1"> Yes 
                                <input name="stress" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>

<div>
Your heart beat rate	<br/>				    	
<span><input name="heart_beat" type="radio" class="textbox" value="0"> <60bpm
<input name="heart_beat" type="radio" class="textbox" value=""> 60-100bpm
                                <input name="heart_beat" type="radio" class="textbox" value="1"> >100bpm
                                </span><br/><br/>

</div>

 <div>
You have chest pain		<br/>				    	
<span><input name="chest_pain" type="radio" class="textbox" value="1"> Yes 
                                <input name="chest_pain" type="radio" class="textbox" value="0"> No 
                                </span><br/><br/>

</div>

<div>
You have Fasting Blood Sugar	<br/>				    	
<span><input name="blood_sugar" type="radio" class="textbox" value="1"> >120 mg/dl
                                <input name="blood_sugar" type="radio" class="textbox" value="0"> <120 mg/dl
                                </span><br/><br/>

</div>
<div>
You have Blood Pressure	<br/>					    	
<span><input name="blood_pressure" type="radio" class="textbox" value="1"> >130 
                                <input name="blood_pressure" type="radio" class="textbox" value="0"> <130 
                                </span>

</div>
						    
						   <div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
                                
						  </div>
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
$pname=$_SESSION['uname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$smoking=$_POST['smoking'];
$alcohol=$_POST['alcohol'];
$exercise=$_POST['exercise'];
$fast_food=$_POST['fast_food'];
$hereditary=$_POST['hereditary'];
$overweight=$_POST['overweight'];
$stress=$_POST['stress'];
$heart_beat=$_POST['heart_beat'];
$chest_pain=$_POST['chest_pain'];
$blood_sugar=$_POST['blood_sugar'];
$blood_pressure=$_POST['blood_pressure'];


$con=mysql_query("select * from history where pname='$pname'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Patient history already added")</script>';
}
else
{
mysql_query("insert into history(pname,age,gender,smoking,alcohol,exercise,fast_food,hereditary,overweight,stress,heart_beat,chest_pain,blood_sugar,blood_pressure)values('$pname','$age','$gender','$smoking','$alcohol','$exercise','$fast_food','$hereditary','$overweight','$stress','$heart_beat','$chest_pain','$blood_sugar','$blood_pressure')")or die(mysq_error());
echo '<script type="text/javascript">alert("Patient history added successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=view-prediction.php">';
}
}
?>
<?php include "footer.php"; ?>
