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
    
    $expass_table = mysqli_query($link, "SELECT `expass` FROM `exp_pass` WHERE num = '$pos';");
    
    while ($row = $expass_table->fetch_row()) {
        $expass =  $row[0];
    }
    
    $_SESSION['expass'] = $expass;
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
                <?php                   
                    echo $expass;
                ?>
            </div></td><tr></table></br>
            <INPUT type=text name="expass" id="expass" onkeydown="processkeydown(event)" onkeyup="processkeyup(event)">
            <INPUT type="submit" value="Submit"> </p>
            </form>                     
            
            </br> <div id="affdown"></div></br> <div id="affup"></div>
        </div>
    </body>
</html>


                        
                   