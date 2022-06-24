<?php
include("config.php");
session_start();
if(!isset($_SESSION['status']))
{
	header('location:index.php');	
}

?>
   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
     <title>Home | एमपी। जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-home"></i>मुख्य पृष्ठ</h1>
          <p>व्यवस्थापक में आपका स्वागत है, महान दिवस पर जाएं।</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="">मुख्य पृष्ठ</a></li>
        </ul>
      </div>
         <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="fa fa-file-image-o" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text"> गैलरी </div>
                        <div class="number">
                        <?php
										$s=mysqli_query($con,"select * from gallery");
										echo mysqli_num_rows($s);
									?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="fa fa-list-ol"></i> </div>
                    <div class="content">
                        <div class="text">संपर्क करें</div>
                        <div class="number">
                          <?php
										$s=mysqli_query($con,"select * from contact");
										echo mysqli_num_rows($s);
									?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="fa fa-bell" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text">नोटिस और निविदा</div>
                        <div class="number">
                         <?php
										$s=mysqli_query($con,"select * from notice_tender");
										echo mysqli_num_rows($s);
									?>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">  <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text">प्रशिक्षण कार्यक्रम</div>
                        <div class="number"> <?php
										$s=mysqli_query($con,"select * from anual");
										echo mysqli_num_rows($s);
									?>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text"> छात्र इंटर्नशिप फॉर्म</div>
                        <div class="number">
                        <?php
										$s=mysqli_query($con,"select * from student");
										echo mysqli_num_rows($s);
									?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="fa fa-building-o" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text">सुविधा</div>
                        <div class="number">
                        <?php
										$s=mysqli_query($con,"select * from facility");
										echo mysqli_num_rows($s);
									?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">  <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text">कार्यक्रम</div>
                        <div class="number"><?php
										$s=mysqli_query($con,"select * from program");
										echo mysqli_num_rows($s);
									?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">  <i class="fa fa-newspaper-o" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text">समाचार</div>
                        <div class="number"><?php
										$s=mysqli_query($con,"select * from news");
										echo mysqli_num_rows($s);
									?></div>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">  <i class="fa fa-newspaper-o" aria-hidden="true"></i> </div>
                    <div class="content">
                        <div class="text">प्रकाशन</div>
                        <div class="number">
                        <?php
										$s=mysqli_query($con,"select * from publication");
										echo mysqli_num_rows($s);
									?>
                        </div>
                    </div>
                </div>
            </div>
             
               
               
              
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      
      	$('#external-events .fc-event').each(function() {
      
      		// store data so the calendar knows to render an event upon drop
      		$(this).data('event', {
      			title: $.trim($(this).text()), // use the element's text as the event title
      			stick: true // maintain when user navigates (see docs on the renderEvent method)
      		});
      
      		// make the event draggable using jQuery UI
      		$(this).draggable({
      			zIndex: 999,
      			revert: true,      // will cause the event to go back to its
      			revertDuration: 0  //  original position after the drag
      		});
      
      	});
      
      	$('#calendar').fullCalendar({
      		header: {
      			left: 'prev,next today',
      			center: 'title',
      			right: 'month,agendaWeek,agendaDay'
      		},
      		editable: true,
      		droppable: true, // this allows things to be dropped onto the calendar
      		drop: function() {
      			// is the "remove after drop" checkbox checked?
      			if ($('#drop-remove').is(':checked')) {
      				// if so, remove the element from the "Draggable Events" list
      				$(this).remove();
      			}
      		}
      	});
      
      
      });
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
	</body></html>