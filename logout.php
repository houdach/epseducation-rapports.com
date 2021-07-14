<?php 
session_start();
session_unset();
session_destroy();


header("Location:http://localhost/EPS EDUCATION RAPPORT PHP/login.php");
exit();
