<?php
//start the session and get the data
session_start();
session_unset();  //unset the all variables
session_destroy(); //destroy the current session


echo "<br> You have been logged out";


?>