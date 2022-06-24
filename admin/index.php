<?php
include("config.php");
 
 if (isset($_POST["submit"]))
{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM `login` WHERE name = '" . $name. "' and password = '" . $password . "'");

	if ($row = mysqli_fetch_array($result)) 
	{
		session_start();
		$_SESSION['status'] = 'Active';
		echo '<script>window.location="home.php";</script>';
	} 
	else 
	{
		echo "Incorrect Username  or Password!!!";
	}														 
														
}
													 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>प्रशासनिक समिति :: सूची | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1> एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>दाखिल करना</h3>
          <div class="form-group">
            <label class="control-label">उपयोगकर्ता नाम</label>
            <input class="form-control" name="name" type="text" placeholder="अपने उपयोगकर्ता नाम दर्ज करें" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">पारण शब्द</label>
            <input class="form-control" name="password" type="password" placeholder="अपना उपयोगकर्ता पासवर्ड दर्ज करें">
          </div>
          <div class="form-group">
           <br>
          </div>
           
            <button class="btn btn-primary btn-block" name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>यहां साइन इन करो</button>
           
        </form>
						
         
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
     
  </body>
</html>