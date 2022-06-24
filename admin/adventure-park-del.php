<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from `adventure_park` where ad_id='$i'");
	
	if($q)
	
	{
 
	    echo'<script> window.location="adventure-park.php";</script>';
	}
	
}

?>