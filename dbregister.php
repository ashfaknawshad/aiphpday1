<?php
// Database connection
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "aiphp"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);



// Error handling
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    echo "Error: [$errno] $errstr - $errfile:$errline";
    return true;
});

// Intentional error to demonstrate error handling
$uninitializedVariable; // This line will generate a "Notice: Undefined variable" error

// Restore the default error handler
restore_error_handler();


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function generateRandomPassword($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';

    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    return $password;
}



// Data from register.html
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$password = generateRandomPassword();


// SQL query to insert data into employee table
$sql = "INSERT INTO employee (email, fname, lname, phone, salary, dob, gender, password) VALUES ('$email', '$fname', '$lname', '$phone', '$salary', '$dob', '$gender', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>