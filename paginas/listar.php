<?php
include("../php/conexion.php");

$num = 10;
if(!empty($_GET['num'])){
    $num = $_GET['num'];
}
$sql = "SELECT * from alumnos ";
$consulta = mysqli_query($con, $sql); ?>

<table border>
    <tr>
        <th>Imagen</th>
        <th>Nombre y apellidos</th>
        <?php 
            for ($i = 1; $i <= $num; $i++) { 
                echo '<th>Cuadrado '. $i .'</th>';
            }
        ?>
    </tr>
    <tbody>
        <?php while ($fila = mysqli_fetch_array($consulta)) {
        ?>
        <tr>
            <td>
                <img src="images/<?php echo $fila["fotografia"]; ?>" alt="<?php echo $fila["nombres_apellidos"]; ?>" class="fotografia">
            </td>
            <td>
                <?php echo $fila['nombres_apellidos'] ?>
            </td>
            <?php 
                for ($i = 1; $i <= $num; $i++) { 
                    echo '<td>Cuadrado '. $i .'</td>';
                }
            ?>
        </tr>
        <?php } ?>
    </tbody>
</table>