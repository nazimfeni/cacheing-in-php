<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php_tutor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate random strings for names and emails
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

for ($i = 1; $i <= 10; $i++) {
    $name = generateRandomString(8) . " " . generateRandomString(5);
    $email = generateRandomString(5) . $i . "@example.com";
    $password = password_hash("password" . $i, PASSWORD_BCRYPT); // Hash the password

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User $i created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
