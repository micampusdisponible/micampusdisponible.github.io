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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Mi Campus Disponible</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">Contacto </a></li>
        <li><a href="#">Login</a></li>
        
      </ul>
    
      
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h1> Estudio </h1>

<a class="btn btn-primary" href="http://micampusdisponible.herobo.com/estudio.php" role="button">Estudio</a>
<a class="btn btn-success" href="http://micampusdisponible.herobo.com/alimentacion.php" role="button">Alimentación</a>
<a class="btn btn-danger" href="http://micampusdisponible.herobo.com/estacionamiento.php" role="button">Estacionamiento</a>
<a class="btn btn-info" href="http://micampusdisponible.herobo.com/residencias.php" role="button">Residencias</a>
<br>
<br>
<h3> Individuales </h3>
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

$sql = "select l.nombre as nombre, count(l.id) as cantidad, l.capacidad as capacidad from individuales i, lugar l where i.lugar = l.id and l.area = 1 and i.estado = 1 group by l.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
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
} else {
    echo "0 results";
}

?>
<br>
<h3> Grupales </h3>

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
$sql = "select l.nombre as nombre, g.ocupacion as cantidad, l.capacidad as capacidad from grupales g, lugar l where g.lugar = l.id and l.area = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
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
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
