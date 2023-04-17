<div class="card">
    <b>Examen Final de SIS256</b>
    <div>Estudiante: Pimentel Vito</div>
    <div>CU: 111-318</div>
    <div>Esta es la 
    <span style="padding: 5px; border: 2px solid black; margin-right: 3px">
    <?php
        if(isset($_COOKIE["nvisitas"])) {
            $nvisitas = $_COOKIE["nvisitas"];
            $nvisitas++;
        } else {
            $nvisitas = 1;
        }
        setcookie("nvisitas", $nvisitas, time()+3600);
        echo $nvisitas;
    ?>
    </span> 
    vez que visita la página</div>
</div>