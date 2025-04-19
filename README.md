Student Trip Registration Form
This project provides a simple registration form for students to submit their details to participate in a trip. The form collects personal information and stores it in a MySQL database.

Project Description
The Student Trip Registration Form allows users to submit the following details:

Name

Age

Gender

Email

Phone

Other (description)

Upon form submission, the details are stored in a MySQL database.

Features
User-Friendly Form: The form is easy to use and collect necessary details for registration.

Data Storage: Submitted data is stored securely in a MySQL database with an automatic timestamp.

Success Confirmation: After a successful submission, a confirmation message is shown to the user.

Database Integration: The backend connects to a MySQL database and inserts user information upon form submission.

Installation and Setup
Prerequisites
PHP (Version 7 or above)

MySQL (or MariaDB)

Web Server (e.g., Apache)

Steps to Set Up
Clone the repository to your local machine.

Set up a MySQL database:

Create a new database named goa.

Create a table named trip to store the form data.

Configure Database Credentials:

Update the database connection details in the PHP script to match your local MySQL server configuration.

Run the application by placing the project in your web server's directory and navigating to the form page in your browser.

How to Use
Open the Main.php page in your browser.

Fill out the registration form with the required details.

Click Submit to send your information.

After successful submission, you will see a confirmation message.

Data is stored in the MySQL database for future reference.

Database Details
Database Name: Main

Table Name: trip

The table contains columns for user details like name, age, gender, etc., along with a timestamp of when the entry was created.

Troubleshooting
Ensure that your web server (e.g., Apache) and MySQL database are running correctly.

Double-check that the database credentials in the PHP script are accurate.

License
This project is open-source and available under the MIT License.
