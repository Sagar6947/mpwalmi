<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from publication where id='$i'");
	
	if($q)
	
	{
	echo'<script> window.location="publications_dis.php";</script>';
	}
	
}

?>