<?php

function LimparTerminal()
{
    echo "\033[2J\033[H";
}


function calculo(int $opcao, ?int $n1 = null, ?int $n2 = null, ?int $n3 = null)
{
    switch ($opcao) {
        case '1':
            echo $n1 + $n2 . "\n";
            break;

        case '2':
            echo $n1 - $n2 . "\n";
            break;


        case '3':
            if ($n1 != 0 && $n2 != 0) {
                echo $n1 * $n2 . "\n";
            } else {
                echo "não foi possivel realizar essa multiplicação. \n";
            }
            break;


        case '4':
            if ($n1 != 0 && $n2 != 0) {
                echo $n1 / $n2 . "\n";
            } else {
                echo "não foi possivel realizar essa dividez. \n";
            }
            break;

        case '5':
            if ($n1 >= 0 && $n2 >= 0) {
                echo $n1 ** $n2 . "\n";
            } else {
                echo "não foi possível executar exponencial, poís o numero é negativo";
            }
            break;

        case '6':
            if ($n3 >= 0) {
                echo sqrt($n3) . "\n";
            } else {
                echo "seu número não pode ser calculado em raíz quadrada, pois é negativo. \n";
            }
            break;

        case '7':
            if ($n3 != 0) {
                echo ($n3 / 100) . "%" . "\n";
            } else {
                echo "não foi possível realizar essa porcentagem. \n";
            }
            break;

        default:
            echo "não foi possível rastrear sua opção. \n";
    }
}

echo "======================================= \n";
echo "        calculadora de wagner         \n";
echo "======================================= \n";


echo "1. somar \n";
echo "2. subtrair \n";
echo "3. multiplicação \n";
echo "4. divisão \n";
echo "5. exponencial \n";
echo "6. raiz quadrada \n";
echo "7. porcentagem \n";

$opcao = (int) readline("escolha uma opção de 1 a 7: \n");

if ($opcao >= 1 && $opcao <= 5) {
    $n1 = (int) readline("Digite seu primeiro número: \n");
    $n2 = (int) readline("Digite seu segundo número: \n");

    calculo($opcao, $n1, $n2, null);
} elseif ($opcao == 6 && $opcao == 7) {
    $n3 = (int) readline("Digite o número: \n");

    calculo($opcao, null, null, $n3);
} else {
    echo "opção inválida \n";
}
