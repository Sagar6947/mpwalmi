<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from eadesh where id='$i'");
	
	if($q)
	
	{
	 echo'<script> window.location="eadesh_dis.php";</script>';
	}
	
}

?>