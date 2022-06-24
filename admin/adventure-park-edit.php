<?php

 include("config.php");
 session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}
if(isset($_GET['id']))
{
	$i=$_GET['id'];
}

								
	if (isset($_POST['upload']))
			{
					 
	$e = mysqli_real_escape_string($con, $_POST['description']);
	
				
				    $qu=mysqli_query($con,"UPDATE `adventure_park` SET `description`='".$e."' WHERE  ad_id='$i' ");
				if ($qu)
				{
					
					 echo'  <script>window.location="adventure-park.php"</script>';
				     }	
			    
				}
            $sqlq=mysqli_query($con,"select * from  `adventure_park` WHERE `ad_id`='$i' ");
            $row=mysqli_fetch_array($sqlq);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <meta charset="utf-8">
  <title>प्रशासनिक समिति :: सुविधा | एमपी जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //textbox-->
  <link href="htmleditor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="htmleditor/css/bootstrap-wysihtml5.css" />
    <!-- Custom CSS -->
      <link href="htmleditor/css/style.css" rel="stylesheet">
          <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<!-- //textbox-->
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;&nbsp;
रोमांच पार्क        </h1>          <p>यहां
पारिस्थितिक पार्क जो आपकी वेबसाइट में दिखाया जाएगा।</p>
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
            <h3 class="tile-title">
रोमांच पाार्क अपलोड करें</h3>
            <div class="form-group">
               <div class="tile-body">
                   
               <form action="" method="post" enctype="multipart/form-data">
                
				    <div class="form-group">
                  <label class="control-label">विवरण लिखो</label>
              <textarea id="text_edito" class="form-control" rows="10" 
              name="description" value="<?php echo $row['description'];?>" placeholder="कृपया यहां अपना शिलालेख लिखें"><?php echo $row['description']; ?></textarea>
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
    <script src="htmleditor/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="htmleditor/js/popper.min.js"></script>
    <script src="htmleditor/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="htmleditor/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="htmleditor/js//waves.js"></script>
    <!--Menu sidebar -->
    <script src="htmleditor/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="htmleditor/js/sticky-kit.min.js"></script>
    <script src="htmleditor/js/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="htmleditor/js/custom.min.js"></script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="htmleditor/js/wysihtml5-0.3.0.js"></script>
    <script src="htmleditor/js/bootstrap-wysihtml5.js"></script>
    
     <script type="text/javascript">
        CKEDITOR.replace( 'text_edito' );
      </script>
  </body>
</html>