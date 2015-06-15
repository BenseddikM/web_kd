<?php
session_start();

if (!empty($_POST['tup']) && !empty($_POST['char']) && !empty($_POST['id']))
            {		
           
                $keydowntable = array();
                $tup = $_POST['tup'];
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
$idkey_table = mysqli_query($link, "SELECT MAX(idkey) FROM `keystrokedb`.`key_expass` where keyname = UPPER('$char')");
    
    while ($row = $idkey_table->fetch_row()) {
        $idkey =  $row[0];
    }
  
    
    mysqli_query($link,"UPDATE `keystrokedb`.`key_expass` SET keyup = '$tup' WHERE keyname = UPPER('$char') AND idkey = '$idkey'");    
            
    mysqli_query($link,"UPDATE `keystrokedb`.`key_expass` SET `press_duration` =  keyup-keydown");
    }                 
else {
     ?>    
            }                 
            
<script> alert("empty field!!");

 <?php
 
}
?>
