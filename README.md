# XML-Store
CTI project, to create a store recording system with XML



CTI XML project 
For Okay Shop

*************************************************************
* Author:				Toby Swart
* Date: 					2019-01-28
* Description:				Record and store product data	
* Project Number			Project v1.0		
*Project code				MLPB181-01
*************************************************************
DOCUMENTITON INDEX

+ Description of application
+ Setting up the website
+ Setting up the Database
+ Directions of use
•	Login
•	Add product
•	Validate XML
•	Add data to MySQL Database










Description of application.
This webpage is an online system that will be used to record the products for Okay Shop.

Home page screenshot is below:

 














Setting up the website

Before the website can be launched XAMPP needs to be running properly.

1.	Launch XAMPP Control panel 
2.	Start the Apache service 
3.	Start the MySQL service 
4.	Copy the project folder into C:\xampp\htdocs
5.	Now proceed with setting up the MySQL database















Setting up the Database

Before the website can be launched and operate successfully the MySQL database need to be set up first.

1.	Open PHPMyAdmin at http://localhost/phpmyadmin/index.php 
2.	Navigate the project folder to and find the create_db.txt file. 

3.	Copy its contents and go back to PHPMyAdmin
4.	Inside the PHPmyAdmin control navigate into the SQL tab 
5.	paste everything into the SQL tab  and press the GO button
 


6.The query should run without errors.






Directions of use

These instructions show how to do the various functions that are possible on the website.

Go to the URL below in your browser:
http://localhost/Internet%20Development%20Project/Project%20Recources/index.html




•	Login
To Login go to the store.php page.
Username: admin
Password: pass

 



•	Add product

Once logged in add 5 or more products. Images are included in the Sample Images folder.


 


After all the desired number of products have been added, go to the products page to view all the products in a table.

 
•	Validate XML

To validate the click on the link at the top of the products page.


 



The link will go the XML validator page.

 

 
This page will say if the file is valid or give an error code if it is not.


•	Add data to MySQL Database

MySql Data is automatically added to the database when the XML file is checked for validation.


 


