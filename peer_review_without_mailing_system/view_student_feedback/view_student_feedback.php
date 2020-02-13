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
        
        <form action = "view_student_feedback.php" method = "post">
            <?php

            $conn = mysqli_connect("localhost","root","","student");// database connection

            $sql = "SELECT distinct Subject_code FROM student_feedback";//Query to select subject code
            $result_subject_code = mysqli_query($conn,$sql);
            echo "Select Subject Code:"; 
            echo '<select name = "subject_code">';
                while ($row = mysqli_fetch_array($result_subject_code)) 
                {
                echo '<option value="' . $row["Subject_code"] . '">' . $row["Subject_code"] . '</option>';  
                    
                } 

            echo "</select>";
            
            

            echo "</br>";
            echo "</br>";
            
            


            //Selecting study period

           $sql = "SELECT distinct Study_period FROM student_feedback";//Query to select study period
            $result_study_period = mysqli_query($conn,$sql);
            echo "Select Study Period:"; 
            echo '<select name = "study_period">';
                while ($row = mysqli_fetch_array($result_study_period)) 
                {
                echo '<option value="' . $row["Study_period"] . '">' . $row["Study_period"] . '</option>';  
                    
                } 

            echo "</select>";

            echo "</br>";
            echo "</br>";


            // Selecting the available year
            $sql = "SELECT distinct Available_year FROM student_feedback";//Query to select subject code
            $result_available_year = mysqli_query($conn,$sql);
            echo "Select Available Year:"; 
            echo '<select name = "available_year">';
                while ($row = mysqli_fetch_array($result_available_year)) 
                {
                echo '<option value="' . $row["Available_year"] . '">' . $row["Available_year"] . '</option>';  
                    
                } 

            echo "</select>";

            echo "</br>";
            echo "</br>";
            
            // Selecting the Project Name
            $sql = "SELECT distinct Project_name FROM student_feedback";//Query to select subject code
            $result_project_name = mysqli_query($conn,$sql);
            echo "Select Project Name:"; 
            echo '<select name = "project_name">';
                while ($row = mysqli_fetch_array($result_project_name)) 
                {
                echo '<option value="' . $row["Project_name"] . '">' . $row["Project_name"] . '</option>';  
                    
                } 

            echo "</select>";

            echo "</br>";
            echo "</br>";




            ?>
            <input type="submit" name="submit" />
        </form>
        
        
        <?php
    //print_r ($_POST);



    if ( isset( $_POST['submit'] ) ) {
        //is submitted
        $subject_code = $_POST['subject_code'];
        $available_year = $_POST['available_year'];
        $study_period = $_POST['study_period'];
        $project_name = $_POST['project_name'];
        
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
         $sql = "SELECT  Snum_giving_feedback, 
                        `Snum_receiving_feedback`,
                        `fname`, 
                        `lname`, 
                        `Project_name`,  
                        `cb_total`, 
                        `teamwork_total`, 
                        `leadership_total`, 
                        `tc_total`, 
                        `wp_total`, 
                        `grade_you_would_assign`, 
                        `grade_they_would_assign`, 
                        `work_again`, 
                        `relative_contribution`, 
                        `Comments`  
                FROM `student_feedback` 
                WHERE Subject_code = '$subject_code' AND 
                      Study_Period = '$study_period' AND 
                      Available_year = '$available_year' AND
                      Project_name = '$project_name'";
        $result = $conn->query($sql);
            
            

         if ($result->num_rows > 0) {
             
                
                echo "<table>
                            <tr>
                                <th>Student Number Giving feedback</th>
                                <th>Student Number Receiving feedback</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Citizenship Behaviour</th>
                                <th>Team Work</th>
                                <th>Technical Competency</th>
                                <th>Work Product</th>
                                <th>Grade you would assign them</th>
                                <th>Grade they would assign you</th>
                                <th>Would you work again with them?</th>
                                <th>Relative Contribution</th>
                                <th>Comments</th>
                            </tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) 
                    {
                        echo "<tr>
                                 <td> " . $row["Snum_giving_feedback"]. "</td>
                                    <td>" . $row["Snum_receiving_feedback"]. "</td>
                                    <td>" . $row["fname"]. "</td>
                                    <td> " . $row["lname"]. " </td>
                                    <td>" . $row["cb_total"]. "</td>
                                    <td> " . $row["teamwork_total"]. "</td>
                                    <td> " . $row["tc_total"]. "</td>
                                    <td> " . $row["wp_total"]. "</td>
                                    <td> " . $row["grade_you_would_assign"]. "</td>
                                    <td> " . $row["grade_they_would_assign"]. "</td>
                                    <td> " . $row["work_again"]. "</td>
                                    <td> " . $row["relative_contribution"]. "</td>
                                    <td> " . $row["Comments"]. "</td>
                            </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
    }
    $conn->close();
    
    ?>
        
     <footer class="page-footer font-small blue">
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:Developed by Students of James Cook University Brisbane campus
          </div>
          <!-- Copyright -->
      </footer>
<!-- Footer -->
            
    </body>

</html>

