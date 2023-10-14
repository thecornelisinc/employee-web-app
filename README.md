
#Employee Management System

##Introduction
This simple Employee Management System is a web-based application that enables users to manage employee details. It allows users to add new employee records, view them in a tabulated format, edit them, and even clear all records when needed.

Features
Add Employee: Add new employee records with details such as name, age, address, title, and salary.
View Employees: View all added employee records in a table format.
Edit Employee: Edit existing employee records by clicking the 'Edit' button next to each record.
Clear Records: Ability to clear all existing records from the display table.
Prerequisites
PHP 7.4 or above
MySQL 5.7 or above
A web server (e.g., Apache, Nginx)
Composer (Optional, for managing dependencies if any)
Git
Setup & Installation
Clone the Repository
shell
Copy code
git clone [your-repo-link] employee-management-system
cd employee-management-system
Database Configuration
Create a new database and a user in your MySQL server.

Import the SQL structure found in database_structure.sql into your newly created database.

Update the config.php file in your project directory with your database credentials.

php
Copy code
define('DB_SERVER', 'your_database_server');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');
Deploying on a Web Server
Move/Copy the project files to your web server's root directory.

Ensure proper file and folder permissions.

Ensure your web server is configured to handle PHP files and is pointed towards the project directory.

Navigate to the application through your web browser.

Localhost Deployment
If you want to deploy it in localhost using XAMPP/WampServer/MAMP, move/copy the project files to the respective htdocs or www directory, and access the application through your browser, usually through http://localhost/employee-management-system/.

Usage
Add New Employee: Fill in the form with the required details and submit.
View Employees: View the table below the form, which automatically updates with added employees.
Edit Employees: Click the 'Edit' button next to an employee’s record to modify their details.
Clear Records: To delete all records, click the 'Clear Table' button below the table.
Contribution
If you'd like to contribute to this project, kindly fork the repository and submit a pull request with your changes.

Pull Request Process
Ensure any install or build dependencies are removed before the end of the layer when doing a build.
Update the README.md with details of changes to the interface, this includes new environment variables, exposed ports, useful file locations, and container parameters.
Increase the version numbers in any examples files and the README.md to the new version that this Pull Request would represent.
License
This project is licensed under the MIT License. See the LICENSE.md file for details.
