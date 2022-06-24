<?php 
include('admin/config.php');

if (isset($_POST['submit'])) {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['mobile'];
    $message =  $_POST['message']; 
    $sal = mysqli_query($con, "INSERT INTO `contact`( `name`, `email`, `phone`, `message`) VALUES   ('" . $name . "' , '" . $email . "' ,'" . $phone . "' ,'" . $message . "')");
    if ($sal) {
        echo '<script>alert("Thank You We will Contact You Soon!", "You clicked the button!", "success")</script>';
    } else {
        echo '<script>alert("something went wrong!", "You clicked the button!", "danger")</script>';
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content=" Contact Us | M.P. Water and Land Management Institute, Bhopal">
    <meta name="description" content=" M.P. Water and Land Management Institute (WALMI), Bhopal. <br>(An Autonomous Institution of Government of Madhya Pradesh) , Fill the form below to contact.">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>

        <div class="title-section dark-bg module grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-page module">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-lg-8 col-md-8 col-padding-y card">
                        <div class="comment-form">
                            <h2>Fill the form below to contact</h2>
                            <p> M.P. Water and Land Management Institute (WALMI), Bhopal. <br>(An Autonomous Institution of Government of Madhya Pradesh)</p>
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="name" value="" id="uname" class="form-control" placeholder="Name" />

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="mobile" value="" id="mobile" class="form-control" placeholder="Mobile" />

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="email" value="" id="email" class="form-control" placeholder="Email" />

                                    </div>
                                    <div class="col-md-12 Textarea-btn">
                                        <textarea name="message" cols="20" rows="4" id="message" class="form-control  mb-3" placeholder="Message"></textarea>
                                        <button class="btn btn-secondary btn-padding btn-dark-animated" type="submit" name="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-3 col-padding-y grey-bg-color">
                        <div class="contact-address">
                            <i class="fas fa-mobile-alt"></i>
                            <h6>phone</h6>
                            <p> 0755-2492672</p>
                            <p>0755-2492432</p>
                        </div>
                        <div class="contact-address">
                            <i class="fas fa-map-marker-alt"></i>
                            <h6>address</h6>
                            <p> WALMI, Kolar Rd,Near Kaliyasot Dam, Bhopal, Madhya Pradesh 462016</p>
                        </div>
                        <div class="contact-address">
                            <i class="far fa-envelope"></i>
                            <h6>Email</h6>
                            <a href="mailto:mpwalmi@gmail.com"><span>mpwalmi@gmail.com</span></a>
                        </div>
                    </div>
                    <!--<div class="col-sm-12 col-lg-12 col-md-12 col-padding-y">-->
                    <!--    <div class="contact-map">-->
                    <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12330.695150419098!2d-104.8778931128081!3d39.40888565113789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd61cb55fc2964aec!2sOutlets+at+Castle+Rock!5e0!3m2!1sen!2s!4v1460940151482" height="270" allowfullscreen></iframe>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>