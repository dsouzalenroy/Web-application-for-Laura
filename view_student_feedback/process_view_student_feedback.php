<!DOCTYPE html>
<html>
    <head>
        <style>
        table, th, td {
            border: 1px solid black;
        }
        </style>
    </head>
    <body>

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
         $sql = "SELECT `Snum_giving_feedback`, 
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


    </body>
</html>