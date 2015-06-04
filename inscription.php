<?php
	if (!empty($_POST['pseudo']) && !empty($_POST['password'])  && !empty($_POST['passwordtwo'])  && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['age']))
            {		
            
                $pseudo = $_POST['pseudo'];
		$password = $_POST['password'];
                $passwordtwo = $_POST['passwordtwo'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
                $mac = null;
                $position_pass = null;
                $session_number = null;

                
                
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';
 
            $link = mysqli_connect($user,$log,$pass,$db);
            
if($password == $passwordtwo){
$reponse = mysqli_query($link,"INSERT INTO `keystrokedb`.`user` (`iduser`, `pseudo`, `email`, `password`, `mac`, `gender`, `age`, `position_pass`, `session_number`, `password_table_idpass`) VALUES (NULL, '$pseudo', '$email', '$password', NULL, '$gender', '$age', NULL, NULL, '1');");
echo "the enrollement is well done";
}
else{
  ?>
<script>alert("the two password aren't the same");
    </script>
    <a href="signup.php"> Sign-up</a>
    

<?php

}


                 
        }

else {
     echo "empty field!!!!!";
 }
?>		