 <?php
  
   include("config.php");
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
      <title>प्रशासनिक समिति :: सुविधा अद्यतन| एमपी जल और भूमि प्रबंधन संस्थान, भोपाल</title>
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
          <h1><i class="fa fa-building-o" aria-hidden="true"></i>
रोमांच पार्क अद्यतन करें</h1>
          <p>सामग्री डिजाइन प्रेरित कार्ड
          </p>
               </div>
           <ul class="app-breadcrumb breadcrumb">
          
          <li class="breadcrumb-item"><a class="btn btn-primary" 
          href="add-adventure-park.php">
रोमांच पार्क  </a></li>
        </ul>
   
        
      </div>
	  
    <div class="row">
	
    <?php
		$q=mysqli_query($con,"select * from  `adventure_park` ");
		
				   while($row=mysqli_fetch_array($q))
				   {
				      
					   echo 
        '  <div class="col-lg-12"><div class="tile">
           
            <div class="tile-body">'.$row['description'].' </div>
            <div class="tile-footer">
			 <a class="btn btn-primary"
			 href="adventure-park-edit.php?id='.$row['ad_id'].'">Edit</a>
		 <a class="btn btn-primary" 
		 href="adventure-park-del.php?id='.$row['ad_id'].'">Delete</a></div>
           </div></div>
		  ';
				   }
				   ?> 
        </div></div>
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