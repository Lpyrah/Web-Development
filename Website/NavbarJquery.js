$(document).ready(function()
{
	var x = window.location.href;
	
	if(x === "https://mayar.abertay.ac.uk/~1703091/coursework/Index.php")
	{
		 $("li:nth-child(1)").addClass("active");
	}
	else if(x === "https://mayar.abertay.ac.uk/~1703091/coursework/News.php")
	{
		 $("li:nth-child(2)").addClass("active");
	}
	else if(x === "https://mayar.abertay.ac.uk/~1703091/coursework/Albums.php")
	{
		 $("li:nth-child(3)").addClass("active");
	}
	else if(x === "https://mayar.abertay.ac.uk/~1703091/coursework/UKTour.php")
	{
		 $("li:nth-child(4)").addClass("active");
	}
	else if(x === "https://mayar.abertay.ac.uk/~1703091/coursework/Login.php")
	{
		 $("li:nth-child(5)").addClass("active");
	}

});
