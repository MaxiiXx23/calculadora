<?php
    session_start();
    $_SESSION["num1"];
    $_SESSION["num2"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora Máxima - expoente</title>
    </head>
    <body>
        <h3 style="margin-left:49%;">Expoente</h3><br/>
        <div style="margin-left:41.5%;">
            <fieldset style="width:30%; background:#7AC5CD">
                <form action="resultado.php" method="POST">
                    <label>Digite um exponte:</label>
                    <input type="text" name="expoente">
                    <button type="submit" style="background:#98F5FF;border:#7AC5CD">OK</button>
                </form>
            </fieldset>
        </div>
    </body>
</html>