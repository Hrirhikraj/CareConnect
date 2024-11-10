<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form pdb">
				  	<h3>Add bill</h3>
					<table border="1" cellpadding="10" cellspacing="0">
		  <form action="" method="post">
		  <?php
		  echo "<tr><td>Select</td><td>Reason</td><td>Medicine</td><td>Doctor name</td><td>Patient name</td><td>Prescription Date</td><td>Intake</td><td>Total days</td><td>Total medicine</td><td>Medicine price</td><td>Total Price</td></tr>";
		 
		  $hq=mysql_query("select * from prescription where status='0'");
		  
		  while($hr=mysql_fetch_array($hq))
		  {
$dname=$hr['dname'];
$pname=$hr['pname'];
$areason=$hr['reason'];
$pdate=$hr['pdate'];
$medicine=$hr['medicine'];
$status=$hr['status'];
$tmedi=$hr['tmedi'];
$tdays=$hr['tdays'];
$morning=$hr['morning'];
$afternoon=$hr['afternoon'];
$night=$hr['night'];
$pbid=$hr['pbid'];
if($status==0)
{
$status='1';
}
else
{
$status='0';
}
$j=mysql_fetch_array(mysql_query("select * from medicine where med_name='$medicine'"))or die(mysql_error());
$mprice=$j['mprice'];
$tprice=$mprice*$tmedi;

echo "<tr><td><input type='checkbox' value='$pbid' name='pbid[]'></td><td>$areason</td><td>$medicine</td><td>$dname</td><td>$pname</td><td>$pdate</td><td>morning:$morning,afternoon:$afternoon,night:$night</td><td>$tdays</td><td>$tmedi</td><td>$mprice</td><td>$tprice</td></tr>";

		  }
		  ?>
		  </table>
<input type="submit" name="submit" value="Pay bill" />		  
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
$pbid=$_POST['pbid'];


foreach($_POST['pbid'] as $value){


$hq=mysql_query("select * from prescription where pbid='$value'")or die(mysql_error());
$hr=mysql_fetch_array($hq);
$medicine=$hr['medicine'];
$tmedi=$hr['tmedi'];

$j=mysql_fetch_array(mysql_query("select * from medicine where med_name='$medicine'"))or die(mysql_error());
$mprice=$j['mprice'];
$tprice=$mprice*$tmedi;




mysql_query("update prescription set bill_price='$tprice',status='1' where pbid='$value'")or die(mysql_error());

    }

echo '<script type="text/javascript">alert("Medicine bill cleared")</script>';
echo '<meta http-equiv="refresh" content="0;url=add_bill.php">';
}
?> 