<!DOCTYPE html>\
<html>
<head>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<title>Mi Campus Disponible</title>
<h1> Mi Campus Disponible </h1>

</head>

<body>

<a class="btn btn-primary" href="http://micampusdisponible.herobo.com/estudio.php" role="button">Estudio</a>
<a class="btn btn-warning" href="http://micampusdisponible.herobo.com/prueba.php" role="button">Alimentación</a>
<a class="btn btn-danger" href="http://micampusdisponible.herobo.com/prueba.php" role="button">Estacionamiento</a>
<a class="btn btn-info" href="http://micampusdisponible.herobo.com/prueba.php" role="button">Residencias</a>

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

$sql = "SELECT * FROM individuales";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class='table table-hover'>";
    
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span>Máquina ". $row["estacion"]. "</td>";
        echo "<td>Estado ". $row["estado"]. "</td>";

    echo "</tr>";
    
    }
        echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>

</body>
</html>