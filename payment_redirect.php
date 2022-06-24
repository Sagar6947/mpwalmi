<?php
session_start();
include "admin/config.php";

if (isset($_POST['submit'])) {
    $date = date("d-m-y");
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $book_date = $_POST['book_date'];
    $tickets = $_POST['tickets'];
    $price = intval($_POST['price']);
    $Total_price = $price *   $tickets;

    // $que = "INSERT INTO `booking`(`book_date`, `date`, `name`, `phone`, `tickets`, `price`)	VALUES ('$book_date','$date','$name','$phone','$tickets','$Total_price')";
    // $ru = mysqli_query($con, $que);
    // $product = mysqli_insert_id($con);


// if($ru)
// {
//     echo'<script>window.location="https://pmny.in/mIvqc24RAimA"</script>';
//}



    //   $row = mysqli_query($con, "SELECT * FROM `booking` WHERE `book_date`='$book_date' AND `date`='$date' AND `name`='$name' AND `phone`='$phone'AND `tickets`='$tickets' AND `price`='$Total_price' ");
    //   $quer = mysqli_fetch_array($row);
    //   $_SESSION['purid']=$quer['id'];

    //   include('instamojo-php-master/src/Instamojo.php');
    //   $api = new Instamojo\Instamojo('f7b9f40feb6cb908933cd7e1ae626ec6', '596851670a25802d2ea15e3577533c71');
    //   try {
    //     $response = $api->paymentRequestCreate(array(
    //         "purpose" => "प्रकृति मांगे स्वराज",
    //         "amount" => $Total_price,
    //         "send_email" => true,
    //         "email" => 'mpwalmi@gmail.com',
    //         "redirect_url" => "https://mpwalmi.org/payment.php?id=".$quer['id'].""
    //         //"webhook"=>
    //         ));
    //     //print_r($response);
    //     $pay_url = $response['longurl'];
    //     echo '<script>window.location="'.$pay_url.'"</script>';
    //     }
    //     catch (Exception $e) {
    //     print('Error: ' . $e->getMessage());
    //   }
    //   }

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Ticket - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>



        <div class="why-chose-us grey-bg">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="single-post single-post-no-bg">
                            <div class="single-blog-text">
                                <form id="login-form" action="payment_redirect_code.php" method="post">
                                    <div class="col_full">
                                        <input type="number" name="amount" value="<?= $Total_price ?>" class="form-control not-dark" />
                                        <input type="text" name="name" value="<?= $name ?>" class="form-control not-dark" />
                                        <input type="text" name="email" value="harsha@gmail.com" class="form-control not-dark" />
                                         <input type="text" name="phone" value="<?= $phone ?>" class="form-control not-dark" />
                                        <input type="text" name="product" value="<?= $product ?>" class="form-control not-dark" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" name="login-form-submit" type="submit" value="otp_verify">Proceed</button>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        
    <?php include 'footer-link.php' ?>
<script>
    $('#login-form').submit();
</script>
        <?php include 'footer.php' ?>
    </div>
</body>

</html>