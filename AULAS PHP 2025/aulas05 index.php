<html>
    <head>
        <title> Aula 05 - PHP </title>
    </head>
    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];

            echo "Os valores são $n1 e $n2. <br>";
            echo "O valor absoluto de $n1 é" .abs($n1);
            echo "<br> O número $n2 <sup>$n1</sup> é igual a " .pow($n2, $n1);
            echo "<br> A raiz quadrada de $n2 é igual a " .sqrt($n2);

            ?>
    </body>
</html>
