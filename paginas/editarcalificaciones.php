<?php
include("../php/conexion.php");
$sql = "SELECT * from alumnos ";
$consulta = mysqli_query($con, $sql); ?>

<table border>
    <tr>
        <th>Nro</th>
        <th>Nombre y apellidos</th>
        <th>Calificacion</th>
    </tr>
    <tbody>
        <?php 
        $contador = 0;
        while ($fila = mysqli_fetch_array($consulta)) {
            $contador ++ ;
        ?>
        <tr>
            <td>
                <?php echo $contador ?>
            </td>
            <td>
                <?php echo $fila['nombres_apellidos'] ?>
            </td>
            <td>
                <input type="number" 
                    onfocusout="actualizarNota(<?php echo $fila['id'] ?>)" 
                    value="<?php echo $fila['calificacion'] ?>" 
                    id="input-<?php echo $fila['id'] ?>"
                    placeholder="agregar nota"/>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>