<?php

include="conexion/index.html"
require('db.php');
// If form submitted, insert values into the database.
if (isset($_post['username'])){
        // removes backslashes
 $username = ($_post['username']);
        //escapes special characters in a string
 $username = ($con,$username);
 $email = stripslashes($_post['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_post['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
 $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
