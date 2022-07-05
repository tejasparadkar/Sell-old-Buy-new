<?php
$servername = "localhost";
$username = "varsha";
$password = "varsha";
$dbname = "employee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO emp (Name,ID)
VALUES ('$_POST[fname]','$_POST[id]');";

if ($conn->multi_query($sql) == TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>