var start = 0;
var cnt = 0;

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

function keystroke_gstion()
{
    var req = getRequestHttp();
    
    document.getElementById("affdown").innerHTML = processkeydown(e);
}

function processkeydown(e)
{
    var tdown = (new Date()).getTime()- start;
    var cdown = e.charCode;
    
    //document.getElementById("affdown").innerHTML = "Time down : " + tdown + " Char down : " + cdown;
    return tdown;
}

function processkeyup(e)
{
    var tup = (new Date()).getTime()- start;
    var cup = e.charCode;
    var keyCode=e.keyCode;
    var char =  String.fromCharCode(keyCode || cup) 

    document.getElementById("affup").innerHTML = "Time up : " + tup + " Char up : " + char;
}