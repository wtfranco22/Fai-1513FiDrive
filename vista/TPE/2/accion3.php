<?php
include_once("../../estructura/cabecera.php");
include_once("../../../configuracion.php");
?>

    <h2>Eliminar Archivo Compartido: </h2>
    <?php
    $datos = data_submitted();
    $obj = new archivo();
    $respuesta= $obj->eliminararchivocompartido($datos);
    echo $respuesta;
    ?>
    <br/>
    <a class="btn btn-primary" href='eliminararchivocompartido.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>
