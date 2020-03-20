<?php
 if (isset($_POST ['submit1'])) {
	 include('dbconnect.php');
   $name =$_POST['name'];
	 $email =$_POST['email'];
	 $password =$_POST['password'];
   $sql ='INSERT INTO formulaire (name, email, password)
	         VALUES ("'.$name.'","'.$email.'", "'.$password.'")';
					 $test =mysqli_query($conn,$sql);
					 if ($test == true) {
					 echo "insertion reussie <a href=index.php> retour</a>";
				 } else {
				 	echo "erreur";
				 }

 }

?>
