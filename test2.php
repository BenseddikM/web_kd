<?php
session_start();
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
                
    mysqli_query($link,"INSERT INTO `keystrokedb`.`key_expass`(`idkey`, `keyname`, `keydown`, `keyup`, `press_duration`, `exp_password_table_idpasstable`) VALUES (NULL,'$char','$tdown',NULL,NULL,$idpasstable)");
    
            }                 
else {
     ?>
<script> alert("empty field!!");</script>
 <?php
 
}
?>
