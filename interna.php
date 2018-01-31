<?php

$host="localhost";
$port=3306;
$user="root";
$password="79472606";
$dbname="Demo";

$con = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
$query = "select p.Nombre, i.fecha,i.piso,i.numerocama,i.habitacion, m.nombrem from ingresos as i join medicos as m on i.medicos_idmedicos = m.idmedicos join pacientes as p on p.idPacientes=i.pacientes_idPacientes";


stmt = $con->prepare($query)

foreach ($stmt as $value) {
  echo "$value <br>";
}

$conn->close();


    $stmt->execute();



?>

