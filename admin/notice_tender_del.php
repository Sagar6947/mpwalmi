<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from notice_tender where id='$i'");
	
	if($q)
	
	{
	 echo'<script> window.location="notice_tender_dis.php";</script>';
	}
	
}

?>