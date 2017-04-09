# PHP & MySQL Web Development Notes

## Overview
These notes are a concise reference for developers on the basics of PHP scripting language and MySQL database management system. 
This combination is widely utilized for server-side programming and managing relational databases.

## Table of Contents
1. PHP
    - Basics
    - Syntax
    - Variables
    - Form Handling
2. MySQL
    - Basics
    - CRUD Operations
    - PHP & MySQL Integration

---

## PHP

### Basics
- **PHP** (Hypertext Preprocessor) is a widely-used open-source general-purpose scripting language suited for web development and can be embedded into HTML.
- it's a strong server-side language, meaning it executes on the server before it gets to the web browser.

### Syntax
- PHP scripts start with `<?php` and end with `?>`.
- Each line of code must end with a semicolon `;`.

### Variables
- Variables in PHP are represented by a dollar sign followed by the name of the variable.
- The variable name is case-sensitive.
- **Example**: 
  ```php
  <?php
  $txt = "Hello world!";
  $x = 5;
  $y = 10.5;
  ?>

### Form Handling
- PHP is particularly strong in its ability to handle forms, gathering data from files filled out by users on websites.
- Super global variables $_GET and $_POST are used to collect form-data.


## MySQL
### Basics
- MySQL is a relational database management system (RDBMS) that uses Structured Query Language (SQL), the most popular language for adding, accessing, and managing content in a database.
- It is known for its quick processing, proven reliability, ease and flexibility of use.

### CRUD Operations
- CRUD operations refer to the basic operations performed on a database: Create, Read, Update, and Delete.
- Examples:
    - **Create:** INSERT INTO table_name (column1, column2) VALUES (value1, value2);
    - **Read:** SELECT * FROM table_name;
    - **Update:** UPDATE table_name SET column1=value1 WHERE some_column=some_value;
    - **Delete:** DELETE FROM table_name WHERE some_column=some_value;

### PHP & MySQL Integration
- PHP scripts are used to interact with a MySQL database.
- MySQLi and PDO (PHP Data Objects) are the two main ways PHP interacts with MySQL databases.
- **Example**: 
```
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
```