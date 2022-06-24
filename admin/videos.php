<?php
 
  
include("config.php");
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}								
if (isset($_POST['upload'])) 
	{
$path = $_POST['path'];

	if(mysqli_query($con, "INSERT INTO `videos`(`path`) VALUES ('$path')")) 
	{
			  
			 echo'<script> window.location="videos.php";</script>';
	} 
	else 
	{
			echo "<script>alert('Something went wrong...Please try again later!')</script>";
	}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
   <title>Upload Videos | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
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
          <h1><i class="fa fa-file-image-o" aria-hidden="true"></i>Upload Videos</h1>
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
            <h3 class="tile-title">Upload Videos</h3>
            <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
              	 
                <div class="form-group">
                  <lable>Upload Embed Video path</lable>
                  <input class="form-control" name="path" type="text" placeholder="Youtube Video path">
                </div>
			
				  
                <div class="form-group">
                 
				<button class="btn btn-primary" name="upload" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>
              </form>
            </div>
			</div></div>
		   <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="color:#33009F">Videos Display</h4>
                                <h6 class="card-subtitle">कॉपी, सीएसवी, एक्सेल, पीडीएफ और प्रिंट में डेटा निर्यात करें |</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                    <th>क्रमांक</th>
                   
                     <th>तस्वीरें</th>
				
 					<th>हटाना</th>
                   </tr>
                                        </thead>
                                         
                                        <tbody>
                                           
							 
                                            
                                              <?php
                                             $c=mysqli_query($con,"select * from videos ");
                                                 while($a=mysqli_fetch_array($c))
											                     {
												                        echo  
					                        ' <tr>					  
                                                <td>'.$a['id'].'</td>
												<td><iframe class="col-md-6" style="border:0;height:150px;padding:5px;"  src="'. $a["path"].'" /></iframe></td>
											
 												<td><a class="btn btn-primary" href="video-del.php?id='.$a['id'].'"> Delete</td>
												  
                                                 
                                            </tr>';
				                        }
				                       ?>
                                             
                                        </tbody>
                                    </table>
                                </div>
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