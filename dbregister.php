<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";


// Generate a random password
function generatePassword($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return $password;
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " );
}

// Retrieve data submitted by the form
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$dob = $_POST['dob'];
$password = generatePassword();

// Prepare and execute the SQL query to insert the data into the Employee table
$sql = "INSERT INTO employee (email, fname, lname, gender, phone, salary, dob, password) VALUES ('$email', '$fname', '$lname', '$gender', '$phone', '$salary', '$dob', '$password')";


    if ($conn->query($sql) === TRUE) {
        header('Location:login.php');
        exit();
    } else {
        header('Location:register.php?error');
        exit();
    }


// Close the database connection
$conn->close();

?>