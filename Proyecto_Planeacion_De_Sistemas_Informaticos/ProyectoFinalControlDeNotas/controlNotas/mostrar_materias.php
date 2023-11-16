<?php
?>
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Materia.php";
$materias = Materia::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de materias</h1>
        <a href="formulario_registro_materia.php" class="btn btn-info my-2">Nueva</a>
    </div>
    <div class="col-12 table-responsive">
        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='actualizada') {
        ?>  
            <div class="alert alert-success alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> La materia fue editada correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='guardada') {
        ?>  
            <div class="alert alert-success alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> La materia fue ingresada correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        <?php      
            }
        ?>

        <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje']=='eliminada') {
        ?>  
            <div class="alert alert-warning alert-dismissible fade show" role="alter">
            <strong>¡Exitoso!</strong> La materia fue eliminada correctamente.
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
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia) { ?>
                    <tr>
                        <td><?php echo $materia["nombre"] ?></td>
                        <td>
                            <a href="editar_materia.php?id=<?php echo $materia["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Estas seguro de eliminar?')" href="eliminar_materia.php?id=<?php echo $materia["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

