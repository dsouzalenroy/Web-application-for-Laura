<?php
    session_start();
    if(!isset($_SESSION['login_name'])){
        header("location: index.php"); // Redirecting To Home Page
    }
    if(!isset($_SESSION['subject_code'])){
        header("location: index.php"); // Redirecting To Home Page
    }
    if(!isset($_SESSION['available_year'])){
        header("location: index.php"); // Redirecting To Home Page
    }
    if(!isset($_SESSION['study_period'])){
        header("location: index.php"); // Redirecting To Home Page
    }
    if(!isset($_SESSION['pname'])){
        header("location: index.php"); // Redirecting To Home Page
    }
    if(!isset($_SESSION['snum_giving_feedback'])){
        header("location: index.php"); // Redirecting To Home Page
    }
    
   
    
    
    
    
?>
	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Your Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">

	</head>

	<body class="container">
		<br>
		<div id="profile">
			<b id="welcome">Welcome : <i><?php echo $_SESSION['login_name' ]?></i></b>
            <b id="snum_giving_feedback">Your student number is : <i><?php echo $_SESSION['snum_giving_feedback' ]?></i></b>
            <b id="subject_code">You are currently Studying : <i><?php echo $_SESSION['subject_code' ]?></i></b>
            <b id="available_year">in the available year: <i><?php echo $_SESSION['available_year' ]?></i></b>
            <b id="study_period">During the Study Period: <i><?php echo $_SESSION['study_period' ]?></i></b>
            <b id="pname">Where you worked on the Project: <i><?php echo $_SESSION['pname' ]?></i></b>
            
            
            
            
			<div class="col text-center">
				<button class="btn btn-default font-weight-bold " id="logout"><a href="logout.php">Log Out</a></button>
			</div>
		</div>
        <!ending of login page and begining of feedback form>
        
        <div class="wrapper">
            <div class="container-fluid">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0 m-b-30" align="center">Team Evaluation Form</h4>
                        <div class="row" "container" align="center">
								Please assess yourself and your team members on the following behaviors that have been reported as critical for the successful completion of projects. Read each statement carefully, and enter the number that indicates the extent to which the person has demonstrated this behavior. Use the following scale:
								<br><br> 5 = perfection 4 = almost always 3 = frequently 2 = sometimes 1 = seldom 0 = almost never
								<br><br>
				        </div>
                        <!-- begining of form-->
                        <form action="process.php" method="post">
                            <?php
								$conn = mysqli_connect('localhost','root','','student');
								$query = "SELECT snum, lname, fname from student_details  where scode  = \"{$_SESSION['subject_code']}\" and availyear   = \"{$_SESSION['available_year']}\" and pname   = \"{$_SESSION['pname']}\"";
								$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
								$items = mysqli_num_rows($result);
							?>
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <table class="table m-t-10">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <?php
                                                    if (mysqli_num_rows($result) > 0){
                                                        $i=1;
                                                        while($row = mysqli_fetch_array($result)){
                                                            $first_name = $row['fname'];
												            $lastname = $row['lname'];
												            $snum = $row['snum'];
                                                            echo "<th style=\"text-align:center;\">{$first_name} {$lastname}  ({$snum})</th>";
												            echo "<input type=\"hidden\" name=\"snum".$i."\" value=\" $snum\">";
                                                            $i= $i+1;
                                                        }
                                                    }
                                                ?>
                                            </tr><!end of naming row->
                                            <tr>
								                <th colspan="<?php echo $items+1;?>">Citizenship Behaviour</th>
								            </tr>
                                        </thead>
                                     
                                    </table>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        






	</body>

	</html>
