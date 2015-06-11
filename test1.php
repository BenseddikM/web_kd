<?php

if (!empty($_POST['tup']) && !empty($_POST['char']))
            {		
           
                $keyuptable = array();
                $tup = $_POST['tup'];
		$char = $_POST['char'];
                $keyuptable[i] = $char;
                
$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';
 
            $link = mysqli_connect($user,$log,$pass,$db);
            
    mysqli_query($link,"INSERT INTO `keystrokedb`.`key_expass`(`idkey`, `keyname`, `keydown`, `keyup`, `press_duration`, `exp_password_table_idpasstable`) VALUES (NULL,'$char',NULL,'$tup',NULL,1)");
    $table = mysqli_query($link,"SELECT keyname FROM `keystrokedb`.`key_expass`");
  
    while ($row = $table->fetch_row()) {
        $id_pass_table = $row[0];
        echo $id_pass_table;
        }
        
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
