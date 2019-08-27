<?php
    session_start();
    $num1=$_SESSION["num1"];
    $num2=$_SESSION["num2"];
    //print_r($_SESSION);
    $exponte=$_POST['expoente'];
    if(is_numeric($exponte)){
        $result=POW($num1,$exponte);
        $result2=POW($num2,$exponte);
    }else{
        echo "Por Favor Digite um número";
        header('Location: expoente.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora Máxima - Resultado expoente</title>
    </head>
    <body>
        <h1  style="margin-left:40%;">Resultado dos números com Expoente</h1>
        <table style="margin-left:40%; background:#98F5FF;" border="1">
            <tr>
                <th>
                    Número escolhidos
                </th>
                <th>
                    Resultado de seus expoentes
                </th>
            </tr>
            <tr colspan="2">
                <td>
                    <?php echo $num1 ." e ".$num2;  ?>
                </td>
                <td>
                    <?php  echo $num1;?><sup><?php  echo $exponte;?></sup> = <?php  echo $result;?>   e   <?php  echo $num2;?><sup><?php  echo $exponte;?></sup> = <?php  echo $result2;?>
                </td>
            </tr>
        </table>
        <p style="margin-left:40%;">Deseja fazer outro calculo desde o inicio?</p>
        <a href="index.php"><button style="margin-left:40%; background:#98F5FF;">Inicio</button></a>
        <p style="margin-left:40%;">Ou Deseja colocar outro expoente?</p>
        <a href="expoente.php"><button style="margin-left:40%; background:#98F5FF;">Expoente</button></a>
    </body>
</html>