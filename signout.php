<?php
	session_start();
	
	$_SESSION = array();
	
	if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 10000, '/');
}

session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content_type" type="text/html" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<script>
			function redirection()
			{
				document.location.href = "presentation.php";
			}
		</script>
	</head>
	<body onload="setTimeout('redirection()', 0)">	
	</body>
</html>

