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
        <h2>Volume de um cilindro</h2>
        <?php            
            $radio = filter_input(INPUT_POST, "radio", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $altura = filter_input(INPUT_POST, "altura", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $radio2 = $radio**2;
            const PI=3.14159;
            $volumen = PI* $radio2 * $altura;
            
        ?>
        <div class="alert alert-secondary">
            <?="Volume é igual a: $volumen"?>
        </div>
    </div>
</body>
</html>