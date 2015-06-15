<?php 
    session_start();
    $user = 'localhost';
    $log ='root';
    $pass='';
    $db = 'keystrokedb';
    $link = mysqli_connect($user,$log,$pass,$db);
    
    $iduser = $_SESSION['iduser'];
    $pseudo = $_SESSION['pseudo'];
    
    $pos_table = mysqli_query($link, "SELECT `position_pass` FROM `user` WHERE pseudo = '$pseudo';");
    
    while ($row = $pos_table->fetch_row()) {
        $pos =  $row[0];
    }
    $_SESSION['pos'] = $pos;
    $expass_table = mysqli_query($link, "SELECT `expass` FROM `exp_pass` WHERE num = '$pos';");
    
    while ($row = $expass_table->fetch_row()) {
        $expass =  $row[0];
    }
    $nbrep_table = mysqli_query($link, "SELECT `num_rep` FROM `exp_pass` WHERE num = '$pos'"); 
    
    while ($row = $nbrep_table->fetch_row()) {
        $nbrep =  $row[0];
    }
    $_SESSION['expass'] = $expass;
    $_SESSION['nbrep'] = $nbrep;
    
    $position_table = mysqli_query($link, "SELECT COALESCE(MAX(pos_pass),0) from exp_password_table where user_iduser = '$iduser'");
    
    while ($row = $position_table->fetch_row()) {
        $position =  $row[0];
    }
    
    $_SESSION['position'] = $position;
    $expass_table = mysqli_query($link, "SELECT `expass` FROM `exp_pass` WHERE num = '$pos';");
    $nbrepuser_table = mysqli_query($link, "SELECT `nbrep` FROM `user` WHERE pseudo = '$pseudo';");
    
    while ($row = $nbrepuser_table->fetch_row()) {
        $nbrepuser =  $row[0];
    }
   $verif = 1;
    if($pos != $position || $nbrep!=$nbrepuser){
    mysqli_query($link, "INSERT INTO `exp_password_table`(`idpasstable`, `pos_pass`,`nbrep`,`expass`, "
            . "`exp_password_tablecol`, `date`, `time`, `session_number`, `user_iduser`) "
            . "VALUES (NULL,'$pos',$nbrepuser,'$expass',NULL,"
            . "CURDATE(),CURTIME(),1,'$iduser')");

    }
    
   $_SESSION['nbrepuser'] = $nbrepuser;   
   $_SESSION['verif'] = $verif;
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
                    echo $expass;
                    echo $nbrepuser."/".$nbrep;
                    $nbrepuser++;
                ?>
            </div></td><tr></table></br>
            <INPUT type=text name="password" id="expass" onkeydown="processkey(event)" onkeyup="processkey(event)">
            <INPUT type="submit" value="Submit"> </p>
            </form>                     
            
            </br> <div id="affdown"></div></br> <div id="affup"></div>
        </div>
    </body>
</html>


                        
                   