<?php
include('admin/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Publications - M.P. Water and Land Management Institute, Bhopal</title>
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
                            <h2>Publications</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="all-events module ">
            <div class="container ">
                <div class="row">
                    <?php
                    $c = mysqli_query($con, "select * from publication order by id desc");

                    while ($a = mysqli_fetch_array($c)) {
                    ?>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-padding-y grey-bg-color">
                            <div class="events-wrap">
                                <div class="event-img">
                                    <img src="admin/img/<?= $a['image'] ?>" alt="<?= $a['title'] ?>">
                                </div>
                                <div class="event-text">
                                    <h5><a ><?= $a['title'] ?></a></h5>
                                    <a href="admin/img/<?= $a['pdf'] ?>" class="btn btn-primary btn-padding btn-animated" target="_blank">View</a>
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