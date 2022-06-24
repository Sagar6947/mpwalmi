<?php include 'admin/config.php';

if (isset($_POST['submit'])) {
    $msg;
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $education = mysqli_real_escape_string($con, $_POST['education']);

    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $internship_sub = mysqli_real_escape_string($con, $_POST['internship_sub']);
    $experience = mysqli_real_escape_string($con, $_POST['experience']);


    $sal = mysqli_query($con, "INSERT INTO `student`(`name`, `dob`, `address`, `city`, `mobile`, `email`, `education`, `subject`, `internship_sub`, `experience`) VALUES ('$name','$dob','$address','$city','$mobile','$email','$education','$subject','$internship_sub','$experience')");

    if ($sal) {

        $msg = "आपका फॉर्म जमा हो गया है।
हम आपसे शीघ्र ही संपर्क करेंगे";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internship Form - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>

        <div class="title-section dark-bg grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h2>Internship</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="appointment grey-bg grey-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 grey-bg-color">
                        <div class="appointment-form">
                            <br>
                            <p align="justify">म.प्र. जल एवं भूमि प्रबंध संस्थान, भोपाल द्वारा प्राकृतिक संसाधन प्रबंधन हेतु वाल्मीकी पद्धति से सघन वृक्षारोपण, नेनो वाटरशेड आधारित विकास, छतीय जल संग्रहण, ग्रीन वॉल, जैविक अपशिष्ट प्रबंधन इत्यादि क्षेत्रों में विभिन्न प्रयोगों के द्वारा नवीन तकनीकों को कियान्वित किया गया है। संस्थान इन तकनीकों को देश व प्रदेश में विस्तारित करना चाहता है। इस हेतु संस्थान प्राकृतिक संसाधन, संरक्षण, संवर्धन एवं प्रबंधन के क्षेत्र में विशेषज्ञता रखने वाले इंटनर्स को इम्पेनल कर इंटर्नशिप कार्यक्रम प्रारम्भ कर रहा है। इच्छुक प्रतिभागी आवदेन पत्र के माध्यम से अपना आवेदन प्रेषित करे</p>
                            <h2><span>Internship Application Form</span></h2>
                           <form action="" method="post">
                                <div class="row clearfix ">
                                  
                                   <p><?= $msg ?></p>
                                        <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                                            <label class="control-label"> आवेदक का नाम </label>
                                            <input class="form-control" type="text" name="name" placeholder="यहां अपना नाम दर्ज करें" required>
                                        </div>

                                        <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                                            <label class="control-label"> जन्मतिथि  :</label>
                                            <input class="form-control" type="text" name="age" placeholder="" required>
                                        </div>


                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">वर्तमान पता :</label>
                                            <input class="form-control" type="text" name="designation" placeholder="" required>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">शहर का नाम :</label>
                                            <input class="form-control" type="text" name="qua" required>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">वाहट्सएप्प मोबाइल नंबर :</label>
                                            <input class="form-control" type="text" name="address" required>
                                        </div>



                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">ईमेल  :</label>
                                            <input class="form-control" type="text" name="city" required>
                                        </div>


                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">शैक्षिक योग्यता (Mark one):</label>
                                            <input class="form-control" type="text" name="mobile" required> स्नातक 
                                            स्नातकोत्तर 
                                            पीएचडी 
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">
                                            शैक्षिक योग्यता का विषय </label>
                                            <input class="form-control" type="text" name="email" required>
                                        </div>

                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group">
                                            <label class="control-label">इंटर्नशिप करने का विषय ( जिसमे आप इंटर्नशिप करना चाहते है </label><br>
                                            <input class="" type="radio" name="pro" value="Service"> सघन वन विकास <br>
                                            <input class="" type="radio" name="pro" value="Retired"> छतीय जल संरक्षण एवं भू -जल संवर्धन <br>
                                            <input class="" type="radio" name="pro" value="Private"> जैविक अपशिष्ट प्रबंधन <br>
                                            <input class="" type="radio" name="pro" value="Private"> ग्रीन वॉल <br>
                                            <input class="" type="radio" name="pro" value="Private"> इकोलॉजिकल ऑक्सीजन एवं  एडवेंचर स्पोर्ट्स <br>
                                            <input class="" type="radio" name="pro" value="Private"> नेनो वाटरशेड <br>


                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <label class="control-label">
                                            अनुभव  / प्रशिक्षण  यदि कोई हो तो 
                                            </label><br>
                                            <input class="" type="radio" name="grade" value="1"> class 1<br>
                                            <input class="" type="radio" name="grade" value="2"> class 2<br>
                                            <input class="" type="radio" name="grade" value="3"> class 3<br>

                                        </div>
                                         
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group"><br>
                                            <button class="btn btn-primary submit-btn" class="form-control" type="submit" name="submit">Submit Form</button>
                                        </div>

                                    </div>
                                   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include 'footer.php' ?>
    </div>
</body>

</html>