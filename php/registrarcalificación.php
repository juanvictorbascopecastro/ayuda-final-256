<?php
include("../php/conexion.php"); 
if(!empty($_POST['id']) && !empty($_POST['nota'])) {
    $id = $_POST['id'];
    $nota = $_POST['nota'];
    
    $sql = "UPDATE alumnos SET calificacion = ".$nota." WHERE id = ".$id;
    if (mysqli_query($con, $sql)) {
        echo "Datos actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
} else {
    echo '<b class="error">No se enviaron los parametros correcto</b>';
}

?>