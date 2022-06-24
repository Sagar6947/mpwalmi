<?php
include('admin/config.php');
?>
  <head>
  <title> Home | M.P. Water and Land Management Institute, Bhopal</title>
<?php include('header-link.php');
?>

  </head>
  <body>
  <div class="main" id="fontSize">
  <div class="main-content" >
  <?php include('header.php'); ?>
  <!-- /navigation -->

  <div class="fontresize" id="content-section">


  <div class=" container ">
  <div class=" content-wrapper wrap ">
  <div class="container-top">
  <div class="row">

  <div class="col-12 text-right">
  
  <a href="logout.php"><button type="button" class="btn btn-sm btn-danger">Logout</button></a>
  </div>
  </div>
  </div>
  <h3>Employee Dashboard</h3>
  <hr>
  <div class="row">
  <div class="col-lg-12">

  			<table class="table table-striped">
                                      <thead class="thead-dark">
                                        <tr>


    <th>Letter  No.</th>
   <th>Date</th>
   <th>Subject</th>
      <th>Document</th>
  </tr>
<?php
$c=mysqli_query($con,"select * from eadesh order by date desc");
 while($a=mysqli_fetch_array($c))
 {
?>
  <tr > 

  <!--<td><?= $a['order_id']; ?></td>-->
  <td><?= $a['letter']; ?> </font></td>
  <td ><?=date_format(date_create($a['date']), "d M,Y") ?>
</font></td>
<td><?= $a['subject']; ?></td>
  <td ><a href="admin/img/<?=$a['pdf'] ?>"  class="btn btn-primary" target="_blank">View </a>
  <a href="admin/img/<?=$a['pdf'] ?>"  class="btn btn-primary" download><i class="fa fa-download" aria-hidden="true" style="height:22px;" ></i></a></td>


  </tr>
<?php
}
?>

  </table>

  </div>
  </div>
  </div>
  </div>

  <script type="text/javascript" src="webroot/plugins/jquery.validate.min.js"></script>

  </div>
  <?php include('footer.php');
  ?>

 <?php include('footer-link.php');
?>
  


  </div><!--End main--></body>

  </html>