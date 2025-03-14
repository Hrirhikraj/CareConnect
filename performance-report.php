<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Report</h3>
					
					<?php
					

include "libchart/classes/libchart.php";

	$chart = new PieChart();

	$dataSet = new XYDataSet();
	
	//$g=mysql_query("select count(*) as total,country,pcat from products group by country")or die(mysql_error());
	//$g=mysql_query("select count(*) as total,ptnm from attribute group by diabetis_count")or die(mysql_error());
	$g=mysql_query("select count(*) as total from attribute group by diabetis_count")or die(mysql_error());
	$j=mysql_fetch_array($g);
	
	$k=mysql_query("select count(*) as total from attribute group by heart_count")or die(mysql_error());
	$l=mysql_fetch_array($k);
	
	$e=mysql_query("select count(*) as total from attribute group by cancer_count")or die(mysql_error());
	$x=mysql_fetch_array($e);
		  
		  $diabetis_count=$j['diabetis_count'];
		   $total=$j['total'];

		  $heart_count=$l['heart_count'];
		   $total_d=$l['total'];
		   
		    $cancer_count=$x['cancer_count'];
			$total_c=$x['total'];
		  
		  
		  	$dataSet->addPoint(new Point("Heart Disease", $total));
		  	$dataSet->addPoint(new Point("Diabetis", $total_d));
		  	$dataSet->addPoint(new Point("Cancer", $total_c));

		

	
	$chart->setDataSet($dataSet);

	$chart->setTitle("User statistics");
	$chart->render("generated/piechart.png");
	

	
?>

<img alt="Line chart" src="generated/piechart.png" style="border: 1px solid gray;"/>

		  <form method="post" action="">
                          <div>
						    	<span><label>Select attribute</label></span><br>
						    	<span>
								<select name="attribute" >
								<option value="age">Age</option>
								<option value="bp">Blood Pressure</option>
								<option value="sugar">Sugar</option>
								<option value="cholesterol">cholesterol</option>
								<option value="smoking">smoking</option>
								<option value="drink">drink</option>
								<option value="tobacco">tobacco</option>
								<option value="hypertension">hypertension</option>
								<option value="asbestos_exposure">Asbestos exposure</option>
								<option value="veg_nveg">Eating Habits veg_nveg</option>
								<option value="exercise">exercise</option>
								<option value="hereditary">hereditary</option>
								</select>
								</span>
						    </div>
							
							<div>
						    	<span><label>Compare</label></span><br>
						    	<span>
								<select name="compare"><br>
								<option value="g">Greater than</option>
								<option value="e">Equal to</option>
								<option value="l">Lesser than</option>
								</select>
								</span>
						    </div>
							
							<div>
						     	<span><label>Value</label></span>
						    	<span><input name="aval" type="text" class="textbox"></span>
						    </div>
						    
							<!---728x90--->
						    <div>
						     	<span><label>Disease</label></span><br>
						    	<span><select name="disease"><br>
								<option value="heart">Heart</option>
								<option value="diabetis">Diabetis</option>
								<option value="cancer">Cancer</option>
								</select></span>
						    </div>
 						    
						   <div>
						   		<span><input type="submit" value="Report" name="submit"></span>
                                
						  </div>
					    </form><br><br><br>
		  
		  <?php
		  if(isset($_POST['submit']))
			{

$attribute=$_POST['attribute'];
$compare=$_POST['compare'];

if($compare=='g')
{
$c=">";
}
else if($compare=='l')
{
$c="<";
}
else if($compare=='e')
{
$c="=";
}
$aval=$_POST['aval'];
$disease=$_POST['disease'];
if($disease=='heart')
{
$d="heart_count";
}
else if($disease=='diabetis')
{
$d="diabetis_count";
}
else if($disease=='cancer')
{
$d="cancer_count";
}
		  
		  //echo "select * from attribute where $attribute$c$aval and $d!=0 order by $d desc ";
		  
		  $hq=mysql_query("select * from attribute where $attribute$c$aval and $d!=0 order by $d desc");
		  $num=mysql_num_rows($hq);
		  
		  while($hr=mysql_fetch_array($hq))
		  {
		  $ptnm=$hr['ptnm'];
		  $age=$hr['age'];
$gender=$hr['gender'];
$weight=$hr['weight'];
$height=$hr['height'];
$hbeat=$hr['hbeat'];
$prate=$hr['prate'];

$diabetis_count=$hr['diabetis_count']*20;
$heart_count=$hr['heart_count']*20;
$cancer_count=$hr['cancer_count']*20;


 $tq=mysql_query("select * from attribute");
 $tnum=mysql_num_rows($tq);

$knt=round((($num/$tnum)*100));
		  
include "libchart/classes/libchart.php";

	$chart = new VerticalBarChart();

	$serie1 = new XYDataSet();
	$serie2 = new XYDataSet();
	$serie3 = new XYDataSet();
	
	
	$serie1->addPoint(new Point("$attribute$c$aval", "$knt"));
	

	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("$d", $serie1);

	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphCaptionRatio(0.65);

	$chart->setTitle("Patient Report");
	$chart->render("generated/demo7.png");
	}
if($num>0)	
{
echo "Total number of patients : $tnum<br/><br/>";

echo "Total number of $disease patients : $num<br/><br/>";
}
echo "Patients with $attribute$c$aval have ".round($knt)."% chance of getting $disease disease<br/><br/>";	
	
if($num>0)	
{
echo '<img alt="Line chart" src="generated/demo7.png" style="border: 1px solid gray;"/>';
echo "<br><br><br><br>";
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
<?php include "footer.php"; ?>