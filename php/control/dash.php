<?php
    include '../model/grafic.php';    
    $tipo = $_POST['graficoDinamico'];
    $ano = $_POST['anoGrafico'];   
    $_SESSION['tipo'] = $tipo;
    $_SESSION['ano'] = $ano;    
    $montaGrafico = new Grafico();   
    if($tipo == 3){
       $montaGrafico->geraGrafico();
       $grafico = $_SESSION['array'];
    }
    else{
       echo "<script>alert('Grafico escolhido não existe na base de dados')</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Painel - Ind Bandeirante</title>           
    </head>
    <body>
        <div class="chart-container" style="position: relative; height:500px; width:400px">
            <canvas id="myChart"></canvas>
        </div>
        <script>
            var tipoGrafico = <?php echo $tipo; ?>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                if(tipoGrafico == 3){
            type: 'bar',
            data: {                
                datasets: [{
                    label: 'Resultado',
                    data: [<?php echo $grafico[1][1]; ?>,<?php echo $grafico[2][1]; ?>,<?php echo $grafico[3][1]; ?>, <?php echo $grafico[4][1]; ?>, <?php echo $grafico[5][1]; ?>, <?php echo $grafico[6][1]; ?>, <?php echo $grafico[7][1]; ?>, <?php echo $grafico[8][1]; ?>, <?php echo $grafico[9][1]; ?>, <?php echo $grafico[10][1];?> , <?php echo $grafico[11][1];?> , <?php echo $grafico[12][1]; ?>],
                },{
                    label: 'Meta 90% min',
                    data: [<?php echo $grafico[0][1]; ?>],
                    type: 'line'
                   
                }],
                labels: [<?php echo $grafico[1][0]; ?>,<?php echo $grafico[2][0]; ?>,<?php echo $grafico[3][0]; ?>, <?php echo $grafico[4][0]; ?>, <?php echo $grafico[5][0]; ?>, <?php echo $grafico[6][0]; ?>, <?php echo $grafico[7][0]; ?>, <?php echo $grafico[8][0]; ?>, <?php echo $grafico[9][0]; ?>, <?php echo $grafico[10][0];?> , <?php echo $grafico[11][0];?> , <?php echo $grafico[12][0]; ?>]
            },
            }
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        </script>
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/Chart.js"></script>     
    </body>
