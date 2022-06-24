<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"DELETE FROM `more-info` where id='$i'");
	
	if($q)
	
	{
	    echo'<script> window.location="more_info.php";</script>';
	}
	
}

?>