<?php
session_start();
if (!empty($_POST['tdown']) && !empty($_POST['char']) && !empty($_POST['id']))
            {		
           
                $keydowntable = array();
                $tdown = $_POST['tdown'];
		$char = $_POST['char'];
                //$keydowntable[id] = $char;
                $iduser = $_SESSION['iduser'];
                $pseudo = $_SESSION['pseudo'];
                
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';
 
    $link = mysqli_connect($user,$log,$pass,$db);
       
        $pos_table = mysqli_query($link, "SELECT `position_pass` FROM `user` WHERE pseudo = '$pseudo';");
    
    while ($row = $pos_table->fetch_row()) {
        $pos =  $row[0];
    }
    
    $idpasstable_table = mysqli_query($link, "SELECT MAX(idpasstable) from exp_password_table where user_iduser = '$iduser' AND pos_pass = '$pos'");
    
    while ($row = $idpasstable_table->fetch_row()) {
        $idpasstable =  $row[0];
    }
    mysqli_query($link,"INSERT INTO `keystrokedb`.`key_expass`(`idkey`, `keyname`, `keydown`, `keyup`, `press_duration`, `exp_password_table_idpasstable`) VALUES (NULL,'$char','$tdown',NULL,NULL,$idpasstable)");
    
            }                 
else {
     ?>
<script> alert("empty field!!");</script>
 <?php
 
}
?>
