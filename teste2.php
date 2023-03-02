<html>
    <head>
        <title>Calculadora Básica</title>
    </head>
 
    <body>
        <form action="calculadora.php" method="get">
 
            Primeiro numero:
            <input name="num1" type="text" />
            <br /> <br />
             
            Segundo numero:
            <input name="num2" type="text" />
            <br /> <br />
             
            Operacao:  
            <input name="operacao" type="text" />
            <br /> <br />
             
            <input type="submit" value="submeter" />    
            <br /> <br />
             
        </form>
        <?php

$x = $HTTP_GET_VARS["num1"];
$y = $HTTP_GET_VARS["num2"];
$op = $HTTP_GET_VARS["operacao"];

if($op=="soma")
    $z = $x + $y;

elseif($op=="subtracao")
    $z = $x - $y;


elseif($op=="multiplicacao")
    $z = $x*$y;


else
    $z = $x/$y;

echo "O resultado e: $z";
?>
    </body>
</html>