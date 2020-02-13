<?php
    ///print_r ($_POST);
    $conn = mysqli_connect('localhost', 'ictatjcu_subject','123zxc','ictatjcu_subject'); // Establishing Connection with Server
    

   // print_r ($_POST);
    if(isset($_POST['submit'])){
        //print_r ($_POST);
        //begining of first student
        if (isset ( $_POST["snum1"])){
            //print_r ($_POST);
            //common details
            $snum_giving_feedback =  $_POST["snum_giving_feedback"];
            $subject_code =  $_POST["subject_code"];
            $available_year =  $_POST["available_year"];
            $study_period =  $_POST["study_period"];
            $pname =  $_POST["pname"];
            //first student details
            $snum1 =  $_POST["snum1"];
            $first_name1 =  $_POST["first_name1"];
            $lastname1 =  $_POST["lastname1"];
            $ct1=$_POST["ct1"];;
            $ts1= $_POST["ts1"];
            $ls1 = $_POST["ls1"]; 
            $tcs1= $_POST["tcs1"]; 
            $wps1 = $_POST["wps1"];
            $ya1= $_POST["ya1"];
            $ta1 = $_POST["ta1"];
            $wa1 = $_POST["wa1"];
            $c1 = $_POST["c1"];
            $comment = $_POST["comment"];
            //check to see if any of the fields are not empty
            if($snum_giving_feedback !='' || $subject_code !='' || $available_year !='' || $study_period !='' || $pname !='' || $snum2 !='' || $ct2 !='' || $ts2 !='' || $ls2 !='' || $tcs2 !='' || $wps2 !='' || $ya2 !='' || $ta2 !='' || $wa2 !='' || $c2 !=''|| $comment !=''){
                //query to insert details of the first student
                $query = mysqli_query($conn, "INSERT INTO `student_feedback`(
                                                                            `Snum_giving_feedback`, 
                                                                            `Subject_code`, 
                                                                            `Available_year`, 
                                                                            `Study_period`, 
                                                                            `Project_name`, 
                                                                            `Snum_receiving_feedback`, 
                                                                            `cb_total`, 
                                                                            `teamwork_total`, 
                                                                            `leadership_total`, 
                                                                            `tc_total`, 
                                                                            `wp_total`, 
                                                                            `grade_you_would_assign`,
                                                                            `grade_they_would_assign`, 
                                                                            `work_again`, 
                                                                            `relative_contribution`, 
                                                                            `Comments`) 
                                                                            VALUES (
                                                                                '$snum_giving_feedback',
                                                                                '$subject_code',
                                                                                '$available_year',
                                                                                '$study_period',
                                                                                '$pname',
                                                                                '$snum1',
                                                                                '$ct1',
                                                                                '$ts1',
                                                                                '$ls1',
                                                                                '$tcs1',
                                                                                '$wps1',
                                                                                '$ya1',
                                                                                '$ta1',
                                                                                '$wa1',
                                                                                '$c1',
                                                                                '$comment')");
                //mysqli_error();
                    echo "<br/><br/><span>Data Inserted successfully for the first student...!!</span>";
            }//end of if statement for first student
            else{
                echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }            
        }//end of student one
        //begining of second student
        if (isset ( $_POST["snum2"])){
            //common details
            $snum_giving_feedback =  $_POST["snum_giving_feedback"];
            $subject_code =  $_POST["subject_code"];
            $available_year =  $_POST["available_year"];
            $study_period =  $_POST["study_period"];
            $pname =  $_POST["pname"];
            //second student details
            $snum2 =  $_POST["snum2"];
            $first_name2 =  $_POST["first_name2"];
            $lastname2 =  $_POST["lastname2"];
            $ct2=$_POST["ct2"];;
            $ts2= $_POST["ts2"];
            $ls2 = $_POST["ls2"]; 
            $tcs2= $_POST["tcs2"]; 
            $wps2 = $_POST["wps2"];
            $ya2= $_POST["ya2"];
            $ta2 = $_POST["ta2"];
            $wa2 = $_POST["wa2"];
            $c2 = $_POST["c2"];
            $comment = $_POST["comment"];
            //check to see if any of the fields are not empty
            if($snum_giving_feedback !='' || $subject_code !='' || $available_year !='' || $study_period !='' || $pname !='' || $snum2 !='' || $ct2 !='' || $ts2 !='' || $ls2 !='' || $tcs2 !='' || $wps2 !='' || $ya2 !='' || $ta2 !='' || $wa2 !='' || $c2 !=''|| $comment !=''){
                //query to insert details of the first student
                $query = mysqli_query($conn, "INSERT INTO `student_feedback`(
                                                                            `Snum_giving_feedback`, 
                                                                            `Subject_code`, 
                                                                            `Available_year`, 
                                                                            `Study_period`, 
                                                                            `Project_name`, 
                                                                            `Snum_receiving_feedback`, 
                                                                            `cb_total`, 
                                                                            `teamwork_total`, 
                                                                            `leadership_total`, 
                                                                            `tc_total`, 
                                                                            `wp_total`, 
                                                                            `grade_you_would_assign`,
                                                                            `grade_they_would_assign`, 
                                                                            `work_again`, 
                                                                            `relative_contribution`, 
                                                                            `Comments`) 
                                                                            VALUES (
                                                                                '$snum_giving_feedback',
                                                                                '$subject_code',
                                                                                '$available_year',
                                                                                '$study_period',
                                                                                '$pname',
                                                                                '$snum2',
                                                                                '$ct2',
                                                                                '$ts2',
                                                                                '$ls2',
                                                                                '$tcs2',
                                                                                '$wps2',
                                                                                '$ya2',
                                                                                '$ta2',
                                                                                '$wa2',
                                                                                '$c2',
                                                                                '$comment')" );
                    echo "<br/><br/><span>Data Inserted successfully for the second student...!!</span>";
            }//end of if statement for first student
            else{
                echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }            
        }//end of student two
        //begining of third student
        if (isset ( $_POST["snum3"])){
            //common details
            $snum_giving_feedback =  $_POST["snum_giving_feedback"];
            $subject_code =  $_POST["subject_code"];
            $available_year =  $_POST["available_year"];
            $study_period =  $_POST["study_period"];
            $pname =  $_POST["pname"];
            //third student details
            $snum3 =  $_POST["snum3"];
            $first_name3 =  $_POST["first_name3"];
            $lastname3 =  $_POST["lastname3"];
            $ct3=$_POST["ct3"];;
            $ts3= $_POST["ts3"];
            $ls3 = $_POST["ls3"]; 
            $tcs3= $_POST["tcs3"]; 
            $wps3 = $_POST["wps3"];
            $ya3= $_POST["ya3"];
            $ta3 = $_POST["ta3"];
            $wa3 = $_POST["wa3"];
            $c3 = $_POST["c3"];
            $comment = $_POST["comment"];
            //check to see if any of the fields are not empty
                if($snum_giving_feedback !='' || $subject_code !='' || $available_year !='' || $study_period !='' || $pname !='' || $snum3 !='' || $ct3 !='' || $ts3 !='' || $ls3 !='' || $tcs3 !='' || $wps3 !='' || $ya3 !='' || $ta3 !='' || $wa3 !='' || $c3 !=''|| $comment !=''){
                //query to insert details of the first student
                $query = mysqli_query($conn, "INSERT INTO `student_feedback`(
                                                                            `Snum_giving_feedback`, 
                                                                            `Subject_code`, 
                                                                            `Available_year`, 
                                                                            `Study_period`, 
                                                                            `Project_name`, 
                                                                            `Snum_receiving_feedback`, 
                                                                            `cb_total`, 
                                                                            `teamwork_total`, 
                                                                            `leadership_total`, 
                                                                            `tc_total`, 
                                                                            `wp_total`, 
                                                                            `grade_you_would_assign`,
                                                                            `grade_they_would_assign`, 
                                                                            `work_again`, 
                                                                            `relative_contribution`, 
                                                                            `Comments`) 
                                                                            VALUES (
                                                                                '$snum_giving_feedback',
                                                                                '$subject_code',
                                                                                '$available_year',
                                                                                '$study_period',
                                                                                '$pname',
                                                                                '$snum3',
                                                                                '$ct3',
                                                                                '$ts3',
                                                                                '$ls3',
                                                                                '$tcs3',
                                                                                '$wps3',
                                                                                '$ya3',
                                                                                '$ta3',
                                                                                '$wa3',
                                                                                '$c3',
                                                                                '$comment')");
                    echo "<br/><br/><span>Data Inserted successfully  of the third Student...!!</span>";
            }//end of if statement for first student
            else{
                echo "<p>Insertion Failed <br/> Some Fields are Blank of the third Student....!!</p>";
            }            
        }//end of student three
        //begining of fourth student
        if (isset ( $_POST["snum4"])){
            //common details
            $snum_giving_feedback =  $_POST["snum_giving_feedback"];
            $subject_code =  $_POST["subject_code"];
            $available_year =  $_POST["available_year"];
            $study_period =  $_POST["study_period"];
            $pname =  $_POST["pname"];
            //fourth student details
            $snum4 =  $_POST["snum4"];
            $first_name4 =  $_POST["first_name4"];
            $lastname4 =  $_POST["lastname4"];
            $ct4=$_POST["ct4"];;
            $ts4= $_POST["ts4"];
            $ls4 = $_POST["ls4"]; 
            $tcs4= $_POST["tcs4"]; 
            $wps4 = $_POST["wps4"];
            $ya4= $_POST["ya4"];
            $ta4 = $_POST["ta4"];
            $wa4 = $_POST["wa4"];
            $c4 = $_POST["c4"];
            $comment = $_POST["comment"];
            //check to see if any of the fields are not empty
            if($snum_giving_feedback !='' || $subject_code !='' || $available_year !='' || $study_period !='' || $pname !='' || $snum4 !='' || $ct4 !='' || $ts4 !='' || $ls4 !='' || $tcs4 !='' || $wps4 !='' || $ya4 !='' || $ta4 !='' || $wa4 !='' || $c4 !=''|| $comment !=''){
                //query to insert details of the first student
                $query = mysqli_query($conn, "INSERT INTO student_feedback`(
                                                                            `Snum_giving_feedback`, 
                                                                            `Subject_code`, 
                                                                            `Available_year`, 
                                                                            `Study_period`, 
                                                                            `Project_name`, 
                                                                            `Snum_receiving_feedback`, 
                                                                            `cb_total`, 
                                                                            `teamwork_total`, 
                                                                            `leadership_total`, 
                                                                            `tc_total`, 
                                                                            `wp_total`, 
                                                                            `grade_you_would_assign`,
                                                                            `grade_they_would_assign`, 
                                                                            `work_again`, 
                                                                            `relative_contribution`, 
                                                                            `Comments`) 
                                                                            VALUES (
                                                                                '$snum_giving_feedback',
                                                                                '$subject_code',
                                                                                '$available_year',
                                                                                '$study_period',
                                                                                '$pname',
                                                                                '$snum4',
                                                                                '$ct4',
                                                                                '$ts4',
                                                                                '$ls4',
                                                                                '$tcs4',
                                                                                '$wps4',
                                                                                '$ya4',
                                                                                '$ta4',
                                                                                '$wa4',
                                                                                '$c4',
                                                                                '$comment')");
                    echo "<br/><br/><span>Data Inserted successfully  of the fourth Student...!!</span>";
            }//end of if statement for fourth student
            else{
                echo "<p>Insertion Failed <br/> Some Fields are Blank of the fourth Student....!!</p>";
            }            
        }//end of student four
    }//end of submit

        

?>