<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    
</head>



<body>

    <div class="form">
        <form action="../methods/operacoes.php" method="POST">
            <div class="text">

            
            <input type="number" placeholder="Digite o primeiro numero" required name="num1">
            <input type="number" placeholder="Digite o segundo numero" required name="num2">
            </div>

            <select name="oper">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>

            <input type="submit" value="Calcular">




        </form>
    </div>


</body>

</html>