<?php include('admin/config.php');



 if(isset($_POST['submit'])) 
	{
 $name =  $_POST['name'];
 
  $address =  $_POST['address'];
   $city =  $_POST['city'];
  $email =  $_POST['email'];
   $phone =  $_POST['mobile'];
    $message =  $_POST['message'];
	


	$sal=mysqli_query($con, "INSERT INTO `feedback`( `name`, `address`, `city`, `mobile`, `email`, `message`) VALUES  ('".$name."' ,'".$address."' , '".$city."', '".$email."' ,'".$phone."' ,'".$message."')");

if($sal)
{
echo '<script>alert(" Thank You For Feedback!", "You clicked the button!", "success")</script>';
}

else
{
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
    <title>Feedback - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="Feedback - M.P. Water and Land Management Institute, Bhopal">
    <meta name="description" content="If you want to provide feedback or suggestion here is the form for it ,M.P. Water and Land Management Institute, Bhopal ">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>

        <div class="title-section dark-bg module grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y ">
                        <div class="title-section-text">
                        <h2>Feedback/Suggestion</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-12 col-lg-12 col-md-6 col-padding-y grey-bg-color">
                        <div class="comment-form">
                            <h2>If you have any Feedback or any Suggestion ,Let us know</h2>
                            <p>* Information to be filled with essentials must be filled.</p>
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="name" value="" id="uname" class="form-control" placeholder="Name"  required />
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="text" name="mobile" value="" id="mobile" class="form-control" placeholder="Mobile" required />
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <input type="text" name="email" value="" id="email" class="form-control" placeholder="Email" required />
                                    </div> 
                                    <div class="col-md-8 mb-3">
                                        <input type="text" name="address" value="" id="address" class="form-control" placeholder="Address" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="city" value="" id="city" class="form-control" placeholder="City" required />
                                    </div>
                                    
                                    <div class="col-md-12 Textarea-btn">
                                         <textarea name="message" cols="20" rows="4" id="message" class="form-control" placeholder="Message" ></textarea>
                                        <button class="btn btn-secondary btn-padding btn-dark-animated" type="submit" name="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>


        <?php include 'footer.php' ?>
    </div>
</body>

</html>