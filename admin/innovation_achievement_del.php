<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from innovation where inno_id='$i'");
	
	if($q)
	
	{
	   header("location:innovation_achievement_dis.php");
	}
	
}

?>