<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>View Prediction</h3><br/>
                    <?php
					$pname=$_SESSION['uname'];
					$con=mysql_query("select * from history where pname='$pname'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
$r=mysql_fetch_array($con);
$smoking=$r['smoking'];
$alcohol=$r['alcohol'];
$exercise=$r['exercise'];
$fast_food=$r['fast_food'];
$hereditary=$r['hereditary'];
$overweight=$r['overweight'];
$stress=$r['stress'];
$heart_beat=$r['heart_beat'];
$chest_pain=$r['chest_pain'];
$blood_sugar=$r['blood_sugar'];
$blood_pressure=$r['blood_pressure'];
$total=11;
$hist=$smoking+$alcohol+$exercise+$fast_food+$hereditary+$overweight+$stress+$heart_beat+$chest_pain+$blood_sugar+$blood_pressure;
$predt=round(($hist/$total)*100,0);
echo "You have $predt% chances of heart attack";
}
else
{
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
