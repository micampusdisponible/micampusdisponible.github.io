<?php
$servername = "micampus.cu1ycavyugvg.us-west-2.rds.amazonaws.com:3306";
$username = "username";
$password = "password";
$dbname = "MiCampus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM area";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
