<?php

   include("config.php"); 
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}								

$c=mysqli_query($con,"SELECT * FROM `eadesh` WHERE id='".$_GET['id']."' ");
$a=mysqli_fetch_array($c);


if (isset($_POST['upload'])) 
	{
	$order_id = mysqli_real_escape_string($con, $_POST['order_id']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$letter = mysqli_real_escape_string($con, $_POST['letter']);

	$subject = mysqli_real_escape_string($con, $_POST['subject']);

if($_FILES['pdf']['name'] != '')
{
	$file=$_FILES['pdf']['name'];
    $tmpfile=$_FILES['pdf']['tmp_name'];
    $folder=$file;
    move_uploaded_file($tmpfile,'img/'.$folder);
}
else
{
    $folder = $_POST['pdf2'];
}
		
		
	if(mysqli_query($con, "UPDATE `eadesh` SET `order_id`='$order_id',`date`='$date',`letter`='$letter',`subject`='$subject',`pdf`='$folder' WHERE id='".$_GET['id']."'")) 
	{
			 
			 echo'<script> window.location="eadesh_dis.php";</script>';
	} 
	else 
	{
			echo "Error in Insertion of your image...Please try again later!";
	}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
     <title>प्रशासनिक समिति ::  | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-bell" aria-hidden="true"></i>ई-आदेश  अपलोड करें</h1>
          <p>ई-आदेश  अपलोड करें जो आप चाहते हैं।</p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <!--0div class="tile">
            <div class="tile-body">Create a beautiful dashboard</div>
          </div-->
		  
		  <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">ई-आदेश </h3>
            <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
                 <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
              	 <div class="form-group">
                  <label class="control-label">S No. : </label>
                  <input class="form-control" name="order_id" type="text" value="<?= $a['order_id'] ?>" >
                </div>
                <div class="form-group">
                  <label class="control-label">Date :</label>
                  <input class="form-control" name="date" type="date" value="<?= $a['date'] ?>" >
                </div>
                <div class="form-group">
                  <label class="control-label">Letter No. : </label>
                  <input class="form-control" name="letter" type="text" value="<?= $a['letter'] ?>" >
                </div>
                
                
                 <div class="form-group">
                  <label class="control-label">Subject : </label>
                  <input class="form-control" name="subject" type="text" value="<?= $a['subject'] ?>" >
                </div>
                 
                
                <div class="form-group">
                  <label class="control-label">अपनी  फ़ाइल दर्ज करें</label>
                  <input class="form-control" name="pdf" type="file" value="">
                  <input class="form-control" name="pdf2" type="hidden" value="<?= $a['pdf'] ?>">
                  
                  
                </div>
			 
				
				<div class="form-group">
                  
                </div><br>
				<button class="btn btn-primary" name="upload" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>
              </form>
            </div>
			</div></div>
		  
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>