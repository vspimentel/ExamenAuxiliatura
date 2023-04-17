<?php
    include("connect.php");
    $materia = $_GET["materia"];
    $sql = "SELECT id, nombres_apellidos, calificacion FROM alumnos WHERE materia = '".$materia."'";
    $consulta = mysqli_query($con, $sql);
    echo "<table border =\"1\">";
    echo "<tr>";
        echo "<th>Nro</th>";
        echo "<th>Nombres y apellidos</th>";
        echo "<th>Calificacion</th>";
    echo "</tr>";
    while($alumnos = mysqli_fetch_array($consulta)){
        echo "<tr>";
            echo "<td>".$alumnos["id"]."</td>";
            echo "<td>".$alumnos["nombres_apellidos"]."</td>";
            echo "<td><input type=\"number\" value=\"".$alumnos["calificacion"]."\" onchange=\"registrarcalificacion(this.value, ".$alumnos["id"].")\"></td>";
        echo "</tr>"; 
    }
    echo "</table>";
?>