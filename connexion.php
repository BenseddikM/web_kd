<?php
	if (!empty($_POST['pseudo']) && !empty($_POST['password']))
            {		
            
                $pseudo = $_POST['pseudo'];
		$passwordtyped = $_POST['password'];
                
                
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';


 
$link = mysqli_connect($user,$log,$pass,$db);
            

$table = mysqli_query($link,"SELECT password FROM `keystrokedb`.`user` WHERE pseudo = '$pseudo';");

while ($row = $table->fetch_row()) {
        $password = $id_pass_table = $row[0];
}
if($password == $passwordtyped){
    ?>
<script> document.location.href = "file.php";</script>

<?php
}

else{

 ?><script>alert("the password is not correct");
  document.location.href = "signin.php";</script>
 
    

<?php

}


                 
        }

else {
     echo "empty field!!!!!";
 }
?>		