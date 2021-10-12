<?php 
echo '<h2>' . $encuesta->getTotalVotos() . ' votos totales </h2>';

$resultados = $encuesta->verResultados();

$nombres = [];
$hombres =[];
$mujeres = [];
$hobby = [];
$tiempos = [];

foreach ($resultados as $key => $value) {
    array_push($nombres,$value['nombre']);
    array_push($hobby,$value['hobby']);
    array_push($tiempos,$value['tiempo']);
    if ($value['genero'] == 'hombre') {
        array_push($hombres,$value['genero']);
    } else if ($value['genero'] == 'mujer') {
        array_push($mujeres, $value['genero']);
    }
}

$nombresValor = $nombres;

$nombres = array_count_values($nombres);
$hombres = count($hombres);
$mujeres = count($mujeres);
$hobby = array_count_values($hobby);
$tiempos = array_count_values($tiempos);


?>
<div class="container">
<input type="submit" name="regresar" value="Regresar" class="btn btn-sm btn-primary">
<input type="submit" name="descargar" value="Descargar" class="btn btn-sm btn-primary">
    <div class="row">
        <div class="col">
            <canvas id="nombres"></canvas>
        </div>    
        <div class="col">
        <canvas id="genero"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <canvas id="hobby"></canvas>
        </div>
        <div class="col">
        <canvas id="tiempos"></canvas>            
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <table class="table">
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
    </div>
</div>

<input type="submit" name="regresar" value="Regresar" class="btn btn-sm btn-primary">
<input type="submit" name="descargar" value="Descargar" class="btn btn-sm btn-primary">
                  
