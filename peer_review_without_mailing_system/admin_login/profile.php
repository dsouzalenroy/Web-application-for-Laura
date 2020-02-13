<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

<!doctype html>
<html lang="en">
    
  <head>
      <title>Admin Home Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
  <body class = "container">
      
	<br>
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
                
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../token_generation/index.php">Upload Student Details</a></li>
                  <li><a href="../view_student_details/view_student_details.php">View Student Details</a></li>
                </ul>
              </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clients <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../client_data/insert.php">Insert Client Details</a></li>
                  <li><a href="../client_data/viewclientdetails.php">View Client details</a></li>
                </ul>
              </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Email <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Email type 1 </a></li>
                  <li><a href="#">Email type 2 </a></li>
                </ul>
              </li>
              <li><a href="../view_student_feedback/view_student_feedback.php">View Student Feedback</a></li>
                
            </ul>
              
          </div>
    </nav>
  
<div class="container">

</div>


<!-- Footer -->

	<div id="profile">
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <div class="col text-center">
            <button class="btn btn-default font-weight-bold " id="logout"><a href="logout.php">Log Out</a></button>
        </div>
	</div>
    
  <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:Developed by Students of James Cook University Brisbane campus
  </div>
  <!-- Copyright -->

  </footer>
<!-- Footer -->
     
   
    
      
      
      
   
  
      
      
      

     

  
  </body>
</html>