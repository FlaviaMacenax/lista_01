<?php
 $botao = '';
 $nota1 = '';
 $nota2 = '';
 $nota3 = '';
 $nota4= '';
 $media = '';
 $erro = '';
 
 if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["nota1"])){
        $nota1 = $_POST ["nota1"];
    }

    if(isset($_POST["nota2"])){
        $nota2 = $_POST ["nota2"];
    }

    if(isset($_POST["nota3"])){
        $nota3 = $_POST ["nota3"];
    }

    if(isset($_POST["nota4"])){
        $nota4 = $_POST ["nota4"];
    }

     //Validação de campo vazio
     if (empty($_POST["nota1"]) || empty($_POST["nota2"]) || empty($_POST["nota3"]) || empty($_POST["nota4"])) {
        $erro = "Preencha todos os campos";}
    else{ //Validação de campo não numérico
        if (!is_numeric($nota1) || (!is_numeric($nota2)) || (!is_numeric($nota3)) || (!is_numeric($nota4))){
           $erro = "As notas precisam ser números";
        }else{
        //Cálculo
        $media = ($nota1*2 + $nota2*3 + $nota3*4 + $nota4*5)/14;
    }
   }
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cálculo de média ponderada</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Lista1.css'>

</head>
<body>
    <form action="Validação.php" method="post">

    <table >
        <tr>
           <td class="msg">MENSAGEM: <?php echo $erro?> </td>
           
        </tr>
        <tr>
            <td  class= "tit" colspan="2">Cálculo de média ponderada</td>
        </tr>
        <tr>
            <td class="info"><label for="lb1">Nota 1:</label></td>
            <td class= "campo"><input type="text" name="nota1"></td>
        </tr>
        <tr>
            <td class="info"><label for="lb2">Nota 2:</label></td>
            <td class="campo"><input type="text" name="nota2"></td>
        </tr>
        <tr>
            <td class="info"><label for="lb3">Nota 3:</label></td>
            <td class="campo"><input type="text" name="nota3"></td>
        </tr>
        <tr>
            <td class="info"><label for="lb4">Nota 4:</label></td>
            <td class="campo"><input type="text" name="nota4"></td>
        </tr>
        <tr>
            <td class= "botao" colspan="2"> <button type= "submit" name= "calcular">Enviar</button> </td>
        </tr>
        <tr>
            <td  class = "valor" colspan="2">Resultado: <?php echo $media?> </td>
        </tr>
    </table>

    </form>
</body>
</html>