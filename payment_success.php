<?php
include('admin/config.php');
// echo 'pid='.$_SESSION['pid'];


?>
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
$sd = "SELECT * FROM `pmay_booking` WHERE `regis_id`='" . $productinfo . "'";
// echo $sd;
$rf = mysqli_query($con, $sd);
$ro = mysqli_fetch_array($rf);

$er = "SELECT * FROM `pmay_flats` WHERE `flat_id`='" . $ro['flat_id'] . "'";
$pro = mysqli_query($con, $er);
$row = mysqli_fetch_array($pro);
// print_r($row);
$er1 = "SELECT * FROM `pmay_blocks` WHERE `block_id`='" . $ro['block_id'] . "'";
$pro1 = mysqli_query($con, $er1);
$row1 = mysqli_fetch_array($pro1);
// print_r($row1);
$er2 = "SELECT * FROM `pmay_appartment_location` WHERE `app_id`='" . $ro['area_id'] . "'";
$pro2 = mysqli_query($con, $er2);
$row2 = mysqli_fetch_array($pro2);
// print_r($row2);

$er2A = "SELECT * FROM `pmay_booking_payment_receipt` WHERE `booking_data_id`='" . $productinfo . "' AND `booking_status` = '1' ";
$pro2A = mysqli_query($con, $er2A);
 if(mysqli_num_rows($pro2A) > 0){
     $my = mysqli_fetch_array($pro2A);
     $rt = "  UPDATE `pmay_booking_payment_receipt` SET `amount` = '".$amount."' , `utr` = '".$txnid."' , `payment_array` = '".json_encode($_POST)."' , `status` = '1' WHERE `id`='".$my['id']."'";
 }else{

$rt ="INSERT INTO `pmay_booking_payment_receipt`( `booking_data_id`, `amount`, `booking_type`, `utr`,  `payment_array`,  `status`,`booking_status`) VALUES ('".$productinfo."','".$amount."','1','".$txnid."','".json_encode($_POST)."','1','1')";
 } 
mysqli_query($con, $rt);
//  echo  $rt;
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
if ($hash != $posted_hash) {
    //  echo '<p class="subtitle subtitle--deep">Invalid Transaction. Please try again</p>';
    // echo "<h3>Thank You. Your payment status is " . $status . ".</h3>";
    // echo '<p class="subtitle subtitle--deep">Your Transaction ID for this transaction is <b>' . $txnid . '</b></p>';
    // echo "<h4>We have received a payment of Rs. " . $amount . ".  Our .</h4>";
} else {
    // echo "<h3>Thank You. Your payment status is " . $status . ".</h3>";
    // echo '<p class="subtitle subtitle--deep">Your Transaction ID for this transaction is ".$txnid.".</p>';
    // echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
}

$base_url = "http://bmcpmaybooking.com/";  //change this baseurl value as per your file path
sendOTP($ro['mobile'],'Booking Confirmation
Location: '.$row2['area_name'].'
Name: '.$ro['fullname'].'
Mobile: '.$ro['mobile'].'
Email : '.$ro['email'].'
Amount : Rs. '.$amount.'/-
Payment Status: '.$ro['payment_status'].'
https://bit.ly/3pe4wMD

Regards ,
SANDIYA SAMITI
');
sendOTP('9039005753','Booking Confirmation
Location: '.$row2['area_name'].'
Name: '.$ro['fullname'].'
Mobile: '.$ro['mobile'].'
Email : '.$ro['email'].'
Amount : Rs. '.$amount.'/-
Payment Status: '.$ro['payment_status'].'
https://bit.ly/3pe4wMD

Regards ,
SANDIYA SAMITI
');

sendOTP('9109249008','Booking Confirmation
Location: '.$row2['area_name'].'
Name: '.$ro['fullname'].'
Mobile: '.$ro['mobile'].'
Email : '.$ro['email'].'
Amount : Rs. '.$amount.'/-
Payment Status: '.$ro['payment_status'].'
https://bit.ly/3pe4wMD

Regards ,
SANDIYA SAMITI
');

sendOTP('9425335303','Booking Confirmation
Location: '.$row2['area_name'].'
Name: '.$ro['fullname'].'
Mobile: '.$ro['mobile'].'
Email : '.$ro['email'].'
Amount : Rs. '.$amount.'/-
Payment Status: '.$ro['payment_status'].'
https://bit.ly/3pe4wMD

Regards ,
SANDIYA SAMITI
');

$mail_body = "<p>New Booking is done , here are his details - <br>
<p>" . date_format(date_create($ro['create_date']), 'd-m-Y') . "
<td>
    Location : " . $row2['area_name'] . "<br>
    Block : " . $row1['block_name'] . "<br>
     
    Name :  " . $ro['fullname'] . "<br>
    Mobile : " . $ro['mobile'] . "<br>
    Email : " . $ro['email'] . "<br> 
    Amount : Rs. " . $amount . "/- <br>
    Payment Status : " . $ro['payment_status'] . "<br>
    
    For More details you can <a href='http://bmcpmaybooking.com/applicant_login.php'> Login Here </a> to view all receipt.Use your Mail ID - " . $ro['email'] . " to login.
 </p><p>Regards , <br/> PMAY BMC";

require 'php/class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();                                //Sets Mailer to send message using SMTP
$mail->Host = 'mail.bmcpmaybooking.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Port = '587';                                //Sets the default SMTP server port
$mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = 'bookingverification@bmcpmaybooking.com';                    //Sets SMTP username
$mail->Password = "j(*0d%z@OKLR";                    //Sets SMTP password
$mail->SMTPSecure = '';                            //Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = 'bookingverification@bmcpmaybooking.com';             //Sets the From email address for the message
$mail->FromName = 'Pmay BMC';                    //Sets the From name of the message
$mail->AddAddress('SANIDHYA30@GMAIL.COM',$ro['email']);        //Adds a "To" address			
$mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);                            //Sets message type to HTML				
$mail->Subject = 'New Booking Payment for ' . $row2['area_name'];            //Sets the Subject of the message
$mail->Body = $mail_body;                            //An HTML or plain text message body
if ($mail->Send())                                //Send an Email. Return true on success or false on error
{
    // echo '<script>alert("Check Your mail to get verified")</script>';
} else {
    // echo '<script>alert("Something went wrong")</script>';
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script>
        function printDiv() {
            var divContents = document.getElementById("formrec").innerHTML;
            var a = window.open('', '', 'height=800, width=800');
            a.document.write('<html><head>  <link rel="stylesheet" href="css/style.css"></head>');
            a.document.write('<body >  ');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }

        function printDivnew() {
            var divContents = document.getElementById("formrecnew").innerHTML;
            var a = window.open('', '', 'height=800, width=800');
            a.document.write('<html><head>  <link rel="stylesheet" href="css/style.css"></head>');
            a.document.write('<body >  ');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

</head>

<body class="stretched side-push-panel">

    <div id="wrapper" class="clearfix">

        <?php include('header.php'); ?>





        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="single-post nobottommargin">



                        <div class="  nobottommargin clearfix">

                            <div class="entry clearfix" id="formrec">

                                <div class="entry-title" style="text-align:center">
                                    <h2>Payment Receipt</h2>

                                    <h3>प्रधानमंत्री आवास योजना अंतर्गत <?= $row2["area_name"] ?> , Block - <?= $row1["block_name"] ?> (<?= $row1['block_type'] ?>)
                                        आवासीय इकाई
                                    </h3>
                                </div>
                                <div class="entry-title" style="text-align:right">
                                    <hr>
                                    <h4>Date : <?php $date=date_create($_POST["addedon"]); echo date_format($date,"d-m-Y H:i:s"); ?></h4>
                                    <hr>
                                </div>
                                <div class="entry-content notopmargin" style="text-align:justify">
                                    <div class="row">
                                        <table style="width:100%">
                                            <tr>
                                                <td style="width:50%">
                                                    योजना का नाम
                                                </td>
                                                <td style="width:50%">
                                                    <?= $row2["area_name"] ?> , Block - <?= $row1["block_name"] ?> (<?= $row1['block_type'] ?>)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    नाम
                                                </td>
                                                <td>
                                                    <?= $ro["fullname"] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    आवेदक के पिता/पति /पत्नी का नाम का नाम 
                                                </td>
                                                <td>
                                                    <?= $ro["father_husband"] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    आवास की श्रेढ़ी 
                                                </td>
                                                <td>
                                                    <?= $row2["area_name"] ?> , Block - <?= $row1["block_name"] ?> (<?= $row1['block_type'] ?>)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    राशि
                                                </td>
                                                <td>
                                                    Rs. <?= $amount ?> /-
                                                </td>
                                            </tr>
                                        </table>
                                             
                                            
                                        </div>
 
                                        <hr>
                                        <p>This is a computer-generated document and it does not require a signature.<br>
                                            Disclaimer: The data belongs to PMAY, Bhopal. For any communication related to the published data,Please
                                            contact PMAY Office Bhopal.</p>
                                        <br><br>
                                        <div class="entry-title" style="text-align:right">
                                            <hr>
                                            <h4>Authorised Signatory</h4>
                                            <hr>
                                        </div>
                                    <div class="clear"></div>
                                    <input type="button" value="Print Payment receipt" class="btn btn-secondary" onclick="printDiv()">
                                </div>
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