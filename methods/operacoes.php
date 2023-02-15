<?php


$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$resultado = 0;



if ($_POST['oper'] == '+') {
    $resultado = $n1 + $n2;
    echo "O calculo é: $resultado";
    
}
if ($_POST['oper'] == '-') {
    $resultado = $n1 - $n2;
    echo "O calculo é: $resultado";
}
if ($_POST['oper'] == '*') {
    $resultado = $n1 * $n2;
    echo "O calculo é: $resultado";
}
if ($_POST['oper'] == '/') {
    $resultado = $n1 / $n2;
    echo "O calculo é: $resultado";
}

?>
<br><br>
<a href="../views/index.php">Voltar</a>