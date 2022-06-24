<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from future_plan where id='$i'");
	
	if($q)
	
	{
	  	  echo'<script> window.location="future_plan_dis";</script>';
	}
	
}

?>