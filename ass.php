<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ass";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// $sql = "CREATE DATABASE ass_database";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// $sql = "CREATE TABLE Employees (
//          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//          fullname VARCHAR(50) NOT NULL
//                 )";
//         if ($conn->query($sql) === TRUE) {
//             echo "Table Employess created successfully";
//         } else {
//             echo "Error creating table: " . $conn->error;
//         }
        $conn->close();