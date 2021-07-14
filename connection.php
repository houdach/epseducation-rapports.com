<?php
$host="localhost";
$user="root";
$password="";
$db="eps";


    $con = mysqli_connect($host, $user, $password, $db);
     if($con->connect_error){
                die('Erreur : ' .$con->connect_error);
            }
            echo 'Connexion réussie';
