<?php
// mysqli_connect() function opens a new connection to the MySQL server.
 
$conn = mysqli_connect("localhost", "root", "", "student");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT snum, fname, login from student_details where login = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['fname'];



$snummain =$row['snum'];
    $sql = "select feedback_num from student_feedback where snum_giving_feedback = $snummain ";
         
$result= mysqli_query($conn, $sql);
                                                        $row2 = mysqli_fetch_assoc($result);

     if ($row2['feedback_num'] >0){
         echo "You have already given a feedback, please dont come back later";
     }
else
{

header("location: profile.php");
}
    
    ?>


