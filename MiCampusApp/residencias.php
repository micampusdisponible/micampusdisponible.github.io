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

<h1> Residencias </h1>

<?php  @include("botones.php"); ?>
<?php
echo "<div class='row'>";
  echo "<div class='col-md-4'>";

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
    
echo "</table>";
echo "</div></div>";

?>

</body>
</html>