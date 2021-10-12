<?php
    include_once 'includes/encuesta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Encuesta</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="card">
        <div class="card-body">
            <form action="#" method="POST">
                <?php
                    $encuesta = new Encuesta();

                    $verResultados = false;
                    if (isset($_POST['votar'])){
                        $encuesta->respuestas($_POST['nombre'],$_POST['genero'], $_POST['hobby'], $_POST['tiempo']);
                        $encuesta->votacion();
                    }
                    if (isset($_POST['siguiente'])){
                        $verResultados = true;
                    }
                    if (isset($_POST['regresar'])){
                        $verResultados = false;
                    }
                    if (isset($_POST['descargar'])){
                        include 'vistas/excel.php';
                    }
                    if ($verResultados){
                        include 'vistas/resultados.php';
                    } else {
                        include 'vistas/preguntas.php';
                    }
                ?>
            </form>
        </div>
    </div>

    

</body>
<script>

$( function() {
    $("#hobby").change( function() {
        if ($(this).val() == "ninguno") {
            $("#tiempo").prop("disabled", true);
        } else {
            $("#tiempo").prop("disabled", false);
        }
    });
});

let nombres=document.getElementById("nombres").getContext("2d");

    var chart = new Chart(nombres,{
        type: "bar",
        data:{
            labels: [
                <?php
                foreach ($nombres as $key => $value) {
                    echo "'".$key."',";
                }
                ?>
            ],
            datasets:[
                {
                    label: "Nombres",
                    backgroundColor: "rgb(51,153,255)",
                    data: [
                        <?php
                        foreach ($nombres as $key => $value) {
                            echo "'".$value."',";
                        }
                        ?>
                    ]
                }
            ]
        }
    })

    let genero=document.getElementById("genero").getContext("2d");

    var chart = new Chart(genero,{
        type: "bar",
        data:{
            labels: ['Hombres','Mujeres'],
            datasets:[
                {
                    label: "Genero",
                    backgroundColor: "rgb(51,153,255)",
                    data: [<?php echo $hombres; ?>, <?php echo $mujeres; ?>]
                }
            ]
        }
    })

    let hobby=document.getElementById("hobby").getContext("2d");

    var chart = new Chart(hobby,{
        type: "bar",
        data:{
            labels: [
                <?php
                foreach ($hobby as $key => $value) {
                    echo "'".$key."',";
                }
                ?>
            ],
            datasets:[
                {
                    label: "Hobbies",
                    backgroundColor: "rgb(51,153,255)",
                    data: [
                        <?php
                        foreach ($hobby as $key => $value) {
                            echo "'".$value."',";
                        }
                        ?>
                    ]
                }
            ]
        }
    })

    let tiempo=document.getElementById("tiempos").getContext("2d");

    var chart = new Chart(tiempo,{
        type: "bar",
        data:{
            labels: [
                <?php
                foreach ($tiempos as $key => $value) {
                    echo "'".$key."',";
                }
                ?>
            ],
            datasets:[
                {
                    label: "Tiempos",
                    backgroundColor: "rgb(51,153,255)",
                    data: [
                        <?php
                        foreach ($tiempos as $key => $value) {
                            echo "'".$value."',";
                        }
                        ?>
                    ]
                }
            ]
        }
    })
</script>
</html>