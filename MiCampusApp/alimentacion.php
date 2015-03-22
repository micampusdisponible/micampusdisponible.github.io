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
<h1> Alimentación </h1>

</head>

<body>

<a class="btn btn-primary" href="http://micampusdisponible.herobo.com/estudio.php" role="button">Estudio</a>
<a class="btn btn-warning" href="http://micampusdisponible.herobo.com/alimentacion.php" role="button">Alimentación</a>
<a class="btn btn-danger" href="http://micampusdisponible.herobo.com/estacionamiento.php" role="button">Estacionamiento</a>
<a class="btn btn-info" href="http://micampusdisponible.herobo.com/residencias.php" role="button">Residencias</a>

<?php

    echo "<table class='table table-hover'>";
    
        echo "<tr>";
            echo "<td> <h3> <b> Lugar </b> </h3> ". "</td>";
            echo "<td> <h3> <b> Disponibilidad </b> </h3>". "</td>";
        echo "</tr>";



    echo "<tr>";
        echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> CETEC ". $row["estacion"]. "</td>";
        echo "<td>Estado ". $row["estado"]. "</td>";

    echo "</tr>";
    


?>

</body>
</html>