<?php

$a = "";
$b = "";
$c = "";
$msg = "";
$botao = "";

if(isset($_POST["calcular"])) {
    $botao = $_POST["calcular"];

if ($a == NULL || $b == NULL || $c == NULL) {
     $msg = "É preciso preencher os campos para calcular as raízes.";
}
else {
    if ($a == 0) {
        $msg = "Insira um número diferente de 0 (zero) para A.";
    }
    
    else {
        $delta = ($b * $b) - (4 * $a * $c);
        if ($delta > 0) {
            $x1 = ((-1 * b) + sqrt($delta)) / 2 * $a;
            $x2 = ((-1 * b) - sqrt($delta)) / 2 * $a;
            $msg = "As raízes da equação, respectivamente, são " . $x1 . " e " . $x2 . ".";
        }

        else if ($delta == 0) {
            $x = (-1 * b) / 2 * $a;
            $msg = "A raíz da equação é " . $x . ".";
        }

        else {
            $msg = "Não existem raízes reais para esta equação.";
        }
    }
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Equação do 2° Grau:</title>
</head>
<body>
    <form action = "ListaExerc1_1.php" method = "post">

    <table>
        <tr>
            <th colspan = "2">Cálculo da Equação do 2° Grau: ax² + bx + c = 0</th>
        </tr>
        <tr>
            <td><label for = "lb1">a: </label></td>
            <td><input type = "text" name = "a"></td>
        </tr>
        <tr>
            <td><label for = "lb2">b: </label></td>
            <td><input type = "text" name = "b"></td>
        </tr>
        <tr>
            <td><label for = "lb3">c: </label></td>
            <td><input type = "text" name = "c"></td>
        </tr>
        <tr>
            <td colspan = "2"><input class = "button" type = "submit" name = "calcular"></td>
        </tr>
        <tr>
            <th colspan = "2">MENSAGENS: <?php echo $msg?></th>
        </tr>
</body>
</html>