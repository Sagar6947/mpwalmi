<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from `ecological_park` where eco_id='$i'");
	
	if($q)
	
	{
 
	    echo'<script> window.location="ecological-park.php";</script>';
	}
	
}

?>