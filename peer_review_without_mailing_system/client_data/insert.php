
<!DOCTYPE html>
<html>
    <head>
        <title>PHP insertion</title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="insert.css" rel="stylesheet">
    </head>
    <body>
        
        <!-Begining of navigation bar->
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="../admin_login/profile.php">Home</a></li>
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
    
        <!-end of navigation bar->
        <div class="maindiv">
        <!--HTML Form -->
        <div class="form_div">
        <div class="title">

        </div>
        <form action="insert.php" method="post">
            <!-- Method can be set as POST for hiding values in URL-->
            <h2>Client Details</h2>

            <label>Subject Code</label>
            <input class="input" name="subjectCode" type="text" value="">

            <label>Team Name:</label>
            <input class="input" name="teamName" type="text" value="">


            <label>Client Name:</label>
            <input class="input" name="clientName" type="text" value="">

            <label>Client Email:</label>
            <input class="input" name="clientEmail" type="text" value="">

            <label>Client Phone Number:</label>
            <input class="input" name="clientPhoneNumber" type="text" value="">

            <input class="submit" name="submit" type="submit" value="Insert">
        </form>
        </div>
        </div>
    </body>
</html>


<?php
$conn = mysqli_connect("localhost", "root", "", "student"); // Establishing Connection with Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$subjectCode = $_POST['subjectCode'];
$teamName = $_POST['teamName'];
$clientName = $_POST['clientName'];
$clientEmail = $_POST['clientEmail'];
$clientPhoneNumber = $_POST['clientPhoneNumber'];
if($clientName !=''||$clientEmail !=''){
//Insert Query of SQL
$query = mysqli_query($conn,"insert into client_details(subject_code, team_name, client_name, client_email, client_phone_number ) values ('$subjectCode', '$teamName', '$clientName', '$clientEmail', '$clientPhoneNumber' )");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}

?>
