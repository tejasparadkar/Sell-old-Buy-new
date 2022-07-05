<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "buysell";
$password = "buysell";
$dbname = "buysell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name,Address,Mobile FROM profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
        echo "<br> Name: ". $row["Name"]. " Address: ". $row["Address"]. " Mobile no.: ". $row["Mobile"]. "<br>";
}
} 
else
 {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>