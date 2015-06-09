<?php
    session_start();
if (!empty($_POST['expass']))
{
    $user = 'localhost';
    $log ='root';
    $pass='';
    $db = 'keystrokedb';
 
    $link = mysqli_connect($user,$log,$pass,$db);  
    
    $expass = $_POST['expass'];
    $expass_bd = $_SESSION['expass'];
    
    if($expass == $expass_bd)
    {
        
    }
}
?>