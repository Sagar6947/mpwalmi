
<?php
include("config.php");
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}
if(isset($_POST['submit']))
{
	$a=$_POST['heading'];
	$b=$_POST['content'];

	$query=mysqli_query($con,"insert into `navachar` ( `heading`, `content`) values('".$a."','".$b."')");
	 if(!$query)
	{
		echo "<script>alert('value not  inserted')</script>";
	}
	else
	{
		echo "<script>alert('value inserted')</script>";
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
  <title>प्रशासनिक समिति :: मुख्य समाचार| एमपी जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="page/css/style.css" rel="stylesheet">
   <link href="page/css/blue.css" id="theme" rel="stylesheet">
     
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
    <main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-newspaper-o" aria-hidden="true"></i>नवाचार</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <li class="breadcrumb-item"><a  href="hmare_bare_me.php" ></a></li>
        </ul>
      </div>
       <div class="row">
                   
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="color:#33009F">नवाचार: </h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive m-t-40">
                          <table id="example23" class="display nowrap table  table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <form action="" method="post">
                                        <input type="text" name="heading" value="" placeholder="शीर्षक" style="height: 80px; width:300px;">
                                        <br/>
                                        <br/>
                                        
                                           <textarea name="content" value="" placeholder="समाचार" style="height: 150px; width: 80%;"></textarea>
                                        <br>
                                        <br/>
                                         <div class="form-group">
                                    <button type="submit" name="submit" class="theme-btn submit-btn" style="width: 150px; height:50px; background-color:#D96B0C"> भेजें</button>
                                </div>
                                                   </form> 
                                        </thead>
                                        <tbody>
                                            
                                       
                                                   <?php
  $q1=mysqli_query($con,"SELECT * FROM `navachar`");
  while($row=mysqli_fetch_array($q1))
  {
      echo
      '  
<div class="heading-orange">'.$row[heading].'</div>
					<br>
<div class="text">'.$row[content].'
</div>
  <a class="btn btn-primary" href="navachar_del.php?id='.$row['id'].'">Delete</a>
';
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
		       	</div>
                 
            </div>
        </div>
      </div>
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
   
		 <script src="page/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="page/js/popper.min.js"></script>
    <script src="page/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="page/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="page/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="page/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="page/js/sticky-kit.min.js"></script>
    <script src="page/js/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="page/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="page/js/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="page/js/jQuery.style.switcher.js"></script>
  </body>
</html>