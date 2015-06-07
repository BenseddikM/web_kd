<?php session_start();
       $_SESSION['pseudo'] = '';
       $_SESSION['iduser'] = '';
?>

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
<div id="connexion">
<form method="POST" ACTION="connexion.php"> 
    <p>
    <label for="pseudo">Pseudo: </label>
    <INPUT type=text name="pseudo" id="pseudo"></br></br>
    <label for="password">Password: </label>
    <INPUT type=password name="password" id="password"></br></br>
    <INPUT type="submit" value="sign-in" > 
    <INPUT type="reset" value="effacer" class="button"> 
</p>
</div>
</form>
</body>
</html>