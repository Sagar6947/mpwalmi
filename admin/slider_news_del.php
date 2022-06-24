<?php

include('config.php');

if(isset($_GET['id']))
{

	$i=$_GET['id'];

	$qx=mysqli_query($con,"select * from `slider_news` WHERE `id`='$i'");
	$fd = mysqli_fetch_array($qx);
	unlink('news/'.$fd['image']);


	$q=mysqli_query($con,"DELETE FROM `slider_news` WHERE `id`='$i'");
	if($q)
	{
	   echo '<script>window.location="slider-news.php"</script>';
		
}
}
