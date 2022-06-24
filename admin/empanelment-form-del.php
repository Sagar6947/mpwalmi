<?php

include'config.php';

if(isset($_GET['id']))
{
	$i=$_GET['id'];
	
	$q=mysqli_query($con,"delete from `resource_person` where id ='$i'");
	
	if($q)
	
	{
 
	    echo'<script> window.location="empanelment_form.php";</script>';
	}
	
}

?>