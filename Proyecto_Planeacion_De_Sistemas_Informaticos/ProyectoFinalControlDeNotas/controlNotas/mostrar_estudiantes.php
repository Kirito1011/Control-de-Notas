<?php
 ?>
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
$estudiantes = Estudiante::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='editado') {
        ?>  
            <div class="alert alert-success alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> El estudiante fue editado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='guardado') {
        ?>  
            <div class="alert alert-success alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> El estudiante fue ingresado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='eliminado') {
        ?>  
            <div class="alert alert-warning alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> El estudiante fue eliminado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='error') {
        ?>  
            <div class="alert alert-danger alert-dismissible fade show" role="alter">
            <strong>¡Error!</strong> Error al encontrar el id del estudiante.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='notaAgregada') {
        ?>  
            <div class="alert alert-success alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> La nota fue agregada correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <!--Fin alertas -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["nombre"] ?></td>
                        <td><?php echo $estudiante["grupo"] ?></td>
                        <td>
                            <a href="notas_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas
                            </a>
                        </td>
                        <td>
                            <a href="editar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Estas seguro de eliminar?')" href="eliminar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>