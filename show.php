<?php

$start =microtime(true);



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php_tutor";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$cache_file = "cache/show.cache.php";
if(file_exists($cache_file)){

      include($cache_file);
}

else{
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email FROM users";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === FALSE) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<h1>User List</h1>";
    echo "<table border = 1>";
    echo "<tr><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$handle =fopen($cache_file,'w');
fwrite();
}
$conn->close();
$end =microtime(true);
echo round($end-$start,4);

?>
