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
    <title>Projeto Prof.Vitor, Marco e Lorena</title>    
</head>
<body>
    <div class="container">
        <h2>Temperatura em Fahrenheit</h2>
        <?php            
            $grausCelcius = filter_input(INPUT_POST, "celcius", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $grausFahrenheit = (1.8 * $grausCelcius)+32
            
        ?>
        <div class="alert alert-warning">
            <?="$grausCelcius °C equivale a  $grausFahrenheit °F"?>
        </div>
    </div>
</body>
</html>