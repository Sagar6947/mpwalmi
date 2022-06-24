<?php

  include("config.php");
    session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}
								
if (isset($_POST['upload'])) 
	{
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
    
     $file=$_FILES['image']['name'];
    $tmpfile=$_FILES['image']['tmp_name'];
     $photo = (($file == '') ? '' : date("dmYHis") . $file);
     move_uploaded_file($tmpfile,'innovation/'.$photo);
     
     
     
	$ins = "INSERT INTO `innovation`(`title`, `image`, `description`) VALUES  ('" . $title. "','" . $photo . "' , '" . $description . "')"; 
	
	$insert = mysqli_query($con, $ins);
	if($insert)
	{
			 header("location:innovation_achievement_dis.php");
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
  <title>Innovation And Best Practices | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //textbox-->
  <link href="htmleditor/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
      <link href="htmleditor/css/style.css" rel="stylesheet">
<!-- //textbox-->
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cogs"></i>Innovation And Best Practices</h1>
              </div>
      
      </div>
      <div class="row">
        <div class="col-md-12">
         
		  
		  <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Upload Innovation And Best Practices</h3>
            <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Title</label>
                   <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                
                 <div class="form-group">
                  <label class="control-label">Image</label>
                  <input class="form-control" name="image" type="file" value="">
                </div>
				
				    <div class="form-group">
                  <label class="control-label">Description</label>
                   <textarea class="form-control"  id="editor1" rows="10" name="description"  value="" placeholder="Description"></textarea>
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
      <script src="htmleditor/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="htmleditor/js/popper.min.js"></script>
    <script src="htmleditor/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="htmleditor/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="htmleditor/js//waves.js"></script>
    <script src="htmleditor/js/sidebarmenu.js"></script>
    <script src="htmleditor/js/sticky-kit.min.js"></script>
    <script src="htmleditor/js/jquery.sparkline.min.js"></script>
    <script src="htmleditor/js/custom.min.js"></script>
    <script src="htmleditor/js/wysihtml5-0.3.0.js"></script>
    <script src="htmleditor/js/bootstrap-wysihtml5.js"></script>
  <script>
        CKEDITOR.replace('editor1');
    </script>
    <!-- Style switcher -->
  </body>
</html>