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
    $num = 1;
    $i = 1;
    
    $nbrpass_table = mysqli_query($link, "SELECT MAX(`num`) FROM `exp_pass`");
    while ($row = $nbrpass_table->fetch_row()) {
        $nbrpass =  $row[0];
    }
    while($num < $nbrpass){
    $numrep_table = mysqli_query($link, "SELECT `num_rep` FROM `exp_pass` WHERE num = '$num'"); 
    
    while ($row = $numrep_table->fetch_row()) {
        $numrep =  $row[0];
    }
    while($i < $numrep){
    if($expass == $expass_bd)
    {
        
        $i++;
        ?><script>document.location.href ="submit_gestion.php";</script><?php
        
    }else{
        ?><script>document.location.href ="submit_gestion.php";</script><?php
    }
    echo "hhhhhhhhhhhhh";
echo $i;

}
$num++;
    ?><script> alert("zebbi");</script>
    <?php
}
echo "hhhhhhhhhhhhh";
echo $i;

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
            
            <FORM method="POST" ACTION="submit_gestion.php"> 
            <p>Please enter the following  password :  
                <table width="20%" border ="1" cellspacing="1" cellpadding="1"><tr><td><div align=center>
                                
                <?php                   
                    echo $expass_bd; 
                    
                ?>
            </div></td><tr></table></br>
            <INPUT type=text name="expass" id="expass" onkeydown="processkey(event)" onkeyup="processkey(event)">
            <INPUT type="submit" value="Submit"> </p>
            </form>                     
            
            </br> <div id="affdown"></div></br> <div id="affup"></div>
        </div>
    </body>
</html>


                        
                   