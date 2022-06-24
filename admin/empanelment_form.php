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
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>Empanelment Form | एमपी जल और भूमि प्रबंधन संस्थान, भोपाल</title>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="page/css/style.css" rel="stylesheet">
   <link href="page/css/blue.css" id="theme" rel="stylesheet">
     
  </head>
  <body class="app sidebar-mini rtl">
<?php include 'header.php'; ?>
    <main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-address-book-o"></i>  Empanelment Form</h1>
          <p>सामग्री डिजाइन प्रेरित कार्ड</p>
        </div>
       
      </div>
       <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="color:#33009F">संपर्क टेबल्स</h4>
                                <h6 class="card-subtitle">कॉपी, सीएसवी, एक्सेल, पीडीएफ और प्रिंट में डेटा निर्यात करें |</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                    <th>Sno</th>
                       <th>Date</th>
                    <th>Name</th>
                    
                    <th>Email</th>
                    
                   <th> Mobile</th>
                   
                    <th>Age
                    
                   <th> Designation</th>
                    
                    
                   <th> Qualification</th>
                   
                   
                   
                      <th>Address</th>
                      <th>City</th>
					<th>Profession
					</th>
					<th>Grade</th>
                  
                    <th>Organisation</th>
                    <th>Experience</th>
                     <th>Prefared geographical region</th>
                    <th>Specialization area
                    </th><th>other specialization</th>
                    
                    
                    <th>Complete pro.</th>
                    <th>international pro.</th>
                     <th>Inational pro. Agency</th>
                     <th>pro. type</th>
                     <th>Pro. executed area</th>
                     <th>Pro related to</th>
                     <th>Research publication 
                     
                     </th><th>TOT certification</th>
                     <th>Teaching Exp. </th>
                     <th>Training conducted Subject</th>
                     <th>Training level </th>
                     <th>Asso. with other training inst.</th>
                      <th>TMA 
                      </th>
                      <th>
                      ATCA</th>
                       <th>Training modual </th>
                       <th>special Achiev.</th>
                        <th>other Info </th>
					<th>Delete</th>
                   </tr>
                                        </thead>
                                         
                                        <tbody>
                                           
							 
                                            
                                              <?php
                                              $i=0;
                                              $c=mysqli_query($con,"select * from resource_person order by id desc");
                                                 while($a=mysqli_fetch_array($c))
                                                 
							           {
										$i=$i+1;
										
									
										   echo  
					                          ' <tr>					  
                                                <td>'.$i.'</td>
                                                     <td>'.$a['date'].'</td>
											 
												<td>'.$a['name'].'	</td>
													<td>'.$a['email'].'	</td>
													<td>'.$a['mobile'].'</td>
												
												<td>'.$a['age'].'	</td>
												<td>	'.$a['designation'].'	</td>
													<td>'.$a['qualification'].'
												</td>
												
                                                <td>'.wordwrap($a['address'],30,'</br>').'
													</td>	
													<td>'.$a['city'].'</td>
												
                                                <td> 
                                            ' .$a['profession'].'	</td>
                                                	<td>'.$a['grade'].' </td>
											
												<td>'.$a['organisation'].' 	</td>
												 	<td>'.$a['experience'].' </td>
												 	
												 		<td>'.$a['geographical_region'].' </td>
												
												
									    
									    
									
										<td>'.$a['specialization_area'].'</td>
											<td>'.$a['o_specialization'].'</td>
												
													
												
												<td>'.$a['com_project'].'	</td>
													<td>'.$a['inet_project'].'</td>
													<td>'.$a['inet_pro_agency'].'	</td>
													<td>'.$a['pro_type'].'</td>
												
												<td>'.$a['pro_executed_area'].'</td>
												<td>'.$a['pro_related'].'</td>
												
													<td>'.$a['research_publication'].'	</td>
													<td>'.$a['tot_certified'].'</td>
												
													<td>'.$a['teach_exp'].'	</td>
													<td>'.$a['subject_conducted'].'</td>
												
										<td>'.$a['training_level'].'	</td>												<td>'.$a['AOTI'].'</td>
											
											<td>'.$a['TMA'].'	</td>
												<td>'.$a['AOTI'].'</td>
											
												<td>'.$a['training_modual'].'	</td>
											<td>'.$a['special_achiev'].'</td>
                                                
                                                <td>'.$a['other_info'].'</td>
											
												<td><a class="btn btn-primary" href="empanelment-form-del.php?id='.$a['id'].'"> Delete</td>
												  
                                                 
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