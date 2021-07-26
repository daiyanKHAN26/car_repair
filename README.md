
░█████╗░░█████╗░██████╗░  ██████╗░███████╗██████╗░░█████╗░██╗██████╗░
██╔══██╗██╔══██╗██╔══██╗  ██╔══██╗██╔════╝██╔══██╗██╔══██╗██║██╔══██╗
██║░░╚═╝███████║██████╔╝  ██████╔╝█████╗░░██████╔╝███████║██║██████╔╝
██║░░██╗██╔══██║██╔══██╗  ██╔══██╗██╔══╝░░██╔═══╝░██╔══██║██║██╔══██╗
╚█████╔╝██║░░██║██║░░██║  ██║░░██║███████╗██║░░░░░██║░░██║██║██║░░██║
░╚════╝░╚═╝░░╚═╝╚═╝░░╚═╝  ╚═╝░░╚═╝╚══════╝╚═╝░░░░░╚═╝░░╚═╝╚═╝╚═╝░░╚═╝

**********************************************************************************************

THIS IS A DEMO WEBSITE MADE FOR MY CSE391 PHP AND MYSQL PROJECT. 

THE WEBSITE FEATURES:	
	* An opening page with 3 login options for either Admin, User(Client) or Mechanic

	* USER PRIVILEGES:
		- check self information
		- search for available mechanics
		- book appointment with mechanic
		- check appointment
		- cancel booking

	* ADMIN PRIVILEGES:
		- add or delete mechanic IDs
		- check registered user info
		- check registered mechanic info
		- check made appointments

	* MECHANIC PRIVILEGES:
		- check self information
		- search for booked appointments
		- search for registered users


**********************************************************************************************
PLEASE READ BEFORE EXECUTING
**********************************************************************************************
- Website must be loaded through XAMPP, copy whole 'Car_Repair' folder to 'htdocs' folder in
xampp install directory.

- TO LOAD THE DATABASE: 

	*Access http://localhost/phpmyadmin/ and create a new database named 'register', 
	import the file named 'registration(1).sql' from the folder 'SQL DATABASE EXPORT' 

	(file location -> xampp\htdocs\Car_Repair\datalayer\SQL DATABASE EXPORT)

- ADMIN ID (username and password) MUST BE INSERTED MANUALLY INTO DATABASE AS ADMIN 
REGISTRATION HAS NOT BEEN IMPLEMENTED in website. Once Admin has been registered, new mechanic IDs + 
passwords can be added through the admin account into the database.

- All files are seperated according to a application, data and presentation layer structure

- APPLICATION LAYER:

	*Files in this folder pertain to the initial login page for the website, 
	including their .php and .css files

- DATA LAYER:

	*'SQL DATABASE EXPORT' FILE CONTAINS THE DATABASE ['registration(1)'] WHICH MUST BE 
	IMPORTED INTO A NEW DATABASE IN phpmyadmin UNDER THE NAME "register"

	*Files in this folder are: 
		-'server.php': server setup for user access
		-'bookserver.php': server setup for appointment booking
		-'errors.php'

- PRESENTATION LAYER:

	*Files are seperated into admin, mechanic and user pages
	*Seperate folders contain .php and .css files of each page
	

**********************************************************************************************
NOTES
**********************************************************************************************

** Some features and functionality is buggy 
** This project will not be recieving updates
