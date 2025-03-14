<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Analyse Report</h3>
						<?php
						echo $dname=$_SESSION['dname'];
		   $hn=mysql_query("select * from appointment where dname='$dname'");
		    while($hj=mysql_fetch_array($hn))
			{
		 $pname=$hj['pname'];
		   
		  $hq=mysql_query("select * from attribute where ptnm='$pname'");
		  $aid=1;
		  while($hr=mysql_fetch_array($hq))
		  {
		  $ptnm=$hr['ptnm'];
		  $age=$hr['age'];
$gender=$hr['gender'];
$weight=$hr['weight'];
$height=$hr['height'];
$hbeat=$hr['hbeat'];
$prate=$hr['prate'];


if(($prate>60)&&($prate<100))
{
$pi="Normal";
$pg='green';
}
else if($prate>100)
{
$pi="Serious Problem";
$pg='red';
}


$bp=$hr['bp'];

if(($bp>80)&&($bp<120))
{
$hi="Normal";
$hg='green';
}
else if($bp>160)
{
$hi="Serious Problem";
$hg='red';
}




$sugar=$hr['sugar'];

if(($sugar>60)&&($sugar<140))
{
$si="Normal";
$sg='green';
}
else if($sugar>140)
{
$si="Serious Problem";
$sg='red';
}

$cholesterol=$hr['cholesterol'];

if($cholesterol<200)
{
$ci="Normal";
$cg='green';
}
else if($cholesterol>200)
{
$ci="Serious Problem";
$cg='red';
}

$smoking=$hr['smoking'];

if($smoking==1)
{
$smi="Serious Problem";
$smg='red';

}
else if($smoking==0)
{
$smi="Good";
$smg='green';
}


$drink=$hr['drink'];

if($drink==1)
{
$di="Serious Problem";
$dg='red';

}
else if($drink==0)
{
$di="Good";
$dg='green';
}


$tobacco=$hr['tobacco'];
if($tobacco==1)
{
$ti="Serious Problem";
$tg='red';

}
else if($tobacco==0)
{
$ti="Good";
$tg='green';
}

$hypertension=$hr['hypertension'];
$hereditary=$hr['hereditary'];


if($hereditary==1)
{
$hdi="Serious Problem";
$hdg='red';

}
else if($hereditary==0)
{
$hdi="Good";
$hdg='green';
}

$surgery=$hr['surgery'];
$tablets=$hr['tablets'];
$treatments=$hr['treatments'];
$exercise=$hr['exercise'];

if($exercise==1)
{
$ei="Serious Problem";
$eg='red';

}
else if($exercise==0)
{
$ei="Good";
$eg='green';
}

$ptnm=$hr['ptnm'];

$bmi=($weight/(($height/100)*($height/100)));
if(($bmi>16)&&($bmi<18.5))
{
$bi="Severe Thinness";
$bg='red';
}
else if(($bmi>18.5)&&($bmi<25))
{
$bi="Normal";
$bg='green';
}
if($bmi>25)
{
$bi="Overweight";
$bg='red';
}

$blood_count=$hr['blood_count'];

$usalt=$hr['usalt'];
$asbestos_exposure=$hr['asbestos_exposure'];
$veg_nveg=$hr['veg_nveg'];
$cognitive_level=$hr['cognitive_level'];
$symptom1=$hr['symptom1'];
$symptom2=$hr['symptom2'];
$symptom3=$hr['symptom3'];

$diabetis_count=$hr['diabetis_count']*20;
$heart_count=$hr['heart_count']*20;
$cancer_count=$hr['cancer_count']*20;

include "libchart/classes/libchart.php";

	$chart = new VerticalBarChart();

	$serie1 = new XYDataSet();
	$serie2 = new XYDataSet();
	$serie3 = new XYDataSet();
	
	
	$serie1->addPoint(new Point("$ptnm", "$diabetis_count"));
	
	
	$serie2->addPoint(new Point("$ptnm", "$heart_count"));


	
	$serie3->addPoint(new Point("$ptnm", "$cancer_count"));

	
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Diabetis", $serie1);
	$dataSet->addSerie("Heart Disease", $serie2);
	$dataSet->addSerie("Lung cancer", $serie3);

	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphCaptionRatio(0.65);

	$chart->setTitle("Patient Report");
	$demo="demo".$aid;
	$chart->render("generated/$demo.png");
	
echo "<img alt='Line chart' src='generated/$demo.png' style='border: 1px solid gray;'/>";
echo "<br><br>";

echo "<table border='1' cellpadding='10' cellspacing='0' width='100%'>
		  <tr><td width='30%'>Name</td><td width='30%'>$ptnm</td><td width='30%'></td></tr>
		  <tr><td>Age</td><td>$age</td><td></td></tr>
		  <tr><td>Gender</td><td>$gender</td><td></td></tr>
		  <tr><td>Weight</td><td>$weight</td><td></td></tr>
		  <tr><td>Height</td><td>$height</td><td></td></tr>
		  <tr><td>Pulse rate</td><td>$prate</td><th class='$pg'>$pi</th></tr>
		  <tr><td>BP</td><td>$bp</td><th class='$hg'>$hi</th></tr>
		  <tr><td>Sugar</td><td>$sugar</td><th class='$sg'>$si</th></tr>
		  <tr><td>Cholesterol</td><td>$cholesterol</td><th class='$cg'>$ci</th></tr>
		  <tr><td>Smoking Habit</td><td>$smoking</td><th class='$smg'>$smi</th></tr>
		  <tr><td>Drinking Habit</td><td>$drink</td><th class='$dg'>$di</th></tr>
		  <tr><td>Tobacco Useage</td><td>$tobacco</td><th class='$tg'>$ti</th></tr>
		  <tr><td>Hypertension</td><td>$hypertension</td><th class='$hg'>$hi</th></tr>
		  <tr><td>Hereditary Problems</td><td>$hereditary</td><th class='$hdg'>$hdi</th></tr>
		  <tr><td>Had surgery</td><td>$surgery</td><td></td></tr>
		  <tr><td>Tablets useage</td><td>$tablets</td><td></td></tr>
		  <tr><td>Taken treatments</td><td>$treatments</td><td></td></tr>
		  <tr><td>exercise regularly</td><td>$exercise</td><th class='$eg'>$ei</th></tr>
		  <tr><th>Body Mass Index</th><th>$bmi</th><th class='$bg'>$bi</th></tr>
		  
		  </table>";
		  $aid=$aid+1;
		  }
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