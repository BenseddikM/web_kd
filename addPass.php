<?php
	if (!empty($_POST['addPass']))
            {		
             $addPass= $_POST['addPass'];            
// we connect to the database

$user = 'localhost';
$log ='root';
$pass='';
$db = 'keystrokedb';
 
            $link = mysqli_connect($user,$log,$pass,$db);
            // mysqli_select_db("keystrokedb",$con);

                
$reponse = mysqli_query($link,"INSERT INTO `keystrokedb`.`exp_pass` (`num`, `expass`) VALUES (NULL, '$addPass')");

echo "The password has been added";
        }
 else {
     echo "empty field!!!!!";
 }
?>		

