<?php
session_start();
if(session_destroy()) // Destroying All Sessions 
{
header("Location: sb_index.php"); // Redirecting To Home Page
}
