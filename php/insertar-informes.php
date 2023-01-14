<?php
include('../php/conexion.php'); 
if(
    !empty($_POST['SIS256']) 
    && !empty($_POST['SIS258'])
    && !empty($_POST['SIS406']) 
    && !empty($_POST['mes']) 
    ) {
    $SIS256 = $_POST['SIS256'];
    $SIS258 = $_POST['SIS258'];
    $SIS406 = $_POST['SIS406'];
    $mes = $_POST['mes'];
    
    $sql = "INSERT INTO informes (materia, mes, porcentaje) 
    VALUES ('SIS256','$mes','$SIS256'),('SIS258','$mes','$SIS258'),('SIS406','$mes','$SIS406')";
    if (mysqli_query($con, $sql)) {
        echo "Datos cargado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
} else {
    echo 'No se enviaron los parametros correcto';
}
?>