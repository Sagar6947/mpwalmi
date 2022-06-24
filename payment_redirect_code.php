<?php
#remove below if you have latest version of php,it will not show warnings
error_reporting(E_ERROR | E_PARSE);

include "payu/PayUClient.php";

use payu\PayUClient;

$PAYU_BASE_URL = "https://secure.payu.in";
$KEY = "iHdfkz";
$SALT = "nAHQ97KdFY74IydhkGEbZk95C562oUGW";

// $PAYU_BASE_URL = "https://test.payu.in";
// $KEY = "gzemsh"; //Please change this value with live key for production
// $SALT = "iZspKOPu"; //Please change this value with live salt for production

// $PAYU_BASE_URL = "https://secure.payu.in";
$action = $PAYU_BASE_URL . '/_payment';
// $action = "http://localhost:8888/PHP_SAMPLE_APP 2/checkout.php";
// echo $action;
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$amount = (int)($_POST['amount']);
$firstname = $_POST['name'];
$email = $_POST['email'];
$productinfo = $_POST['product'];
$udf1 = "";
$udf2 = "";
$udf3 = "";
$udf4 = "";
$udf5 = "";

# You should set your key & salt values to the function as below:
$payuClient = new PayUClient($KEY, $SALT);


# Set params as follows
 $params = $KEY .'|'.$txnid .'|'. $amount.'|'. $productinfo .'|'. $firstname .'|'. $email .'|'. $udf1 .'|'. $udf2 .'|'. $udf3 .'|'. $udf4 .'|'. $udf5 .'||||||'. $SALT;
// $params = array("txnid" => $txnid, "amount" => $amount, "productinfo" => $productinfo, "firstname" => $firstname, "email" => $email, "udf1" => $udf1, "udf2" => $udf2, "udf3" => $udf3, "udf4" => $udf4, "udf5" => $udf5 , '' ,'' );
// =sha512(key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5||||||salt) 
# you can generate payment hash as follows:
$hash = new Hasher();
$payment_hash = $hash->generate_hash($params);
?>


<html>

<head>
  <style>
    div {
      height: 200px;
      width: 400px;
      background: white;

      position: fixed;
      top: 90%;
      left: 55%;
      margin-top: -100px;
      margin-left: -200px;

      /* h1 {
        text-align: center;
      }

      p {
        text-align: center;
      } */

      /* div {text-align: center;} */
    }
  </style>
  <script>
    function load() {
      // document.payuform.submit()
      // var payuForm = document.forms.payuForm;
      //       payuForm.submit();
      document.payuform.submit();
    }
  </script>
</head>


<body >

  <div>
    <h1>Redirecting...</h1>
    <p>Wait while we redirect to you</p>

  </div>

  <form action="<?php echo $action; ?>" name="payuform" id="payuform" method="post">

    <!--<input type="text" name="key" value="<?php echo $key ?>" />-->
    <!--<input type="text" name="txnid" value="<?php echo $txnid ?>" />-->
    <!--<input type="text" name="amount" value="10" />-->
    <!--<input type="text" name="firstname" value="Muskan jain" />-->
    <!--<input type="text" name="email" value="muskan@gmail.com" />-->
    <!--<input type="text" name="productinfo" value="1" />-->
    <!--<input type="text" name="hash" value="<?php echo $payment_hash ?>" />-->
    <input type="text" name="surl" value="https://mpwalmi.org/payment_success.php" />
    <!--Please change this parameter value with your success page absolute url like http://mywebsite.com/response.php. -->
    <input type="text" name="furl" value="https://mpwalmi.org/payment_failure.php" />
    <!--Please change this parameter value with your failure page absolute url like http://mywebsite.com/response.php. -->
    <input name="curl" type="text" value="" />
    <input name="udf1" type="text" value="" />
    <input name="udf2" type="text" value="" />
    <input name="udf3" type="text" value="" />
    <input name="udf4" type="text" value="" />
    <input name="udf5" type="text" value="" />
    <input type="submit" value="submit"/>
</body>

</html>