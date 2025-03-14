<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Add Medicine</h3>
					      <form method="post" action="">
                          <div>
						    	<span><label>Medicine</label></span>
						    	<span><input name="med_name" type="text" class="textbox" required></span>
						    </div>
							
							
							<div>
						    	<span><label>Suitable for</label></span>
						    	<span><input name="msuite" type="text" class="textbox" required></span>
						    </div>
							
							
						    <div>
						    	<span><label>Manufacturing date</label></span>
						    	<span><input name="mdate" type="text" class="textbox" required value="<?php echo date('Y-m-d'); ?>"></span>
						    </div>
							<!---728x90--->
						    <div>
						     	<span><label>Expiry date</label></span>
						    	<span><input name="edate" type="text" class="textbox" required value="<?php  echo date("Y-m-d", strtotime('+3 month')); ?>"></span>
						    </div>
                            
					    	<div>
						    	<span><label>Price</label></span>
						    	<span><input name="mprice" type="text" class="textbox" required></span>
						    </div>
							
							<div>
						    	<span><label>Qty</label></span>
						    	<span><input name="mqty" type="text" class="textbox" required></span>
						    </div>
							
								<div>
						    	<span><label>Uses</label></span>
						    	<span>
								<textarea name="muses"></textarea></span>
						    </div>

								<div>
						    	<span><label>Side Effects</label></span>
						    	<span>
								<textarea name="mseffect"></textarea></span>
						    </div>

								<div>
						    	<span><label>Composition & Dosage</label></span>
						    	<span>
								<textarea name="mcomp"></textarea></span>
						    </div>

								<div>
						    	<span><label>Expert Advice</label></span>
						    	<span>
								<textarea name="madvise"></textarea></span>
						    </div>
						    
								<div>
						    	<span><label>Precaution</label></span>
						    	<span>
								<textarea name="mprecaution"></textarea></span>
						    </div>

<div>
						    	<span><label>More Information</label></span>
						    	<span><input name="minfo" type="text" class="textbox" value="http://"></span>
						    </div>
							
							
						   <div>
						   		<span><input type="submit" value="Register" name="submit"></span>
                                
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

$med_name=mysql_real_escape_string($_POST['med_name']);
$edate=$_POST['edate'];
$mdate=$_POST['mdate'];
$mprice=$_POST['mprice'];
$mqty=$_POST['mqty'];
$msuite=mysql_real_escape_string($_POST['msuite']);
$muses=mysql_real_escape_string($_POST['muses']);
$mseffect=mysql_real_escape_string($_POST['mseffect']);
$mcomp=mysql_real_escape_string($_POST['mcomp']);
$madvise=mysql_real_escape_string($_POST['madvise']);
$mprecaution=mysql_real_escape_string($_POST['mprecaution']);
$minfo=mysql_real_escape_string($_POST['minfo']);



$con=mysql_query("select * from medicine where med_name='$med_name' and edate='$edate'")or die(mysq_error());
$n=mysql_num_rows($con);
if($n>0)
{
echo '<script type="text/javascript">alert("Medicine already added")</script>';
}
else
{
mysql_query("insert into medicine(med_name,edate,mdate,mprice,mqty,msuite,muses,mseffect,mcomp,madvise,mprecaution,minfo)values('$med_name','$edate','$mdate','$mprice','$mqty','$msuite','$muses','$mseffect','$mcomp','$madvise','$mprecaution','$minfo')")or die(mysq_error());
echo '<script type="text/javascript">alert("Medicine added successfully")</script>';
}
}
?>
<?php include "footer.php"; ?>
