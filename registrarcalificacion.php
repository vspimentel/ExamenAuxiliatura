<?php
    include("connect.php");
    $calificacion = $_POST["calificacion"];
    $id = $_POST["id"];
    $sql = "UPDATE alumnos SET calificacion = ".$calificacion." WHERE id = ". $id;
    $consulta = mysqli_query($con, $sql);
?>