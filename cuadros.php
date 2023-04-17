<?php
    include("connect.php");
    $numero = $_GET["numero"];
    $materia = $_GET["materia"];
    $sql = "SELECT fotografia, nombres_apellidos FROM alumnos WHERE materia = '".$materia."'";
    $consulta = mysqli_query($con, $sql);
?>
    <table border = 1>
    <tr>
        <th>Imagen</th>
        <th>Nombres y apellidos</th>
        <?php for($i = 1 ; $i <= $numero ; $i++)
            echo "<th>Cuadro $i</th>";
        ?>
    </tr>
    <?php while($alumnos = mysqli_fetch_array($consulta)){ ?>
        <tr>
            <td><img src="./images/<?php echo $alumnos['fotografia'] ?> "></td>
            <td> <?php echo $alumnos["nombres_apellidos"] ?> </td>
            <?php 
                for($i = 1 ; $i <= $numero ; $i++)
                echo "<td></td>";
            ?>
        </tr>
    <?php } ?>
</table>

