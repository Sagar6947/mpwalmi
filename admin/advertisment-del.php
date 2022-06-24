<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from advertisment where id='$i'");
	
	if($q)
	
	{
	  echo'<script> window.location="advertisment-upload.php";</script>';
	}
	
}

?>