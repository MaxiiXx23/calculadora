<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora Máxima</title>
    </head>
    <body>
        <h2 style="margin-left:45%;">Calculadora Máxima</h2>
        <div style="margin-left:41.5%;">
            <fieldset style="width:30%; background:#7AC5CD">
                <form action="processa.php" method="POST">
                    <label>1° número:</label>
                    <input type="text" name="num1"><br/><br/>
                    <label>2° número:</label>
                    <input type="text" name="num2"><br/><br/>
                    <label>Como deseja Calcular?</label>
                    <select name="opc">
                        <option value="a">Adição</option>
                        <option value="s">Subtração</option>
                        <option value="m">Multiplicação</option>
                        <option value="d">Divisão</option>
                    </select><br/><br/>
                    <button type="submit" style="background:#98F5FF; margin-left:35%;border:#7AC5CD">Calcular</button>
                </form>
            </fieldset>
        </div>
    </body>
</html>
