# Simple-Rentals
Online Car Rental System Documentation
This is a simple online car rental system which gives clients a wide variety of vehicles to choose from, ranging from compact sedans to spacious SUVs. Whether you need a reliable car for a short business trip or a spacious vehicle for a family vacation, we have the perfect option for you.

#To host the project on XAMPP
Download XAMPP
XAMPP is available in three file formats. We will be using the easiest .EXE.
You can download by clicking on this link apachefriends.org/download.html 

Installing XAMPP
Kindly follow these steps for installing XAMPP:

Step 1: Disable your antivirus as it can cause some XAMPP components to behave erratically. 

Step 2: Start the installation process by double-clicking on the XAMPP installer. Follow up with the instructions, and you will get XAMPP completely installed. 

Step 3: Outcome after installation. 
![image](https://user-images.githubusercontent.com/40091471/124510512-437cf500-ddd4-11eb-918a-f0c341c669e4.png)

Hosting Project on XAMPP
Kindly follow the steps below to host Online Car Rental System on XAMPP on your machine. 

Step 1: Extract the project and copy the whole project file to the directory C:/xamp/htdocs

Step 2: In the XAMPP control panel, click on ‘Start’ under ‘Actions’ for the Apache and MySQL module. 

Step 3: Open your browser and type http://localhost/phpmyadmin  or http://127.0.0.1/phpmyadmin/

Step 4: Create a new database and within it, a table with these rows.
Database name = rentals
Table name = users
Rows = id, BIGINT
	     user_id, BIGINT
              username, VARCHAR
              password, VARCHAR 
              date, DATE

Step 4: Now that we have our database created, we can go ahead and open our project in our browser. Open your browser and type http://localhost/Online-Car-Rental-System.
Below is the page you will see after doing everything right.

This is also a link to the project hosted on the internet:
https://sam-rentals.herokuapp.com

![image](https://user-images.githubusercontent.com/40091471/124510717-bd14e300-ddd4-11eb-9caf-bcc191fb1bb6.png)
