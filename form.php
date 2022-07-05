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

$sql = "SELECT Name,Type,Model,Description,Price FROM sell";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
        echo "<br> Name: ". $row["Name"]. " Type: ". $row["Type"]. " Model: ". $row["Model"]. " Description.: ". $row["Description"]. " Price.: ". $row["Price"] "<br>";
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
