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
            <b id="subject_code">You are currently Studying : <i><?php echo $_SESSION['subject_code' ]?></i></b>
            <b id="available_year">in the available year: <i><?php echo $_SESSION['available_year' ]?></i></b>
            <b id="study_period">During the Study Period: <i><?php echo $_SESSION['study_period' ]?></i></b>
            <b id="pname">Where you worked on the Project: <i><?php echo $_SESSION['pname' ]?></i></b>
            
            
            
            
			<div class="col text-center">
				<button class="btn btn-default font-weight-bold " id="logout"><a href="logout.php">Log Out</a></button>
			</div>
		</div>






	</body>

	</html>
