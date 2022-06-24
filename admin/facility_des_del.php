<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"DELETE FROM `facility_c` WHERE id='$i'");
	
	if($q)
	
	{
	    echo'<script> window.location="facility_dis.php";</script>';
	}
	
}

?>