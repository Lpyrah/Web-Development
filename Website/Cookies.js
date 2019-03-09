function showAlert(){
	alertify.confirm("Do you consent to the use of cookies?",
	  function(){
		alertify.success("Thank you, for you consent. Enjoy the site :D");
		document.cookie = "Cookies=Yes";
	  },
	  function(){
		alertify.error("Ok, but we will ask again.");
		document.cookie = "";
	  });
}

$(document).ready(function(){
	if(document.cookie.includes("Cookies") == false){
		showAlert();
	}
});