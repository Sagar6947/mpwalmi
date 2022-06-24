<?php
 
    include("config.php"); 
								
if (isset($_POST['upload'])) 
	{
	$a = mysqli_real_escape_string($con, $_POST['category']);
	
	$b=$_POST['facility_image'];
	$c=$_POST['description'];
 	
	/*$content = mysqli_real_escape_string($con, $_POST['content']);
	
	$author = mysqli_real_escape_string($con, $_POST['author']);*/
	
	if(mysqli_query($con, "INSERT INTO `facility` (`category`, `f_image`, `description`) VALUES('" . $a. "', '" . $b . "','" . $c . "')")) 
	{
			 header("location:facility_dis.php");
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
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
<!-- //textbox-->
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;&nbsp;नई सुविधा अपलोड करें</h1>
          <p>यहां नई सुविधा अपलोड करें जो आपकी वेबसाइट में दिखाया जाएगा।</p>
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
            <h3 class="tile-title">नई सुविधा अपलोड करें</h3>
            <div class="tile-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">शीर्षक वर्ग</label>
                   <select class="form-control" name="category">
                     <option value="">--अपनी श्रेणी का चयन करें--</option>
                  <option value="छात्रावास">छात्रावास</option>
                  <option value="क्रान्फ्रेसहॉल">क्रान्फ्रेस हॉल</option>
                  <option value="बैठकहॉल">बैठक हॉल</option>
                  <option value="व्याख्यानहॉल">व्याख्यान हॉल</option>
                   <option value="कंप्यूटरलैब">कंप्यूटर लैब</option>
               
                   <option value="पुस्तकालय">पुस्तकालय</option>
                    <option value="प्रदर्शनकृषि">प्रदर्शन कृषि</option>
                   <option value="मिट्टीपरीक्षणप्रयोगशाला">मिट्टी परीक्षण प्रयोगशाला</option>
                    <option value="सभागार">सभागार</option>
                   <option value="भोजनशाला">भोजनशाला</option>
                    <option value="ट्रांसपोर्ट">ट्रांसपोर्ट</option>
                   </select>
                </div>
                 
                 	
               
				
				    <div class="form-group">
                  <label class="control-label">विवरण लिखो</label>
                   <textarea class="textarea_editor form-control" rows="10" name="description"  value="" placeholder="कृपया यहां अपना शिलालेख लिखें"></textarea>
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
    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();


    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
  </body>
</html>