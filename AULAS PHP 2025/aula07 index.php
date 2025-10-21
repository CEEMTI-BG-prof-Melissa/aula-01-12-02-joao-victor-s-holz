
<html>
    <head>
        <title>Aula 07</title>
    </head>
    <body>
        <h3> Operadores e Comentários em PHP </h3>
        <hr>

        <?php
//Aula 07
//João Victor S. Holz
//08/10/2025

            // Criar variável inicial
            $num = 10;
            echo "Valor inicial: $num<br><br>";

            // Soma 5 ao valor inicial
            $num += 5;
            echo "Após somar 5: $num<br>";

            // Subtrai 2 ao valor atual
            $num -= 2;
            echo "Após subtrair 2: $num<br>";

            // Multiplica por 3 o valor atual
            $num *= 3;
            echo "Após multiplicar por 3: $num<br>";

            // Divide por 2 o valor atual
            $num /= 2;
            echo "Após dividir por 2: $num<br><br>";

            // Pré-incremento
            // Aumenta o valor antes de usar
            echo "Pré-incremento: " . ++$num . "<br>";

            // Pós-incremento
            // Mostra o valor, depois aumenta
            echo "Pós-incremento: " . $num++ . "<br>";

            // Pré-decremento
            // Diminui o valor antes de usar
            echo "Pré-decremento: " . --$num . "<br>";

            // Pós-decremento
            // Mostra o valor, depois diminui
            echo "Pós-decremento: " . $num-- . "<br><br>";

            // Valor final
            echo "Valor final: $num<br>";
        ?>
    </body>
</html>    
