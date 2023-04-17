<?php
    include("connect.php");
    $mes = $_POST["mes"];
    $SIS256 = $_POST["SIS256"];
    $SIS258 = $_POST["SIS258"];
    $SIS406 = $_POST["SIS406"];
    $sql = "INSERT INTO informes(materia, mes, porcentaje) VALUES('SIS256', '$mes', $SIS256)";
    mysqli_query($con, $sql);
    $sql = "INSERT INTO informes(materia, mes, porcentaje) VALUES('SIS258', '$mes', $SIS258)";
    mysqli_query($con, $sql);
    $sql = "INSERT INTO informes(materia, mes, porcentaje) VALUES('SIS406', '$mes', $SIS406)";
    mysqli_query($con, $sql);
    echo "Informes registrados"
?>