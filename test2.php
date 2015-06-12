<?php
session_start();

    ?><script> alert("it has been added in the database!");</script>
<?php
if (!empty($_POST['tdown']) && !empty($_POST['char']) && !empty($_POST['id']))
            {		
           
                $keydowntable = array();
                $tdown = $_POST['tdown'];
		$char = $_POST['char'];
                //$keydowntable[id] = $char;
                $idpasstable = $_SESSION['idpasstable'];
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';
 
            $link = mysqli_connect($user,$log,$pass,$db);
                ?><script> alert("1!");</script>
<?php
    mysqli_query($link,"INSERT INTO `keystrokedb`.`key_expass`(`idkey`, `keyname`, `keydown`, `keyup`, `press_duration`, `exp_password_table_idpasstable`) VALUES (NULL,'$char','$tdown',NULL,NULL,$idpasstable)");    
        
        ?><script> alert("2");</script>
<?php

    ?><script> alert("it has been added in the database!");</script>
<?php
}                 
else {
     ?>
<script> alert("empty field!!");
document.location.href = "signup.php";</script>
 <?php
 
}
?>
