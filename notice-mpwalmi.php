<?php
include("admin/config.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notice | M.P. Water and Land Management Institute, Bhopal</title>
	<meta name="description" content="Notice and Tender WALMI is a premiere autonomous training institute, working in the field of natural resources management as a part of Panchayat and the Rural Development Department, Govt. of M.P." />
	<meta name="keywords" content="Notice and Tender WALMI is a premiere autonomous training institute, working in the field of natural resources management as a part of Panchayat and the Rural Development Department, Govt. of M.P." />
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
                            <h2 >Notice / नोटिस  </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-post-page blog-post-page module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-padding-y grey-bg-color">
                        <div class="single-post single-post-no-bg">
                            
                            <div class="single-blog-text">
                                
                                <div class="single-post-text">
                                    
                                   	<table class="table table-striped">
  <thead class="">
    <tr>
     <th scope="col" style="text-align:center;">S.no.</th>
      <th scope="col">विषय</th>
      <th scope="col" style="text-align:center;">विवरण</th>
										  <th scope="col" style="text-align:center;">View</th>
      
    </tr>
  </thead>
  <tbody>
   <?php
   $i=1;
   $c=mysqli_query($con,"select * from notice_tender WHERE category = '0' order by id desc");
   while($a=mysqli_fetch_array($c))
											                     {
?>
      
      
    <tr>
    <td style="text-align:center;"><?= $i ?></td>
      <td><?= wordwrap($a['title'],150, '</br>'); ?></td>
       <td  style="text-align:center;"> <a  href="admin/<?= $a['pdf'] ?>"  target="_blank" download> <i class="fa fa-download" aria-hidden="true"></i></a> 
</td>   
<td style="text-align:center;"> <a href="admin/<?= $a['pdf'] ?>"   target="_blank"  > <i class="fa fa-eye" aria-hidden="true"></i>
</a></td>
    </tr>
    
    <?php
    $i++;
     }
     ?>
      </tbody>
</table>
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