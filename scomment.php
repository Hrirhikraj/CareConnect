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

$dname=$_GET['dname'];
$pdate=$_GET['pdate'];
$pname=$_GET['pname'];
$spart=$_GET['spart'];



mysql_query("insert into scomments(comments,spart,dname,pname,cdate)values('$comments','$spart','$dname','$pname','$pdate')");
echo '<script type="text/javascript">alert("Comment added")</script>';
}
?>
<?php include "footer.php"; ?>
