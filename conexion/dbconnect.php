<?php

$dbhost='localhost';
$dbuser='root';
$dbpass= '';
$conn= mysqli_connect($dbhost,$dbuser,$dbpass);
 mysqli_select_db($conn,'submit');
 if (mysqli_connect_errno()){
    echo "erreur de connexion a mysqli:".mysqli_connect_error();
 }

?>
















 ?>
