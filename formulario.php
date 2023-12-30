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
    <title>Projeto prof.Vitor, Marco e Lorena</title>    
</head>
<body>
<div class="container">
        
       <!--CÓDIGO ESCRITO POR MARCO ANTONIO E LORENA AGREDO-->
        



            <!-- 1- DADOS DE UMA VIAGEM DE AUTOMÓVEL -->

        <div class="container-fluid border border-success border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Distancia Percorrida</h2>
            <form action="Arquivo receber formulário\recebeDistancia.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="numero1" class="form-label fw-bold">Kilometros por litro</label>
                        <input type="number" id="numero1" name="kilometros" class="form-control" placeholder="Escreva quantos kilometros o veículo percorre por litro" min=0 max=500 required>                    
                    </div>
                    <div class="col">
                        <label for="numero2" class="form-label fw-bold">Valor do litro de combustivel</label>
                        <input type="number" id="numero2" name="valor" class="form-control" placeholder="Escreva o valor do litro do combustivel utilizado" min=0 max=50 step="any" required>                    
                    </div>
                    <div class="col">
                        <label for="numero3" class="form-label fw-bold">Tempo em minutos gasto</label>
                        <input type="number" id="numero3" name="minutos" class="form-control" placeholder="Escreva o tempo em minutos gasto para realizar a viagem" min=0 max=200 required>                    
                    </div>
                    <div class="col">
                        <label for="numero3" class="form-label fw-bold">Velocidade media em Km/h</label>
                        <input type="number" id="numero3" name="velocidade" class="form-control" placeholder="Escreva a velocidade média do veículo durante a viagem" min=0 max=250s required>                    
                    </div>
                </div>
                <button type="submit" class="btn btn-warning my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        

            <!-- 2- CONVERSÃO GRAUS CELCIUS PARA FAHRENHEIT-->



        <div class="container-fluid border border-dark border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Temperatura</h2>
            <form action="Arquivo receber formulário\recebeTemp.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="numero" class="form-label fw-bold">Temperatura em Celcius</label>
                        <input type="number" id="numero" name="celcius" class="form-control" placeholder="Escreva o valor da temperatura em graus Celcius" min=0 max=100 required>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-danger my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>




            <!-- 3- CÁLCULO DO VOLUME DE UM CILINDRO -->    



        <div class="container-fluid border border-dark border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Volume do cilindro</h2>
            <form action="Arquivo receber formulário\recebeCilindro.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="altura" class="form-label fw-bold">Altura</label>
                        <input type="number" id="altura" name="altura" class="form-control" placeholder="Forneça a altura do cilindro" step="any" min=0 required>
                    </div>
                    <div class="col">
                        <label for="radio" class="form-label fw-bold">Raio</label>
                        <input type="number" id="base" name="radio" class="form-control" step="any" placeholder="Forneça o radio do cilindro" min=0 required>          
                    </div>                    
                </div>
                <button type="submit" class="btn btn-info my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
    </div>
</body>
</html> 
      