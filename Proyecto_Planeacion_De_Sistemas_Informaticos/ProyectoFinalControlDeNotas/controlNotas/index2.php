<?php
    include_once "conexion.php";
    include_once "Estudiante.php";
    $estudiantes = Estudiante::obtener();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>INGRESO AL SISTEMA</title>
</head>
<body>
    <header class="main-header">

            <div class="main-cont">
                <div class="desc-header">
                    <img src="UTS.png"  alt="image school">
                    <p>Unidades Tecnologicas de Santander</p>
                </div>
            </div>
            <div class="cont-header">
                <h1>Bienvenido</h1><p></p>
                    <a href="mostrar_estudiantes.php" class="btn btn-warning">
                    <h4>Ingreso Docente</h4>
                    </a><p></p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><h4>Estudiantes</h4></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estudiantes as $estudiante) { ?>
                            <tr>
                                <td>
                                    <?php echo $estudiante["nombre"] ?>
                                    <a href="mostrar_nota_estudiante.php?id=<?php echo $estudiante["id"] ?> " class="btn btn-success">
                                        ver notas
                                     </a>
                                </td>
                            </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        
    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>