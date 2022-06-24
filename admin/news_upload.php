<?php

   include("config.php"); 
		
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}								
if (isset($_POST['upload'])) 
	{
	$a = mysqli_real_escape_string($con, $_POST['title']);
		
		
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"img/" . $newFilename);
	$photo="img/" . $newFilename;
	 
	
 
	
	if(mysqli_query($con, "INSERT INTO `press_release`( `title`, `image`) VALUES
						   VALUES('" . $a. "', '" . $photo . "')")) 
	{
			  echo'<script> window.location="press_release.php";</script>';
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

  <title>Press Release | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
       <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-newspaper-o" aria-hidden="true"></i> Press Release अपलोड करें</h1>
          <p>यहां नई  Press Release अपलोड करें जो आपकी वेबसाइट में दिखाया जाएगा।</p>
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
            <h3 class="tile-title">नई  Press Release अपलोड करें</h3>
            <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">शीर्षक अपलोड करें</label>
                  <input class="form-control" name="title" type="text" placeholder="पूरा शीर्षक दर्ज करें" value="">
                </div>
                
               
                <div class="form-group">
                  <label class="control-label">नई छवि यहां अपलोड करें</label>
                  <input class="form-control" name="image" type="file" value="">
                </div>
				 
				  
                <div class="form-group">
                 
				<button class="btn btn-primary" name="upload" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>
              </form>
            </div>
			</div></div>
		  
        </div>
      </div>
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        CKEDITOR.replace( 'text_edito' );
      </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
  </body>
</html>