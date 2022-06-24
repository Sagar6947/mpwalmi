<?php
 include("admin/config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecological park Events - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
    <style>
        /*.resp*/
        /*{*/
        /*    width:300px;*/
        /*    height:200px;*/
        /*    object-fit:cover;*/
        /*}*/
    </style>
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>
        <div class="title-section dark-bg module grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h1>Ecological park Events</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-title">
            <h2>Ecological park <span>Events</span></h2>
            
        </div>
        <div class="container grey-bg-color">
            <div class="row">
                <?php
                $c = mysqli_query($con, "select * from park_events WHERE status = 0");
                while ($a = mysqli_fetch_array($c)) {
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="course-warp">
                            <div class="course-img">
                                <img src="admin/img/<?= $a['image'] ?>" alt="<?= $a['title'] ?>" class="resp">
                            </div>
                            <div class="course-text">
                                <h5><a><?= $a['title'] ?></a></h5>
                                <p class="price">₹ <?= $a['offer_price'] ?>/- </p>
                                <a href="book-tickets.php?id=<?= $a['id'] ?>" class="btn btn-light btn-dark-animated">Book Now</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>


        <?php include 'footer.php' ?>
    </div>
</body>

</html>