<?PHP 

// Usando FOR
for ($i = 0, $j = 0; $i < 5; $i++, $j++){
    echo "Coluna $j <br> ";
    echo "Linha $i" . " - <br>";
}

// Usando WHILE
echo "<br><br>";
$i = 0;
while ($i < 6){
    echo "<br> $i";
    $i++;
}

// Usando DO WHILE
echo "<br><br>";
$i = 0;
do{
    echo"<br> $i";
    $i++;
}while($i < 5);

// Usando ARRAY

$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

$day = date ('w');
echo "<br><br> Hoje é " . $semana[$day];
