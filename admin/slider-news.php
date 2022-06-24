<?php
include('config.php');

session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}				
if (isset($_POST['submit'])) {
	$c =  $_POST['description'];

	$file = $_FILES['logo']['name'];
	$tmpfile = $_FILES['logo']['tmp_name'];
	$folder = date("dmy") . $file;
	move_uploaded_file($tmpfile, 'news/' . $folder);


	$sal = mysqli_query($con, "INSERT INTO `slider_news`( `image`, `description`) VALUES ('" . $folder . "','" . $c . "')");



	if ($sal) {
		echo '<script>window.location="slider-news.php"</script>';
	} else {
		echo '<script>alert("Something went Wrong!", "You clicked the button!", "danger")</script>';
	}
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:site" content="@pratikborsadiya">
	<meta property="twitter:creator" content="@pratikborsadiya">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Vali Admin">
	<meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
	<meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
	<meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
	<meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
	<title>प्रशासनिक समिति :: सुविधा | एमपी जल और भूमि प्रबंधन संस्थान, भोपाल</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>


</head>

<body class="app sidebar-mini rtl">
	<?php include 'header.php'; ?>
	<main class="app-content">
		<div class="app-title">
			<div>
				<h1><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;&nbsp; Slider News</h1>

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="tile">

							<div class="tile-body">
								<form action="" method="post" enctype="multipart/form-data">


									<div class="form-group">
										<label class="control-label">Image</label>
										<input class="form-control" name="logo" type="file" value="">
									</div>

									<div class="form-group">
										<label class="control-label">Content</label>
										<textarea id="editor1" rows="10" cols="80" name="description" required="">

									</textarea>
									</div>



									<div class="form-group">
										<button class="btn btn-primary" name="submit" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>


			<div class="row">

				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive m-t-40">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno</th>
											<th>Image</th>
											<th>Content</th>

											<th>Delete </th>
										</tr>
									</thead>

									<tbody>


										<?php

										$i = 0;
										$cs = mysqli_query($con, "SELECT * FROM `slider_news` ORDER BY `id` DESC");


										while ($a = mysqli_fetch_array($cs)) {
										
											$i = $i + 1;
										?>
											<tr>
												<td><?= $i ?></td>


												<td><img src="news/<?= $a['image'] ?>" style="height:80px;"></td>

												<td> <?= $a['description'] ?></td>

												<td><a class="btn btn-primary" href="slider_news_del.php?id=<?= $a['id'] ?>">Delete</td>


											</tr>
										<?php
										}
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
	</main>


	<script>
		CKEDITOR.replace('editor1');
	</script>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/plugins/pace.min.js"></script>
	<script type="text/javascript">
		if (document.location.hostname == 'pratikborsadiya.in') {
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-72504830-1', 'auto');
			ga('send', 'pageview');
		}
	</script>

	<script type="text/javascript">
		CKEDITOR.replace('text_edito');
	</script>

</body>

</html>