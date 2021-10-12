<?php
header("Content-Type: application/xls");
header("Content-Disposition: attechment; filename=encuesta.xlsx");

?>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Hobby</th>
            <th>Tiempo</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $resultados = $encuesta->verResultados();
            foreach ($resultados as $key => $resultado) {
        ?>
                <tr>
                    <th><?php echo $key; ?> </th>
                    <th><?php echo $resultado['nombre']; ?></th>
                    <th><?php echo $resultado['genero']; ?></th>
                    <th><?php echo $resultado['hobby']; ?></th>
                    <th><?php echo $resultado['tiempo']; ?></th>
                </tr>
        <?php 
                
            }
        ?>
    </tbody>
</table>