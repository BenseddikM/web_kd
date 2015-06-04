<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<script langage="text/javascript" src="data.js"></script>
                <script type="text/javascript" src="inscription.js"></script>
                 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Keystroke dynamics</title>
	</head>
       

            <?php include 'header.php'; ?>  

        <div id="data"></br>
<div id="user">Sign up
<form method="POST" ACTION="inscription.php"> 
    <p>
    <label for="pseudo">Pseudo: </label>
    <INPUT type=text name="pseudo" id="pseudo"></br></br>
    <label for="password">Password: </label>
    <INPUT type=password name="password" id="password"></br></br>
    <label for="passwordtwo">Type the Password again : </label>
    <INPUT type=password name="passwordtwo" id="passwordtwo"></br></br>
    <label for="email">Email : </label>
    <INPUT type=text name="email" id="email"> </br></br>
    <label for="gender">Gender : </label>
    <INPUT type=radio name="gender" value ="M" id="gender" checked> Male 
    <input type="radio" name="gender" value="F" id="gender"> Female</br></br>
    <label for="age">Age : </label>
    <INPUT type=text name="age" id="age"></br></br>

    <INPUT type="submit" value="enregistrer" onclick="inscription()"> 
    <INPUT type="reset" value="effacer" class="button"> 
  </p>
</form>
    </div></br>
    <li><a href="addPassword.php">Add a password to my list</a></li></br>
                        </body>
            
                        <div id="message"></div>
                        
            <footer>          
            </footer>
        </div>
    </body>
</html>

'








 
	
			
