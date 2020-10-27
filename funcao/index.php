<?PHP

function operacao(float $num1, float $num2, string $operacao = '+'): float{
    switch ($operacao){
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '/':
            return $num1 / $num2;
        case '*':
            return $num1 * $num2;
        default:
            return 0.0;
    }
}

echo '<br> o resultado da conta é: ' . operacao(2.5, 2.5, '*');

function day(int $num1): string //tipo de saida
{
    $semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    return $semana[$num1];
}

echo '<br><br> Hoje é: ' . day(2);

$nome = 'Melo';

function muda_nome(string &$var ): string{
    $var = 'Outro nome';
    return $var;
}

echo "<br><br>A variável \$nome ainda vale: \"$nome\"";