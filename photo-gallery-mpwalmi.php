 <?php
  include('admin/config.php'); ?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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

        <div class="title-section dark-bg grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h2>Photo Gallery</h2>
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
 
        <div class="portfolio module">
             <div class="container main  text-center">

                <div id="myBtnContainer text-center">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn" onclick="filterSelection('distinguished')">  Distinguished Guests  Gallery</button>
                    <button class="btn" onclick="filterSelection('general')">  General  Gallery</button>
                    
                </div>
                <hr>
                <div class="container">
                <div class="row">
                   <?php
                  $nm = mysqli_query($con, "select * from gallery ORDER BY id DESC ");
                  while ($a = mysqli_fetch_array($nm)) {
                  ?> 
                  
                    <div class="col-sm-3 col-lg-3 col-md-3 col-padding-y column <?= (($a['category_status'] == 0)? 'distinguished':'general') ?>">
                        <div class="portfolio-gallery">
                            <div class="portfolio-row">
                                <div class="portfolio-info">
                                    <img src="admin/<?= $a['image'] ?>" alt="<?= $a['title'] ?>" loading="lazy">
                                    <a class="portfolio-text" href="admin/<?= $a['image'] ?>">
                                        <img src="assets/images/help/icons/plus-1.png" alt=" <?= $a['title'] ?>">
                                         <h2><?= $a['title'] ?></h2> 
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
                <!-- Portfolio Gallery Grid -->
                

                <!-- END MAIN -->
            </div>
            
        </div>

        <?php include 'footer.php' ?>
         <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");

        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                for (i = 0; i < btns.length; i++) {
                    w3RemoveClass(btns[i], "active");

                }
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    </div>
</body>

</html>