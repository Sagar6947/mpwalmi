<?php
include("admin/config.php"); 
$aid = $_GET['id'];
 $query ="SELECT * FROM `facility` WHERE `id` = '".$aid."'" ;
//  echo $query;
$ca=mysqli_query($con,$query);
$a=mysqli_fetch_array($ca);
// print_r($a);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facility-Details - M.P. Water and Land Management Institute, Bhopal</title>
    
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
                            <h2><?= $a['title'] ?></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-chose-us ">
            
            <div class="single-post-page blog-post-page module ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 col-padding-y ">
                            <div class="single-post single-post-no-bg">
                                <div class="img-thumbnail">
                                    <img src="admin/facilities/<?= $a['image'] ?>" alt="<?= $a['title'] ?>" >
                                </div>
                                <div class="single-blog-text">
                                    <h5><a href="facilities-details-mpwalmi.php?id=<?= $a['inno_id'] ?>"><?= substr($a['title'],0,45); ?></a></h5>
                                    <p><?= $a['description'] ?></p>
                                    <!--<p>Education Solutions</p>-->
                                    <!--<p>When you consider everything not going or following the way you planned for your life the problem rise up that time for you and you consider things should change in case you can start growing ...</p>-->
                                    <!--<div class="meta-tags">-->
                                    <!--    <div class="post-author">-->
                                    <!--        <i class="far fa-calendar-check"><span>25 August 2018</span></i>-->
                                    <!--        <i class="far fa-user"><a href="#"> Ateeq Rafeeq</a></i>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-padding-y">
                            <div class="widget side-bar border-btm">
                                <div class="content widget-popular-posts">
                                    <h6>WALMI</h6>
                                     <?php
                  $i=0;
                  $c=mysqli_query($con,"SELECT * FROM `facility`");
                  while($a=mysqli_fetch_array($c))
				  {
				          ?>
                                    <div class="popular-posts">
                                        <h6><a href="facilities-details-mpwalmi.php?id=<?= $a['id'] ?>"><strong><?= $a['title'] ?></strong></a></h6>
                                        
                                    </div>
                                    <hr>
                                     <?php
                     }
                     ?>
                                </div>
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