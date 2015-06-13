var start = 0;
var cnt = 0;
var id = 1;
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

function keystroke_gestion()
{
    var req = getRequestHttp();
    
    document.getElementById("affdown").innerHTML = processkeydown(e);
}

function processkey(e)
{
    var req = getRequestHttp();
    var x = e.type;
    if(x === "keyup")
    {
    var tup = (new Date()).getTime()- start;
    var cup = e.charCode;
    var keyCode=e.keyCode;
    var char =  String.fromCharCode(keyCode || cup)+((e.shiftKey || keyCode == 16) ? ' SHIFT' : '') +((e.ctrlKey || keyCode == 17) ? ' CTRL' : '') +
                                        ((e.altKey || keyCode == 18) ? ' ALT' : '') + (keyCode == 8 ? 'BACKSPACE' : '') + (keyCode == 32 ? 'SPACE' : '')
                                        + (keyCode == 20 ? 'CAPS LOCK' : '') + (keyCode == 9 ? 'ENTER' : '');     
    id++;
    var url1 = "tup="+tup+"&char="+char+"&id="+id;
    
    req.open('POST', "keyup_gestion.php", true);
    req.onreadystatechange = function(){callbackup(req);};
    req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    req.send(url1);  
    
    
}

    else{

    var tdown = (new Date()).getTime()- start;
    var cdown = e.charCode;
    var keyCode=e.keyCode;
    var char =  String.fromCharCode(keyCode || cdown)+((e.shiftKey || keyCode == 16) ? ' SHIFT' : '') +((e.ctrlKey || keyCode == 17) ? ' CTRL' : '') +
                                        ((e.altKey || keyCode == 18) ? ' ALT' : '') + (keyCode == 8 ? 'BACKSPACE' : '') + (keyCode == 32 ? 'SPACE' : '')
                                        + (keyCode == 20 ? 'CAPS LOCK' : '') + (keyCode == 9 ? 'ENTER' : '');       
    var url2 = 'tdown='+tdown+'&char='+char+'&id='+id;
    id++;
    
    req.open('POST', "keydown_gestion.php", true);
    req.onreadystatechange = function(){callbackdown(req);};
    req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    req.send(url2);
    
    
    }
}

    function callbackdown(requetteHttp){
        
        if(requetteHttp.readyState===4 && requetteHttp.status===200){
	
            //jjj
	
	    }


    return true;
}


    function callbackup(requetteHttp){
        
        if(requetteHttp.readyState===4 && requetteHttp.status===200){
	
            //
	
	    }


    return true;
}