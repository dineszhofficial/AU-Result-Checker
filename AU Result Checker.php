<?php
$base_url="http://aucoe.annauniv.edu/cgi-bin/result/cgrade.pl?regno=";
if($_REQUEST['submit']!="")
{
	$reg=$_REQUEST['regno'];
	$res=$base_url.$reg;
	$link="<script>window.open('$res')</script>";
	echo $link;
	
}
?>
<html>
<center>
<form action="" method="post">
<input id="regno" name="regno" required="" type="text" placeholder="Register Number" /><br/>
<input id="submit" name="submit" type="submit" value="Get Result" />
</form>