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
<h1> Residencias </h1>

</head>

<body>

<a class="btn btn-primary" href="http://micampusdisponible.herobo.com/estudio.php" role="button">Estudio</a>
<a class="btn btn-success" href="http://micampusdisponible.herobo.com/alimentacion.php" role="button">Alimentación</a>
<a class="btn btn-danger" href="http://micampusdisponible.herobo.com/estacionamiento.php" role="button">Estacionamiento</a>
<a class="btn btn-info" href="http://micampusdisponible.herobo.com/residencias.php" role="button">Residencias</a>

<?php

    echo "<table class='table table-hover'>";
    
        echo "<tr>";
            echo "<td> <h3> <b> Ubicación </b> </h3> ". "</td>";
            echo "<td> <h3> <b> Disponibilidad </b> </h3>". "</td>";
        echo "</tr>";


 
            echo "<tr>";
                echo "<td><span class='glyphicon glyphicon-tint' aria-hidden='true'></span> Lavadoras (Resis III) ". "</td>";
                echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> 25 / 100 ". "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td><span class='glyphicon glyphicon-fire' aria-hidden='true'></span> Secadoras (Resis III) ". "</td>";
                echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> 12 / 30 ". "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td><span class='glyphicon glyphicon-scale' aria-hidden='true'></span> Máquinas Cardio (Gym Resis III) ". "</td>";
                echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> 30 / 65 ". "</td>";
            echo "</tr>";
    


?>

</body>
</html>