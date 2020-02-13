<html>

    <head>
        <title> View Student Form</title>
         <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
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
        
        <form action = "view_student_details.php" method = "post">
            <?php

            $conn = mysqli_connect("localhost","root","","student");// database connection

            $sql = "SELECT distinct scode FROM student_details";//Query to select subject code
            $result_subject_code = mysqli_query($conn,$sql);
            echo "Select Subject Code:"; 
            echo '<select name = "subject_code">';
                while ($row = mysqli_fetch_array($result_subject_code)) 
                {
                echo '<option value="' . $row["scode"] . '">' . $row["scode"] . '</option>';  
                    
                }
                
                
            

            echo "</select>";
            
            

            echo "</br>";
            echo "</br>";


            //Selecting study period

           $sql = "SELECT distinct speriod FROM student_details";//Query to select subject code
            $result_study_period = mysqli_query($conn,$sql);
            echo "Select Study Period:"; 
            echo '<select name = "study_period">';
                while ($row = mysqli_fetch_array($result_study_period)) 
                {
                echo '<option value="' . $row["speriod"] . '">' . $row["speriod"] . '</option>';  
                    
                }
                
                
            

            echo "</select>";

            echo "</br>";
            echo "</br>";


            // Selecting the available year
            $sql = "SELECT distinct availyear FROM student_details";//Query to select subject code
            $result_available_year = mysqli_query($conn,$sql);
            echo "Select Available Year:"; 
            echo '<select name = "available_year">';
                while ($row = mysqli_fetch_array($result_available_year)) 
                {
                echo '<option value="' . $row["availyear"] . '">' . $row["availyear"] . '</option>';  
                    
                }
                
                
            

            echo "</select>";

            echo "</br>";
            echo "</br>";




            ?>
            <input type="submit" name="submit" />
        </form>
            
    </body>

</html>

 <?php
    //print_r ($_POST);



    if ( isset( $_POST['submit'] ) ) {
        //is submitted
        $subject_code = $_POST['subject_code'];
        $available_year = $_POST['available_year'];
        $study_period = $_POST['study_period'];
        //echo "$subject_code";echo "</br>";
        //echo "$available_year";echo "</br>";
        //echo "$study_period";echo "</br>";

        //Create a connection
        $conn = mysqli_connect("localhost", "root", "", "student");
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

        //query to view student details
        $sql = "SELECT `snum`, `lname`, `fname`, `email`,  `login`, `teamno`, `pname`, `token` FROM `student_details` 
                WHERE scode = '$subject_code' AND speriod = '$study_period' AND availyear = '$available_year'  order by teamno ASC";
        $result = $conn->query($sql);

         if ($result->num_rows > 0) {
                echo "<table>
                            <tr>
                                <th>Student Number</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Student Email</th>
                                <th>JC Number</th><th>
                                Team Number</th>
                                <th>Project Name</th>
                                <th>Unique Token</th>
                            </tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) 
                    {
                        echo "<tr>
                                <td>" . $row["snum"]. "</td>
                                <td>" . $row["lname"]. "</td>
                                <td> " . $row["fname"]. " </td>
                                <td>" . $row["email"]. "</td>
                                <td> " . $row["login"]. "</td>
                                <td> " . $row["teamno"]. "</td>
                                <td> " . $row["pname"]. "</td>
                                <td> " . $row["token"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
    }
    $conn->close();
    ?>