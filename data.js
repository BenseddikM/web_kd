var words=new Array(); 
words =  "abcdefghijklmnopqrstuvwxyz";
var list = document.getElementById('list');
function getobj(id)
{
    if(document.layers)
	return document.id;
    if(document.getElementById)
        return document.getElementById(id);
    if(document.all)
        return id;
}

function new_word()
{
    var i=Math.floor(Math.random()*words.length);
	var Chaine='';
	for(j = 0; j < 7; j++)
	{
		Chaine = Chaine + words[Math.floor(Math.random()*words.length)];
	}
	
	getobj('word').innerHTML=Chaine;
}
