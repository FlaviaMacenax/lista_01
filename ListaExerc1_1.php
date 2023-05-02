<?php

$a = "";
$b = "";
$c = "";
$msg = "";
$botao = "";

if(isset($_POST["calcular"])) {
    $botao = $_POST["calcular"];

    if(isset($_POST["a"])) {
        $a = $_POST["a"];
    }
    if(isset($_POST["b"])) {
        $b = $_POST["b"];
    }
    if(isset($_POST["c"])) {
        $c = $_POST["c"];
    }

    if ($a != 0) {
        $delta = $b * $b - 4 * $a * $c;

        if ($delta > 0) {
            $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
            $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
        } elseif ($delta == 0) 
            $raiz1 = $raiz2 = -($b) / (2 * $a); 
        //Colocar as chaves caso não dê certo
        else {
            $real = -$b / (2 * a)
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
            <th colspan = "2">Cálculo da Equação do 2° Grau: </th>
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
            <th colspan = "2">MENSAGENS: </th>
        </tr>
</body>
</html>