<?php
session_start();
include"admin/config.php";

// $_GET = $_SESSION['purid'];
// print_r( $_GET);
$f = "UPDATE `booking` SET `payment_id`= '".$_GET['payment_id']."',`payment_request_id`='".$_GET['payment_request_id']."',`status`='Book' WHERE  `id` = '".$_GET['id']."' AND `status` = 'NEW' ";
// echo $f;
$query = mysqli_query($con,$f);

$rowx = mysqli_query($con, "SELECT * FROM `booking` WHERE `id`='".$_GET['id']."' ");
  $querx = mysqli_fetch_array($rowx);

		$result1 = curl_exec($res);
?>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title> Payment  | M.P. Water and Land Management Institute, Bhopal</title>
<?php include'header-link.php'; ?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>
        <div class="title-section dark-bg module grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h1>Thank You ! Your Payment is successfull </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class=" container ">
                    <div class=" content-wrapper wrap ">
						<div class="container-top">
						    
						    <h3 style="color:green">please take a screenshot of this receipt</h3>
						    <table class="table table-bordered" style="background:white;">
 
  <tbody>
    <tr>
    
      <td>Name</td>
      <td><?= $querx['name']; ?></td>
    
    </tr>
    <tr>
     <td>phone</td>
      <td><?= $querx['phone']; ?></td>
    </tr>
    
    <tr>
     <td>Tickets</td>
      <td><?= $querx['tickets']; ?></td>
    </tr>
    <tr>
     <td>Price</td>
      <td>Rs. <?= $querx['price']; ?>/-</td>
    </tr>
    
     <tr>
     <td>Payment ID</td>
      <td><?= $_GET['payment_id']; ?></td>
    </tr>
    
     <tr>
     <td>Payment Request ID</td>
      <td> <?= $_GET['payment_request_id']; ?></td>
    </tr>
    

  </tbody>
</table>
						    
           
                    </div>
                </div>
            </div>

<script type="text/javascript" src="webroot/plugins/jquery.validate.min.js"></script>

</div>
<?php include('footer.php');
?>
	<?php include'footer-link.php'?>
</body>

</html>