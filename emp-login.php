<?php
include('admin/config.php');

 if(isset($_POST["empsubmit"]))
{
   
    
  $name = $_POST['name'];
  
  
  
  
  $password = $_POST['password'];
  $f = "SELECT * FROM `emp_login` WHERE `username` = '" . $name. "'";
 $resultx = mysqli_query($con, $f);
  
  $count = mysqli_num_rows($resultx);
  
    if($count > 0) 
  {
    $row = mysqli_fetch_array($resultx);
    if($row['password'] == $password)
       {
          $_SESSION['mpwalmi_employee'] = $row['id'];
        echo '<script>window.location="view-login-details-mpwalmi.php"</script>';
        // echo 'good';
       }
       else
       {
          echo' <script>alert("password is incorrect")</script>';
       }
  } 
  else 
  {
   
    echo' <script>alert("No Account found with this username")</script>';
  }                            
                                 
                               
                            
}         
?>