<!DOCTYPE html>
<html>
    <head>
        <style>
        table, th, td {
            border: 1px solid black;
             
        }
        </style>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM client_details";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>Subject Code</th> <th>Team Name</th> <th>Client Name</th> <th>Client Email</th> <th>Client Phone Number</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["subject_code"]. "</td><td>" . $row["team_name"]. "</td><td> " . $row["client_name"]. " </td><td>" . $row["client_email"]. "</td><td> " . $row["client_phone_number"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
          <footer class="page-footer font-small blue">

              <!-- Copyright -->
              <div class="footer-copyright text-center py-3">© 2020 Copyright:Developed by Students of James Cook University Brisbane campus
              </div>
              <!-- Copyright -->

        </footer>

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