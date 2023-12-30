<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>    
</head>
<body>
    <div class="container">
        <h2>Distancia percorrida</h2>
        <?php            
            $kilometrosPorLitro = filter_input(INPUT_POST, "kilometros", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $valorLitro = filter_input(INPUT_POST, "valor", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $tempoMinutos= filter_input(INPUT_POST, "minutos", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $tempo = $tempoMinutos/60;
            $velocidadeMedia=filter_input(INPUT_POST, "velocidade", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            
            $distanciaTotalPrecorrida=$tempo*$velocidadeMedia;
            $quantidadeLitrosUsados=$distanciaTotalPrecorrida/$kilometrosPorLitro;
            $valorGastoCombustivel=$quantidadeLitrosUsados*$valorLitro;

            $valorGastoCombustivel=number_format($valorGastoCombustivel, 2,",",".");
            $distanciaTotalPrecorrida=number_format($distanciaTotalPrecorrida,2);
            $quantidadeLitrosUsados=number_format($quantidadeLitrosUsados,2,",",".")
        ?>
        <div class="alert alert-success">
            <?="Foram percorridos $distanciaTotalPrecorrida kilometros nessa viagem"?>
            <div>
            <?="Foram utilizados $quantidadeLitrosUsados litros nessa viagem"?>
            </div>
            <div>
            <?="O valor gasto com combustivel foi de R$  $valorGastoCombustivel "?>
            </div>

        </div>
    </div>
</body>
</html>