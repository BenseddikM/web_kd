<?php 
    session_start();

    $user = 'localhost';
    $log ='root';
    $pass='';
    $db = 'keystrokedb';
    $link = mysqli_connect($user,$log,$pass,$db);
    
    $_SESSION['truc'] = 'lolololo';
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
                        <li><a href="presentation.php">Presentation</a></li>
                        <li><a href="experiment.php">Experiment</a></li>
                        <li><a href="addPassword.php">Passwords</a></li>
                    </ul>
					</div>
                </nav>
            </header>
            
            <FORM method="POST" ACTION="analysepass.php"> 
            <p>Please enter the following  password : 
                <?php
                    
                    
                    $iduser = $_SESSION['iduser'];
                    
                    echo $iduser;
                ?>
            <INPUT type=text name="expass" id="expass">
            <INPUT type="submit" value="Submit"> </p>
            </form>                     
        </div>
    </body>
</html>

