function loadDocEmail(){
	$(document).ready(function() {
		var email = $('#inputEmail').val();
		email = escape(email);
		
		$.ajax({method:"GET",url:"RegEmail.php?q="+email, async: true, success:function(result){
		// Using a post request instead of a get request for transmitting password so that it doesn't echo into the url bar.
			if(result == " Not Found"){
				$('#emailHelp').html("Your email address is not valid, Sorry.");
				$('#emailHelp').css("background-color","red");
			}else if(result == " Dupe"){
				$('#emailHelp').html("Your email address is already taken, Sorry");
				$('#emailHelp').css("background-color","red");
			}else{
				$('#emailHelp').html("Your email is ok.");
				$('#emailHelp').css("background-color","green");
			}
		}});
	});
}