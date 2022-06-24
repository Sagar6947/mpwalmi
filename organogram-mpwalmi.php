<?php
include("admin/config.php"); ?>
<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Organogram - M.P. Water and Land Management Institute, Bhopal</title>
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
                                <h2>Organogram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-chose-us grey-bg">


                <div class="single-post-page blog-post-page module">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-padding-y grey-bg-color">
                                <div class="single-post single-post-no-bg">

                                    <div class="single-blog-text">

                                        <h2 font-size: 50px;>Governing body</h2></br>

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Office-bearers</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chief Secretary</td>
                                                    <td>Chairman</td>

                                                </tr>
                                                <tr>
                                                    <td>Additional Chief Secretary/Principal Secretary, Department of Panchayat and Rural Development</td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Commissioner of Agricultural Production, Madhya Pradesh </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Additional Chief Secretary/ Principal Secretary, Department of Finance </td>
                                                    <td>Member</td>

                                                </tr>
                                                <tr>
                                                    <td>Additional Chief Secretary/ Principal Secretary, Narmada Valley Development Department </td>
                                                    <td>Member</td>

                                                </tr>
                                                <tr>
                                                    <td>Principal Secretary, Department of Farmers Welfare and Agricultural Development </td>
                                                    <td>Member</td>

                                                </tr>


                                                <tr>
                                                    <td>Principal Secretary, Department of Horticulture </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Director, Walmi </td>
                                                    <td>Member Secretary</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-padding-y grey-bg-color">
                                <div class="single-post single-post-no-bg">

                                    <div class="single-blog-text">

                                        <h2 font-size: 50px;>Executive Committe</h2></br>

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Office-bearers</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Additional Chief Secretary/ Principal Secretary, Panchayat and Rural Development Department</td>
                                                    <td>Chairman</td>

                                                </tr>
                                                <tr>
                                                    <td>Principal Secretary, Department of Water Resources</td>
                                                    <td>Member</td>+

                                                </tr>

                                                <tr>
                                                    <td>Secretary, Department of Finance </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Principal Secretary/Secretary, Department of Farmers Welfare and Agriculture Development </td>
                                                    <td>Member</td>

                                                </tr>
                                                <tr>
                                                    <td>Chief Executive Officer, M.P. Rural Road Development Authority </td>
                                                    <td>Member</td>

                                                </tr>
                                                <tr>
                                                    <td>Director, Rajiv Gandhi Watershed Management Mission/ Chief Executive Officer </td>
                                                    <td>SLNA Integrated Watershed
                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>Management Program </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Chief Executive, State Rural Livelihoods Mission </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Project Director, World Bank Projects, Department of Water Resources </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Chief Engineer, Rural Mechanics Service </td>
                                                    <td>Member</td>

                                                </tr>
                                                <tr>
                                                    <td>Commissioner, Irrigation Area Development, Water Resources Department </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Director, Horticulture </td>
                                                    <td>Member</td>

                                                </tr>

                                                <tr>
                                                    <td>Director, Fishing </td>
                                                    <td>Member</td>

                                                </tr>
                                                <tr>
                                                    <td>Director, Walmi </td>
                                                    <td>Member Secretary</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="our-staff module">

                <div class="section-title">
                    <h2>Best Certified <span>Faculty</span></h2>
                    <p>We have some great teachers and trainers in our staff who have professional experience along high education. Which gives you peace of mind.</p>
                </div>
                <div class="row">
                   <?php
                   $i=0;
                   $cc=mysqli_query($con,"SELECT * FROM `padadhikari` WHERE `status` = 1 ORDER BY id DESC ");
                   while($aa=mysqli_fetch_array($cc))
                   {
                       ?>

                       <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="staff-wrap hover-wrap">
                            <div class="hover-img">
                                <img src="admin/<?= $aa['pdf'];?>"  alt="Staff Images" style="height:500px">

                            </div>
                            <div class="staff-text hover-bottom">
                                <div class="staff-name">
                                   <h5><?= $aa['name'] ?></h5>
                                   <p><?= $aa['designation'] ?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <?php
               }
               ?>

           </div>
       </div>

       <div class="our-staff module">

        <div class="section-title">
            <h2>Best Certified <span>Faculty</span></h2>
            <p>We have some great teachers and trainers in our staff who have professional experience along high education. Which gives you peace of mind.</p>
        </div>
        <div class="row">
           <?php
           $i=0;
           $c=mysqli_query($con,"SELECT * FROM `padadhikari` WHERE `status` = 0");
           while($a=mysqli_fetch_array($c))
           {
               ?>

               <div class="col-sm-12 col-md-4 col-lg-3 col-padding-y">
                   <div class="staff-wrap hover-wrap" >
                    <div class="hover-img" >
                        <img src="admin/<?= $a['pdf'];?>" alt="Staff Images" style="height:350px">
                        <div class="staff-detail hover-info">

                        </div>
                    </div>
                    <div class="staff-text hover-bottom">
                        <div class="staff-name">
                            <h5><a><?= $a['name'] ?></a></h5>
                            <p><?= $a['designation'] ?></p>
                        </div>

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
