<?php include "header.php"; ?>
<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Comments</h3>
					      <form method="post" action="">
					    	<div>
						    	<span><label>Comments</label></span>
						    	<span><input name="comments" type="text" class="textbox"></span>
						    </div>
						    							<!---728x90--->
						   <div>
						   		<span><input type="submit" value="Comment" name="submit"></span>
                                
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
$comments=$_POST['comments'];

$dname=$_SESSION['dname'];
$areason=$_GET['areason'];
$pname=$_GET['pname'];
$cdate=date("Y-m-d");



mysql_query("insert into dcomments(comments,areason,dname,pname,cdate)values('$comments','$areason','$dname','$pname','$cdate')");

echo '<script type="text/javascript">alert("Comment added")</script>';
}
?>
<?php include "footer.php"; ?>
