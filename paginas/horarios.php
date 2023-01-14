<?php
include("../php/conexion.php");

$materia = 'SIS256';
if(!empty($_GET['materia'])){
    $materia = $_GET['materia'];
}
$sql = "SELECT * from horarios WHERE materia = '" . $materia . "'";
$consulta = mysqli_query($con, $sql); 
$dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado');
$horas = array(8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
?>
<table>
    <tr>
        <th>Hora</th>
        <?php 
            foreach ($dias as $key => $value) {
                echo "<th>" . $value . "</th>";
            }
        ?>
    </tr>
    <tbody>
        <?php 
            $result = array();
            while ($row = mysqli_fetch_array($consulta)){ 
                array_push($result,$row);
            }
            // var_dump($row);
            // print_r($result);
            foreach ($horas as $i => $value) {
                echo "<tr>";
                if($key < count($horas)-1) {
                    echo "<td>" . $value . " - " . $horas[$key+1] . "</td>"; 
                    foreach ($dias as $j => $item) {
                        $encontrado = false;
                        
                        foreach ($result as $k => $fila) {
                            // echo "<td>".$fila['dia']."</td>";
                            // $encontrado = true;
                             if($materia == $fila['materia'] && $item == $fila['dia'] && strval($value) == $fila['hora']) {
                                echo "<td>". $fila['materia']. "</td>";
                                $encontrado = true;
                            }
                        }
                        if($encontrado == false) {
                            echo "<td> </td>";
                        }
                    }
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>