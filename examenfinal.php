<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>

<body>
    <div class="contenedor">

        <div class="izquierda">
            
            <div class="foto">
             
                <img src="images/universidad.png" alt="universidad" width="100%">
            </div>
            <div class="asignaturas">
                Asignaturas
            </div>
            <div class="menu" id="menu">
                <button type="button">SIS256</button>
                <button type="button">SIS258</button>
                <button type="button">SIS406</button>
            </div>
        </div>

        <div class="derecha">

            <div class="encabezado">

                <ul class="opciones">
                    <li><a href="javascript:paginar('INICIO','inicio.html')">Inicio</a></li>
                    <li><a href="javascript:paginar('Numero de cuadrados','nrocuadros.html')">Lista </a></li>
                    <li><a href="javascript:horarios()">Horarios</a></li>
                    <li><a href="javascript:listarAlumnos()">Calificaciones</a></li>
                    <li><a href="javascript:paginar('REGISTRAR INFORME','formularioinforme.php')">Informes</a></li>
                </ul>

                <div id="titulo">
                    <br>
                    Inicio
                </div>

            </div>
            
            <div id="contenido"><br><br>
                
            </div>

        </div>

        
    </div>

    <script src="main.js"></script>
</body>

</html>