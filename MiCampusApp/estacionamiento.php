<!DOCTYPE html>
<html>
<head>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<title>Mi Campus Disponible</title>


</head>

<body>

<?php  @include("header.php"); ?>

<h1> Estacionamiento </h1>

<?php  @include("botones.php"); ?>
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

$sql = "select l.nombre as nombre, g.ocupacion as cantidad, l.capacidad as capacidad from grupales g, lugar l where g.lugar = l.id and l.area = 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='row'>";
  echo "<div class='col-md-4'>";

    echo "<table class='table table-hover'>";

        echo "<tr>";
            echo "<td> <h3> <b> Ubicación </b> </h3> ". "</td>";
            echo "<td> <h3> <b> Disponibilidad </b> </h3>". "</td>";
        echo "</tr>";

    while($row = $result->fetch_assoc()) {


    echo "<tr>";
        echo "<td><span class='glyphicon glyphicon-education' aria-hidden='true'></span>  ". $row["nombre"]. "</td>";
        echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Ocupacion ". $row["cantidad"]. "/". $row["capacidad"]."</td>";

    echo "</tr>";

    }
        echo "</table>";
echo "</div></div>";
} else {
    echo "0 results";
}



$conn->close();
?>

</body>
</html>