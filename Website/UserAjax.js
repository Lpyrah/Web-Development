function loadDoc()
{
	
	var x = document.getElementById("inputUsername").value;
	var xhttp = new XMLHttpRequest ();
	xhttp.onreadystatechange = function () 
	{
		if (xhttp.readyState == 4 && xhttp.status == 200)
		{
			var xhtp = xhttp.responseText;
			xhtp = xhtp.trim();
			
			if(xhtp == "dupe")
			{
				document.querySelector('#usernameHelp').innerHTML = "Your username is taken, Sorry.";
				document.querySelector('#usernameHelp').style.backgroundColor = "red";
			} else if(xhtp == "Invalid"){
				document.querySelector('#usernameHelp').innerHTML = "Your username is invalid";
				document.querySelector('#usernameHelp').style.backgroundColor = "red";
			}
			else
			{
				document.querySelector('#usernameHelp').innerHTML = "Your username is free.";
				document.querySelector('#usernameHelp').style.backgroundColor = "green";
			}
		}
	};
	xhttp.open("GET", "RegUsername.php?q="+x, true);
	xhttp.send();
}