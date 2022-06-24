<?php
include('admin/config.php');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photo Gallery - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="">
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
                            <h1>Projects</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-chose-us grey-bg">
           
            <div class="container">
                <div class="row">
                    <?php
                    $i = 0;
                    $q = mysqli_query($con, "select * from projects ");

                    while ($pro = mysqli_fetch_array($q)) {
                        $i = $i + 1;
                    ?>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-padding-y">
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="card animated" data-animation="slideInUp" data-animation-delay="400">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>"><?= wordwrap($pro['title'], 280, "<br>"); ?></button>
                                            </h2>
                                        </div>
                                        <div id="collapse<?= $i ?>" class="collapse" aria-labelledby="heading<?= $i ?>" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?= $pro['description']; ?>
                                            </div>
                                        </div>
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