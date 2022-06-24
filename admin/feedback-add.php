<?php

   include("config.php"); 
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}								
if (isset($_POST['upload'])) 
	{
 $name =  $_POST['name'];
 $message =  $_POST['message'];
  $video_path =  $_POST['link'];
 
 
   $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "" , $video_path);
              $video_path = preg_replace("#.*https://youtu.be/#", "" , $video_path);
		
		
	if(mysqli_query($con, "INSERT INTO `feedback`( `name`, `message`, `link`) VALUES ('$name','$message','$video_path')")) 
	{
			 
			 echo'<script> window.location="feedback.php";</script>';
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
     <title>Feedback  | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
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
          <h1><i class="fa fa-bell" aria-hidden="true"></i>Add Feedback</h1>
         
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
            <h3 class="tile-title">Ecological park  Events </h3>
            <div class="tile-body">
             
                 <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">
              	 <div class="form-group col-sm-12">
                 <label>Name</label>
                                 
                  <input type="text" name="name" value="" id="uname" class="form-control" placeholder="Name"  />
                </div>
               
               <div class="form-group col-sm-12">
                  <label class="control-label">Video Link : </label>
           <input type="text" name="link" value="" id="uname" class="form-control" placeholder="url//"  />
                 </div>
                 
                  <div class="form-group col-sm-12">
                  <label class="control-label">feedback : </label>
            <textarea name="message" class="form-control" rows="8"></textarea>
                 </div>
              
				</div>
				<div class="form-group">
                  
                </div><br>
				<button class="btn btn-primary" name="upload" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>
				</div>
              </form>
            </div>
			</div>
		  
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