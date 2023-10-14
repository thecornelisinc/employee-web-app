# Employee Management System

A basic web application designed to manage employee data, such as adding new records, editing them, and viewing them in a structured format. Developed using PHP, MySQL, HTML, and CSS.

## Features

- **Add New Employee Records**: Users can input new employee details into a form and submit them to be saved in a database.
- **View Employee Data**: A table displays all the employee data stored in the database.
- **Edit Employee Data**: Each row in the table has an "Edit" button that allows users to modify specific employee details.
- **Clear Table**: Users can clear all data from the database using the "Clear Table" button.

## Prerequisites

- PHP 7.4+
- MySQL 5.7+
- Web Server (e.g., Apache, Nginx)
- Web Browser

## Setup and Installation

### 1. Clone the Repository


git clone [YOUR_REPOSITORY_LINK] employee-management-system
cd employee-management-system


# 2. Database Configuration

- Update config.php with your database credentials.
- 
`define('DB_SERVER', 'your_database_server');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');`


# 3. Deploy
run 
`sudo dnf install -y httpd php php-mysqli git mariadb105`
`sudo systemctl start httpd`
`sudo systemctl enable httpd`
`

connect to the database and create an DB called EmployeeDB
Create a table called employees with the below schema

CREATE TABLE employees (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    age int,
    address varchar(90),
    title varchar(40),
    salary int 
);

Web Server: Transfer the project files to your web server directory and visit the appropriate URL in your browser.
