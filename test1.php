<?php
session_start();

if (!empty($_POST['tup']) && !empty($_POST['char']) && !empty($_POST['id']))
            {		
           
                $keydowntable = array();
                $tup = $_POST['tup'];
		$char = $_POST['char'];
                //$keydowntable[id] = $char;
                $idpasstable = $_SESSION['idpasstable'];
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';


    $link = mysqli_connect($user,$log,$pass,$db);
$idkey_table = mysqli_query($link, "SELECT MAX(idkey) FROM `keystrokedb`.`key_expass` where keyname = UPPER('$char')");
    
    while ($row = $idkey_table_table->fetch_row()) {
        $idkey =  $row[0];
    }
  
    
    mysqli_query($link,"UPDATE `keystrokedb`.`key_expass` SET keyup = '$tup' WHERE keyname = UPPER('$char') AND idkey = '$idkey'");    
            }                 
else {
     ?>    
            }                 
            
<script> alert("empty field!!");

 <?php
 
}
?>
