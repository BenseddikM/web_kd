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
                $position_pass = 1;
                $session_number = 1;
                $access = 0;
                $pass_valid = 0;
                

                
                
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';
 
            $link = mysqli_connect($user,$log,$pass,$db);
            
if($password == $passwordtwo){
    mysqli_query($link,"INSERT INTO `keystrokedb`.`password_table`(`idpass`, `password`, `pass_valid`, `date`, `time`, `access`) VALUES (NULL,'$password','$pass_valid',CURDATE(),CURTIME(),'$access')");
    $table = mysqli_query($link,"SELECT MAX(idpass) FROM `keystrokedb`.`password_table`");
    while ($row = $table->fetch_row()) {
        $id_pass_table = $row[0];
    }
    $reponse = mysqli_query($link,"INSERT INTO `keystrokedb`.`user` (`iduser`, `pseudo`, `email`, `password`, `mac`, `gender`, `age`, `position_pass`, `session_number`, `password_table_idpass`,`languages_idlang`) VALUES (NULL, '$pseudo', '$email', '$password', NULL, '$gender', '$age', $position_pass, '$session_number', '$id_pass_table' ,NULL)");
    }
else{
  ?>
<script>alert("the two password aren't the same");
    </script>
<?php
}
?><script> alert("You have succesfuly been registred in the databse !");
document.location.href = "presentation.php";</script>
		
<?php
                 
        }
else {
     ?>
<script> alert("empty field!!");
document.location.href = "signup.php";</script>
 <?php
 
}
?>