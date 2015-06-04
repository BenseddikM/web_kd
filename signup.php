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
    <div id="user"><b>Please fill in these information :</b>
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
    <label for="1st language">Mother tongue : </label>
    <SELECT name="1lang" size="1" id="1lang">
    <OPTION value="English">English</OPTION>
    <OPTION value="Spanish">Spanish</OPTION>
    <OPTION value="Arabic">Arabic</OPTION>
    <OPTION value="Bengali">Bengali</OPTION>
    <OPTION value="Hindi">Hindi</OPTION>
    <OPTION value="Russian">Russian</OPTION>
    <OPTION value="Portuguese">Portuguese</OPTION>
    <OPTION value="Japanese">Japanese</OPTION>
    <OPTION value="German">German</OPTION>
    <OPTION value="Korean">Korean</OPTION>
    <OPTION value="French">French</OPTION>
    <OPTION value="Norwegian">Norwegian</OPTION>
    <OPTION value="Turkish">Turkish</OPTION>
    <OPTION value="Italian">Italian</OPTION>
    </SELECT></br></br>
    
    <label for="2nd language">2nd language : </label>
    <SELECT name="2lang" size="1" id="2lang">
    <OPTION value="English">English</OPTION>
    <OPTION value="Spanish">Spanish</OPTION>
    <OPTION value="Arabic">Arabic</OPTION>
    <OPTION value="Bengali">Bengali</OPTION>
    <OPTION value="Hindi">Hindi</OPTION>
    <OPTION value="Russian">Russian</OPTION>
    <OPTION value="Portuguese">Portuguese</OPTION>
    <OPTION value="Japanese">Japanese</OPTION>
    <OPTION value="German">German</OPTION>
    <OPTION value="Korean">Korean</OPTION>
    <OPTION value="French">French</OPTION>
    <OPTION value="Norwegian">Norwegian</OPTION>
    <OPTION value="Turkish">Turkish</OPTION>
    <OPTION value="Italian">Italian</OPTION>
    </SELECT></br></br>
    
    <INPUT type="submit" value="enregistrer" onclick="inscription()"> 
    <INPUT type="reset" value="effacer" class="button"> 
    </p>
</form>
</div></br>
                        </body>
            
                        <div id="message"></div>
                        
            <footer>          
            </footer>
        </div>
    </body>
</html>

'








 
	
			
