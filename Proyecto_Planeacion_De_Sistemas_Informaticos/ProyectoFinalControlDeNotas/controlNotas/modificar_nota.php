<?php
 ?>
<?php
include_once "conexion.php";
include_once "Nota.php";
$nota = new Nota($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota->guardar();
header("Location: mostrar_estudiantes.php?mensaje=notaAgregada");
