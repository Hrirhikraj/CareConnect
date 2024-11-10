<?php include "header.php"; ?>

<script type="text/javascript">
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}


	function rpl(str)
	{
	window.location.href="chat.php?qid="+str;
	}
	
	
</script>

<div class="s_bg">
<div class="wrap">
<!---728x90--->
<div class="cont_main">
<div class="contact">
<div class="section group">				
					<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Search Query</h3>
					      <form method="post" action="" id="search-form">
                          <div>

						    	<span>
								
								<?php
				if($_GET['qid']!='')
				{
				$qid=$_GET['qid'];
				$m=mysql_query("select * from query where qid='$qid'");
$n=mysql_fetch_array($m);
$question=$n['question'];
$answer=$n['answer'];
				?>
				<input type="text" name="search" class="textbox" value="<?php echo $question;?>"/>
				<input type="hidden" name="answer" class="textbox" value="<?php echo $answer;?>" id="text"/>
				<?php
				}
				else
				{
				?>
				<input type="text" name="search" class="textbox" value="Enter keyword here" onfocus="if(this.value=='Enter keyword here'){this.value=''}" onblur="if(this.value==''){this.value='Enter keyword here'}" onkeyup="showResult(this.value)"  id="search_txt" autocomplete="off" />
				<?php
				}
				?>
		
								</span>
						    </div>

				  
		<div id="livesearch"></div>
				</span>
				
						    
						   <div>
						   		<span><input type="submit" name="submit" value='Submit'  id="search-but"></span>
                                
						  </div>
					    </form>
				    </div>
  				</div>
								
  				<div class="clear"></div>			
				

				<?php
if(isset($_POST['submit']))
{
$search=$_POST['search'];
echo $val=$_POST['answer'];
echo '<meta http-equiv="refresh" content="10;url=chat.php">';
}
if(isset($_POST['invalid']))
{
$quest=$_SESSION['quest'];
$stname=$_SESSION['stname'];
mysql_query("insert into invld(quest,stnm)values('$quest','$stname')");
echo '<meta http-equiv="refresh" content="10;url=chat.php">';
}

?>

					
		  </div>
		  <!---728x90--->
</div>
</div>
</div>
</div>
