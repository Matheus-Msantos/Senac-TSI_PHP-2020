<?php
ini_set('display_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

// Condicional IF

$clima = 'gelado';

if ($clima == 'gelado'){
    echo 'Meu pé congelou!!';
}

// Condicinal (Operador ternário)

$bool = '1';

$var = $bool === 1 ? '$bool é igual a 1!' : '$bool não é igual a 1!';
echo '<br><br>' . $var;

$var = $bool == 1 ? '$bool é igual a 1!' : '$bool não é igual a 1!';
echo '<br><br>' . $var;

$var = $bool !== 1 ? '$bool é diferente de 1!' : '$bool não é diferente de 1!';
echo '<br><br>' . $var;

$var = $bool != 1 ? '$bool é diferente de 1!' : '$bool não é diferente de 1!';
echo '<br><br>' . $var;

// IF com comparador de valor
$frase = 'Mj é o melhor jogador do mundo!';

if (strpos($frase, 'jogador do mundo')){
    echo '<br><br> Verdade!! Ele é o melhor mesmo!!!';
}else{
    '<br><br> LeBron é melhor que ele!!!';
}

// Switch

$carne = 'Vamos lá';

switch ($carne){
    case 'bem passada': 
        echo '<br><br> Você estragou o nosso churrasco';
    break;
    case 'ao ponto': 
        echo '<br><br> Dá pra comer';
    break;
    case 'mal passada':
        echo '<br><br> Feita pelos deuses';
    break;
    default:
        echo '<br><br> Para de enrolar e vamos logo fazer esse churrasco';
    break;
}

// If aninhado com um switch
$time = 'timao';

switch ($time){
    case 'timao':
    case 'gaviao':
        if(true){
            echo '<br><br> Louco por ti...';
            if(true)
                echo '<br> ... corithians';
        }
    break;
    default:
        echo 'Não existe time melhor';
    break;
}

// Condicional nova no PHP
$isso = 'Meu';
$isso = $isso ?? 'errou';
echo "<br><br> Oloquinho $isso";

$denovo = 'Meu';
$denovo = $denvo ?? 'bicho';
echo "<br><br> Tá pegando fogo $denovo";