<?php
include "config.php";
session_start();
$q=$_GET["q"];
$_SESSION['quest']=$q;
if (strlen($q)>0) {
$g=mysql_query("select * from query where question like '%$q%'");
$l=mysql_num_rows($g);
if($l>0)
{
$t=mysql_fetch_array($g);
$response=$t['question'];
$qid=$t['qid'];
echo "<a href='#' id='quest' onclick='rpl($qid)'>$response</a>";
}
else
{
echo "<a href='#' id='quest' onclick='rpl(0)'>No results found</a>";
//echo "<span id='quest'>No results found</a>";
}
}
?>