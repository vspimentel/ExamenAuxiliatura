<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Final</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/universidad.png" height="100px" style="border-right: 1px solid black;">
            <div style="display: flex; flex-direction: column; width: 100%;">
                <div class="navbar">
                    <a href="javascript:inicio()">Inicio</a>
                    <a href="javascript:listas()">Lista</a>
                    <a href="">Horarios</a>
                    <a href="javascript:calificaciones()">Calificaciones</a>
                    <a href="javascript:informes()" style="border-right: 0px;">Informes</a>
                </div>
                <div id="titulo">
                    Inicio
                </div>
            </div>
        </div>
        <div class="content">
            <div class="lat_menu">
                <div class="asigments">Asignaturas</div>
                <div id="menu">
                    <div class="option_selected" onclick="changeAsignment(this)">SIS256</div>
                    <div class="option" onclick="changeAsignment(this)">SIS258</div>
                    <div class="option" onclick="changeAsignment(this)">SIS406</div>
                </div>
            </div>
            <div id="contenido">
                <div class="ncuadros">
                    <div>Nro de Cuadros</div>
                    <form action="javascript:createTable()">
                        <input type="number" id="numero"><br><br>
                        <input type="submit" value="Obtener">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>