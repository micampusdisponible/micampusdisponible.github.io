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

$incremento = intval($_GET['incremento']);
$lugar = intval($_GET['lugar']);
$sql = "SELECT ocupacion from grupales where lugar = '".$lugar."'";
$conn->close();
$result = $conn->query($sql);
$incremento = $incremento + $result;
$sql = "UPDATE grupales SET ocupacion='".$incremento."' WHERE lugar='".$lugar."'";
$result = $conn->query($sql);
$conn->close();
?>
