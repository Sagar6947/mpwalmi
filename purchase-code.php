<?php
session_start();
include"admin/config.php";
include('php/database_connection.php');
if (isset($_POST['submit'])) 
	{
  $date=date("d-m-y");
  $name =$_POST['name'];
  $phone =$_POST['phone'];
 
  $book_date =$_POST['book_date'];
  $tickets =$_POST['tickets'];
 
  $price = intval($_POST['price']);  
  $Total_price = $price *   $tickets; 

	$que = "INSERT INTO `booking`(`book_date`, `date`, `name`, `phone`, `tickets`, `price`)
	VALUES ('$book_date','$date','$name','$phone','$tickets','$Total_price')";
  $ru = mysqli_query($con, $que);
  
  $row = mysqli_query($con, "SELECT * FROM `booking` WHERE `book_date`='$book_date' AND `date`='$date' AND `name`='$name' AND `phone`='$phone'AND `tickets`='$tickets' AND `price`='$Total_price' ");
  $quer = mysqli_fetch_array($row);
  $_SESSION['purid']=$quer['id'];
 
  include('instamojo-php-master/src/Instamojo.php');
  $api = new Instamojo\Instamojo('f7b9f40feb6cb908933cd7e1ae626ec6', '596851670a25802d2ea15e3577533c71');
  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "प्रकृति मांगे स्वराज",
        "amount" => $Total_price,
        "send_email" => true,
        "email" => 'mpwalmi@gmail.com',
        "redirect_url" => "https://mpwalmi.org/payment.php?id=".$quer['id'].""
        //"webhook"=>
        ));
    //print_r($response);
    $pay_url = $response['longurl'];
    echo '<script>window.location="'.$pay_url.'"</script>';
    }
    catch (Exception $e) {
    print('Error: ' . $e->getMessage());
  }
  }
        


?>