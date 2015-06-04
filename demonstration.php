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

			<body>
			<form>
			<div id="data"></br>
			Choose the type of password</br>
			<SELECT id="typePassword" size="1">
			<OPTION>Random Password
			<OPTION>Password from the List
			<SELECT>

	</br></br>
	
	<p> the type of password is 
	<div id="password"></div></br>
	<div id="choice"></div>

	<script>
    var typePassword = document.getElementById('typePassword');
	var choice = document.getElementById('choice');
    typePassword.addEventListener('change', function() {

     // On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
        if(typePassword.selectedIndex == 0){
		getobj('password').innerHTML="Random Password ";
		getobj('choice').innerHTML = "Choose a random word <input type='button' onClick='new_word()' value='Random word' style='width:150px'/></br>";
		}else{
		getobj('password').innerHTML="Password from the List";
		getobj('choice').innerHTML = " The list of passwords</br><SELECT id='list' size='1'><OPTION>Hello</OPTION><OPTION>World</OPTION><OPTION>Norway</OPTION><OPTION>Computer<OPTION>Nature<OPTION>Sky<OPTION>Water<OPTION>Password</SELECT></br></br>";
		var liste = document.getElementById('list');
  
		liste.addEventListener('change', function() { 
        getobj('word').innerHTML = liste.options[liste.selectedIndex].innerHTML

    }, true);		
		}
    }, true);
</script></br>
<div id='word'></div></br></br>
<div id="user">Sign in</div>
  <FORM method="POST" ACTION="inscription.php"> 
  </FORM>

<FORM method="POST" ACTION="inscription.php"> 
    <p>Pseudo <INPUT type=text name="pseudo" id="pseudo"></p>
    <p>Password: <INPUT type=password name="password" id="password"></p>
    <p>Type the Password again : <INPUT type=password name="passwordtwo" id="passwordtwo"><div id ="faux"> </div></p>
    <p>Email : <INPUT type=text name="email" id="email"></p>  
    <p>Gender : <INPUT type=radio name="gender" value ="M" id="gender" checked> Male 
    <input type="radio" name="gender" value="F" id="gender"> Female
    <p>Age : <INPUT type=text name="age" id="age"></p>

    <INPUT type="submit" value="enregistrer" onclick="inscription()"> 
      <INPUT type="reset" value="effacer" class="button"> 
  </form>                   
   <FORM method="POST" ACTION="addPass.php"> 
    <p>Add a Password to my List <INPUT type=text name="addPass" id="addPass">
      <INPUT type="submit" value="Add"> </p>
  </form>                     
                        </body>
            
                        <div id="message"></div>
            
            <footer>          
            </footer>
        </div>
    </body>
</html>

'










 
	
			
