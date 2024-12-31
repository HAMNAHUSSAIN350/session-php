<?php
//What is session
//Used to manage information on different pages

//verify the user login info
session_start();
$_SESSION['username'] = "Hamna";
$_SESSION['password'] = "Hamna";
echo "We have saved your session"
?>