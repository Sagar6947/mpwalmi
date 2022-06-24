<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from `park_events` where id='$i'");
	
	if($q)
	
	{
	echo'<script> window.location="park-events.php";</script>';
	}
	
}

?>