<?php
include('admin/config.php');
$sd = "SELECT * FROM `pmay_booking` WHERE `regis_id`='" . $_SESSION['pid'] . "'";
$rf = mysqli_query($con,$sd);
$ro = mysqli_fetch_array($rf);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>PMAY Bhopal Muncipal Corporation Booking | Pradhan Mantri Awas Yojana Bhopal </title>

    <meta name="author" content="PMAY Bhopal Muncipal Corporation Booking | Pradhan Mantri Awas Yojana Bhopal" />
    <meta name="title" content="PMAY Bhopal Muncipal Corporation Booking | Pradhan Mantri Awas Yojana Bhopal" />
    <meta name="discription" content="Ministry of Housing & Urban Affairs has initiated Affordable Rental Housing Complexes (ARHCs), a sub-scheme under Pradhan Mantri Awas Yojana - Urban (PMAY-U). This will provide ease of living to urban migrants/ poor in Industrial Sector as well as in non-formal urban economy to get access to dignified affordable rental housing close to their workplace." />

    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />

    <link rel="stylesheet" href="demos/real-estate/real-estate.css" type="text/css" />
    <link rel="stylesheet" href="demos/real-estate/css/font-icons.css" type="text/css" />

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="demos/real-estate/fonts.css" type="text/css" />

    <link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

    <link rel="stylesheet" href="css/components/bs-switches.css" type="text/css" />

    <link rel="stylesheet" href="css/components/ion.rangeslider.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" href="css/colorsbf2e.php?color=2C3E50" type="text/css" /> -->


</head>

<body class="stretched side-push-panel">

    <div id="wrapper" class="clearfix">

        <?php include('header.php'); ?>




        <section id="content">
            <div class="content-wrap nopadding">
                <div class="section nopadding nomargin" style="width: 100%; height: 90%; position: absolute; left: 0; top: 0; background:#f5f5f5 "></div>
                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container-fluid  divcenter clearfix">
                        <br>
                        <div class="card divcenter noradius noborder" style="max-width: 500px;">
                            <div class="card-body" style="padding: 40px;">
                                <?php
                                //   print_r($_POST);
                                $status = $_POST["status"];
                                $firstname = $_POST["firstname"];
                                $amount = $_POST["amount"];
                                $txnid = $_POST["txnid"];
                                $posted_hash = $_POST["hash"];
                                $key = $_POST["key"];
                                $productinfo = $_POST["productinfo"];
                                $email = $_POST["email"];
                                $salt = "";
                                // echo $_SESSION['pid'];
                                $er2A = "SELECT * FROM `pmay_booking_payment_receipt` WHERE `booking_data_id`='" . $productinfo . "' AND `booking_status` = '1' ";
$pro2A = mysqli_query($con, $er2A);
 if(mysqli_num_rows($pro2A) > 0){
     $my = mysqli_fetch_array($pro2A);
     $rt = "  UPDATE `pmay_booking_payment_receipt` SET `amount` = '".$amount."' , `utr` = '".$txnid."' , `payment_array` = '".json_encode($_POST)."', `status` = '2' WHERE `id`='".$my['id']."'";
 }else{

$rt ="INSERT INTO `pmay_booking_payment_receipt`( `booking_data_id`, `amount`, `booking_type`, `utr`,  `payment_array`,  `status`,`booking_status`) VALUES ('".$productinfo."','".$amount."','1','".$txnid."','".json_encode($_POST)."','2','1')";
 }
                                // $rt1 = "UPDATE `pmay_flats` SET `booking_status`='2'  WHERE `flat_id`='" . $ro['flat_id'] . "'";
                                // mysqli_query($con, $rt1);
                                if (isset($_POST["additionalCharges"])) {
                                    $additionalCharges = $_POST["additionalCharges"];
                                    // echo $retHashSeq;
                                    $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
                                } else {

                                    $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
                                    //  echo $retHashSeq;
                                }
                                $hash = hash("sha512", $retHashSeq);
                                //   echo $hash;
                                
                                    //  echo '<p class="subtitle subtitle--deep">Invalid Transaction. Please try again</p>';
                                    echo "<h3>Transaction Error.<br> Your payment status is " . $status . ".</h3>";
                                    echo '<p class="subtitle subtitle--deep">Your Transaction ID for this transaction is <b>' . $txnid . '</b></p>';
                                    echo "<h4>Technical error - " . $_POST['error_Message'] . ".  </h4>";
                                 
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         




        <?php include('footer.php'); ?>
    </div>

    <div id="gotoTop" class="icon-angle-up"></div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAO2BYvn4xyrdisvP8feA4AS_PGZFxJDp4"></script>
    <script src="js/jquery.gmap.js"></script>
    <script src="js/components/bs-select.js"></script>
    <script src="js/components/bs-switches.js"></script>
    <script src="js/components/rangeslider.min.js"></script>
    <script src="js/functions.js"></script>


</body>


</html>