<?php
include("admin/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facilities - M.P. Water and Land Management Institute, Bhopal</title>
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
        <div class="title-section dark-bg module grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h2>Facilities</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-post blog-post-page  grey-bg-color">
            <div class="container">
                <div class="row">
                      <?php
                  $i=0;
                  $c=mysqli_query($con,"SELECT * FROM `facility` ");
                  while($a=mysqli_fetch_array($c))
				  {
				          ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="blog-box">
                            <div >
                                <img src="facilities/<?= $a['image'] ?>" alt="<?=$a['title'] ?>" class="innov-img" >
                            </div>
                            <div class="blog-text">
                                <h5><a href="facilities-details-mpwalmi.php?id=<?= $a['id'] ?>"><?= substr($a['title'],0,45); ?>...</a></h5>
                                
                               
                              
                            </div>
                        </div>
                    </div>

                 <?php
                     }
                     ?>
                </div>

            </div>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>