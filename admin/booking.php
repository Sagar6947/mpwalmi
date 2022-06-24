<?php

include("config.php");
 
$c=mysqli_query($con,"select * from booking WHERE `status` ='Book' ORDER BY id DESC");



?>
<!DOCTYPE html>
<html lang="en">
  <head>
     
     
  <title>Ticket Booking Details</title>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="page/css/style.css" rel="stylesheet">
   <link href="page/css/blue.css" id="theme" rel="stylesheet">
     
  </head>
  <body class="app sidebar-mini rtl">
 
    <main class="app-content">
     
       <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="color:#33009F">Booking Details</h4> 
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                     <th>S.No.</th>
                    <th>Booking Date</th>
                     <th>Name/Number</th>
                      <th>Ticket</th>
                       <th>Amount</th>
                        <th>Payment ID</th>
                         <th>Status</th>
                          
                   
                    
                   </tr>
                                        </thead>
                                         
                                        <tbody>
                                           
							 
                                            
                                              <?php
                                                 while($a=mysqli_fetch_array($c))
											                     {
											                             
											
											                         
												                        echo  
					   ' <tr>					  
                                                 <td>'.$a['id'].'</td>
											 
												<td>'.$a['book_date'].'</td>
                                                <td>'.$a['name'].'</br> '.$a['phone'].' </td>
                                                <td>'.$a['tickets'].'</td>
                                                <td>'.$a['price'].'</td>
												<td>'.substr($a['payment_id'],0,50).'</td>
                                                 <td>'.$a['status'].'</td> 
												 
												  
                                                 
                                            </tr>';
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
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
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
		 <script src="page/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="page/js/popper.min.js"></script>
    <script src="page/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="page/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="page/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="page/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="page/js/sticky-kit.min.js"></script>
    <script src="page/js/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="page/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="page/js/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="page/js/jQuery.style.switcher.js"></script>
  </body>
</html>