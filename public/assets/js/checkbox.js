 
function getXhr()
{
	var xhr = null; 
	if(window.XMLHttpRequest) // Firefox et autres
		xhr = new XMLHttpRequest(); 
	else if(window.ActiveXObject)
	{ // Internet Explorer 
		try 
		{
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
		} 
		catch (e) 
		{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	else 
	{ // XMLHttpRequest non supporté par le navigateur 
		alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
		xhr = false; 
	} 
	return xhr
}
 
/**
* Méthode qui sera appelée sur le click du bouton
*/
function go(id)
{
	console.log(id);
	var xhr = getXhr()
	// On défini ce qu'on va faire quand on aura la réponse
	xhr.onreadystatechange = function()
	{
		// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
		if(xhr.readyState == 4 && xhr.status == 200)
		{
			xhr.responseText;
		}
	}
	xhr.open("GET","publicationvideo/" + id ,true);
	xhr.send(null);
}

/**
* Méthode qui sera appelée sur le click du bouton
*/
function cancel(id)
{
	console.log(id);
	var xhr = getXhr()
	// On défini ce qu'on va faire quand on aura la réponse
	xhr.onreadystatechange = function()
	{
		// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
		if(xhr.readyState == 4 && xhr.status == 200)
		{
			xhr.responseText;
		}
	}
	xhr.open("GET","annulationvideo/" + id ,true);
	xhr.send(null);
}