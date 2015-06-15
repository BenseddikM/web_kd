<?php 
    session_start();
    $user = 'localhost';
    $log ='root';
    $pass='';
    $db = 'keystrokedb';
    $link = mysqli_connect($user,$log,$pass,$db);
    
        
  if (!empty($_POST['password'])){	
    $iduser = $_SESSION['iduser'];
    $pseudo = $_SESSION['pseudo'];
    $position = $_SESSION['position'];
    $expass = $_SESSION['expass'];
    $password = $_POST['password'];
    $nbrep = $_SESSION['nbrep'] ;
    $nbrepuser = $_SESSION['nbrepuser'] ;
    $verif = $_SESSION['verif'];
    
    $pos_table = mysqli_query($link, "SELECT `position_pass` FROM `user` WHERE pseudo = '$pseudo';");
    
    while ($row = $pos_table->fetch_row()) {
        $pos =  $row[0];
    }
   if($expass == $password){ 
    if($verif == 1){
    $verif = 0;
    $nbrepuser_table = mysqli_query($link, "SELECT `nbrep` FROM `user` WHERE pseudo = '$pseudo';");
    
    while ($row = $nbrepuser_table->fetch_row()) {
        $nbrepuser =  $row[0];
    }
    
        
    if($pos != $position || $nbrep!=$nbrepuser){
    
        $nbrepuser++;
        $_SESSION['nbrepuser']++;
    mysqli_query($link, "INSERT INTO `exp_password_table`(`idpasstable`, `pos_pass`,`nbrep`,`expass`, "
            . "`exp_password_tablecol`, `date`, `time`, `session_number`, `user_iduser`) "
            . "VALUES (NULL,'$pos',$nbrepuser,'$expass',NULL,"
            . "CURDATE(),CURTIME(),1,'$iduser')");
}
    
    
    mysqli_query($link, "UPDATE `user` SET `nbrep`= '$nbrepuser' WHERE pseudo = '$pseudo'");
    
    
     $idpasstable_table = mysqli_query($link, "SELECT idpasstable from exp_password_table where user_iduser = '$iduser' AND pos_pass = '$pos'");
    
    while ($row = $idpasstable_table->fetch_row()) {
        $idpasstable =  $row[0];
    }   
    }
    if($nbrepuser > $nbrep){
    
    $expass_table = mysqli_query($link, "SELECT `expass` FROM `exp_pass` WHERE num = '$pos'+1;");     
    while ($row = $expass_table->fetch_row()) {
        $expass =  $row[0];
    }
    mysqli_query($link, "UPDATE `user` SET `position_pass`= '$pos'+1,`nbrep`= 1 WHERE pseudo = '$pseudo'");
    $_SESSION['nbrepuser'] = 1;
    $_SESSION['pos']++;
   $nbrep_table = mysqli_query($link, "SELECT `num_rep` FROM `exp_pass` WHERE expass = '$expass'"); 
    
    while ($row = $nbrep_table->fetch_row()) {
        $nbrep =  $row[0];
    }
    $_SESSION['expass'] = $expass;
    $_SESSION['pos'] = $pos + 1;
    $_SESSION['nbrep'] = $nbrep;

    
    }
   }else{
       ?> <script>alert("The password is wrong, please enter the password again");

        document.location.href = "experiment.php";</script><?php
            
     $idpasstable_table = mysqli_query($link, "SELECT MAX(idpasstable) from exp_password_table where user_iduser = '$iduser' AND pos_pass = '$pos'");
    
    while ($row = $idpasstable_table->fetch_row()) {
        $idpasstable =  $row[0];
    }
        mysqli_query($link, "DELETE FROM `key_expass` where exp_password_table_idpasstable = '$idpasstable'");
   }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script langage="text/javascript" src="keystroke_script.js"></script>
        <link rel="stylesheet" href="style.css" />
        <title>Keystroke dynamics</title>
    </head>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <img src="images/clavier.jpg" alt="Logo de la dynamique du frappe au clavier" id="logo" />
                </div>

				<div id="hig">
					<a href="http://hig.no/">
					<img src="images/hig.jpg"  /></a>
				</div>
 
				<div id="title"><h1>Keystroke dynamics</h1></div>
					
				

                </br></br>
                <nav>
				<div id="element">
                    <ul>
                       <li><a href="presentationbis.php">Presentation</a></li>
                        <li><a href="experiment.php">Experiment</a></li>
                        <li><a href="addPassword.php">Passwords</a></li>
                        <li><a href="signout.php">Sign out</a></li>
                    </ul>
					</div>
                </nav>
            </header>
            
            <FORM method="POST" ACTION="experiment_gestion.php"> 
            <p>Please enter the following  password :
                <table width="20%" border ="1" cellspacing="1" cellpadding="1"><tr><td><div align=center>
                                <div id="nbrrep"></div>
                <?php                   
                    echo $_SESSION['expass'];
                    echo $_SESSION['nbrepuser']."/".$_SESSION['nbrep'];
                    
                ?>
            </div></td><tr></table></br>
            <INPUT type=text name="password" id="expass" onkeydown="processkey(event)" onkeyup="processkey(event)">
            <INPUT type="submit" value="Submit"> </p>
            </form>                     
            
            </br> <div id="affdown"></div></br> <div id="affup"></div>
        </div>
    </body>
</html>


                        
                   