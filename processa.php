<?php
    session_start();
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $opc=$_POST['opc'];
    $result;
    if(is_numeric($num1) && is_numeric($num2)){
        if($opc=="a"){
            $result=$num1+$num2;
        }else if($opc=="s"){
            $result=$num1-$num2;
        }else if($opc=="m"){
            $result=$num1*$num2;
        }else{
            $result=$num1/$num2;
        }
    }else{
        echo "Por Favor Digite um número";
        header('Location: index.php');
    }
    //sessions
    $_SESSION["num1"] = $num1;
    $_SESSION["num2"] = $num2;
    //print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora Máxima</title>
    </head>
    <body>
        <h1 style="margin-left:45%;">Resultado da conta</h1>
        <table style="margin-left:42.5%; background:#E0FFFF;" border="1">
            <tr>
                <th>
                    Opção escolhida
                </th>
                <th>
                    Conta
                </th>
                <th>
                    Resultado da Conta
                </th>
            </tr>
            <tr>
                <td>
                    <?php if($opc=="a"){
                           echo "Adição";
                        }else if($opc=="s"){
                            echo "Subtração";
                        }else if($opc=="m"){
                            echo "Multiplicação";
                        }else{
                            echo "Divisão";
                        }
                    ?>
                </td>
                <td>
                <?php if($opc=="a"){
                           echo $num1. " + " . $num2;
                        }else if($opc=="s"){
                            echo $num1. " - " . $num2;
                        }else if($opc=="m"){
                            echo $num1. " x " . $num2;
                        }else{
                            echo $num1. " % " . $num2;
                        }
                    ?>
                </td>
                <td>
                    <?php echo $result; ?>
                </td>
            </tr>
        </table>
        <p style="margin-left:35.5%;">Agora vamos calcular o expoente de cada número informado? Clique em 'Avançar' para continuar.</p>
        <form action="expoente.php" method="POST">
            <button type="submit" style="background:#98F5FF; margin-left:50%;border:#7AC5CD" >Avançar</button>
        </form>
    </body>
</html>