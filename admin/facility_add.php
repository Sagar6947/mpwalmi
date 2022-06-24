<?php
include("config.php");
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}
 

$f=$_GET['id'];
$ab=mysqli_query($con,"SELECT * FROM `facility` where id= '$f' ");
$ac=mysqli_fetch_array($ab);
$abc=$ac['category'];
$bca=$ac['id'];
if (isset($_POST['upload'])) 
{
	 $c = mysqli_real_escape_string($con, $_POST['description1']);
	$sal=mysqli_query($con, "INSERT INTO `facility_c` (`c_id`,`description1`) VALUES('".$bca."','".$c."')");
		if($sal)
	  {
			   echo'<script> window.location="facility_dis.php";</script>';
	  } 
	  else 
	  {
			  echo "Error in Insertion of your detail...Please try again later!";
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
  <title>प्रशासनिक समिति :: भविष्य की योजना  | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //textbox-->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- //textbox-->
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;&nbsp;नई सुविधा अद्यतन करें</h1>
          <p>यहां नई सुविधा अअद्यतन करें जो आपकी वेबसाइट में दिखाया जाएगा।</p>
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
            <h3 class="tile-title">यहां सुविधा अअद्यतन पलोड करें</h3>
            <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                  <label class="control-label">शीर्षक</label>
                  <input type="text"  name="category" class="form-control" value="<?php echo $abc ; ?>"  readonly style="color:#FFF; background-color:#C03"/>
                </div>
              
				    <div class="form-group">
                  <label class="control-label">विवरण लिखो</label>
                   <textarea id="text_editog" class="form-control" rows="10" name="description1"  value="" placeholder="कृपया यहां अपना शिलालेख लिखें"></textarea>
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
        CKEDITOR.replace( 'text_editog' );
      </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
  </body>
</html>