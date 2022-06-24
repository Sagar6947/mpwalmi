<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from m_news where id='$i'");
	
	if($q)
	
	{
	   echo'<script> window.location="main_news_dis.php";</script>';
	}
	
}

?>