<?php
include("admin/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Latest Events - M.P. Water and Land Management Institute, Bhopal</title>
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
                            <h2>Latest Events</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio module ">
            <div class="container">
                <div class="row">

                    <?php
                    $nm = mysqli_query($con, "select * from event ORDER BY id DESC ");
                    while ($a = mysqli_fetch_array($nm)) {
                    ?>
                        <div class="col-sm-12 col-lg-4 col-md-4 col-padding-y">
                            <div class="portfolio-gallery">
                                <div class="portfolio-row">
                                    <div class="portfolio-info">
                                        <img src="admin/<?= $a['image'] ?>" alt="<?= $a['title'] ?> ">
                                        <a class="portfolio-text" href="admin/<?= $a['image'] ?>">
                                            <img src="admin/<?= $a['image'] ?>" alt="">
                                            <!-- <h2><?= $a['title'] ?></h2> -->
                                        </a>
                                    </div>
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