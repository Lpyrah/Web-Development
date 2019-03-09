A clear use of HTML5:
	The Footer.php and Navbar.php files has a clear use of HTML for example: "<footer class=......>"
	
• Use of the Bootstrap framework providing a responsive layout
	This was used throughout the website however notably on Index.php with help from the website https://bootswatch.com/lux/
	
• Use of JavaScript to manipulate the DOM based on an event
	If the user hovers its mouse over the copyright writing on the footer, it will display a message informing that the website was made by Luke Burgess. This is within the Footer.php file.
	
• JavaScript loading of dynamically changing information
	A clock feature has been implemented on to the home page Index.php via use of files Clockajax.js and Clock.php.
	
• Use of jQuery in conjunction with the DOM
	The NavbarJquery.js file functions as a tool which highlights which page you are currently on by making the navbar text go white for the related page.
	
• Use of a jQuery plugin to enhance your application
	We used alertify.js to display an alert box to ask the user if they consent to cookie usage. This is displayed on the home page Index.php.
	
• Use of AJAX (pure JavaScript i.e. without the use of a library)
	UserAjax.js uses pure javascript ajax to confirm with the database if the username is available or taken and provide feedback to the user.
	
• Use of the jQuery AJAX function
	EmailAjax.js uses jquery ajax to confirm with the database if the email is available or taken and also provides feedback to the user.
	
• Use of cookies
	With the help of alertify.js (alert box) the file Cookies.js saves the preference the user has given re the cookie usage and displays a message confirming the choice.
	
• User login functionality (PHP/MySQL)
	Login.php uses the DBConnect.php file to establish a connection with the database and logs in if the user has given the correct log in details.
	
• Admin section of the website (PHP/MySQL)
	AdminPage.php is the page which users logged in with admin permissions will be directed to.
	
• Ability to select, add, edit and delete information from a database
(PHP/MySQL)
	AdminPage.php then allows users logged in as an admin to add, change and delete tour dates.
	
• Appropriate consideration of relevant laws
	Both the Data Protection Act 2018 and Computer Misuse Act 1990 have been taken into consideration with the design of this website, treating user data as private, not displaying it freely and taking basic security measures to protect the website from hacking.
	
• Security measures
o SQL queries should be written as prepared statements
	This has been used throughout the website, however one example of this is in Register.php, line 42.
	
o Passwords should be salted and hashed
	Passwords are hashed, for example on Register.php line 72 the password is hashed. Php further salts this as standard.
	
o Validation of user input
	The file RegEmail.php uses Regex to validate email input so users cannot enter invalid entries into the database.
	
o Any other relevant security features
	Used htmlspecialchar() in Register.php to escape angle brackets to prevent XSS.
	