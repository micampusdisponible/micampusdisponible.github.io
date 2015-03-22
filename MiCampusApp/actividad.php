<?php
$servername = "mysql16.000webhost.com";
$username = "a9764979_hackmty";
$password = "hackmty2015";
$dbname = "a9764979_MiCampu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$estacion = intval($_GET['estacion']);
$estado = intval($_GET['estado']);
$sql = "UPDATE individuales SET estado='".$estado."' WHERE estacion='".$estacion."'";
$result = $conn->query($sql);
$conn->close();
?>
