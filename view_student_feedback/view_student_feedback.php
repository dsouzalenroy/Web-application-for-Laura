<html>

    <head>
        <title> View Student Form</title>
    </head>
    <body>
        
        <form action = "process_view_student_feedback.php" method = "post">
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
            
    </body>

</html>