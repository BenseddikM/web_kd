function getRequestHttp()
{
	var requeteHttp;
	
	if (window.XMLHttpRequest)
    { // Mozilla
      requeteHttp = new XMLHttpRequest();
      if (requeteHttp.overrideMimeType) // pb Firefox
		requeteHttp.overrideMimeType('text/xml');      
      else
		if (window.ActiveXObject)
        { // IE < IE7
			try
            {      
				requeteHttp = new ActiveXObject("Msxml2.XMLHTTP");       
            }
            catch (e)       
            {
				try
                {
					requeteHttp = new ActiveXobject("Microsoft.XMLHTTP");
                }
                catch (e)
                {
					requeteHttp = null;
                }
			}
		}
    }
    
	return requeteHttp;
}

function inscription()
{
  
    
    var req = getRequestHttp();
    var pseudo = document.getElementById("pseudo").value;
    var password = document.getElementById("password").value;
   // var passwordtwo = document.getElementById("passwordtwo").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("gender").value;
    var age = document.getElementById("age").value;   
    var url = "pseudo="+pseudo+"&password="+password+"&email="+email+"&gender="+gender+"&age="+age;
    
    req.open('post', 'inscription.php', false);
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.send(url);
    
    if (req.readyState === 4 && req.status === 200)
	{
              
		if (req.responseText === "-1")
		{
                    alert("alert 1");
			document.location.href = "presentation.php";
		}
		else
                
		{
                     
			document.getElementById("message").innerHTML = "<p></p>";
                        
		}
	}
	else
	{
		alert("Erreur dans la requête");
	}
        }