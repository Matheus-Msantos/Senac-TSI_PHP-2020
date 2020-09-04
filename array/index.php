<?PHP
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

unset($semana);

//Usando ARRAY 2

$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terça'] = 2;
$semana['Quarta'] = 3;
$semana['Quinta'] = 4;
$semana['Sexta'] = 5;
$semana['Sábado'] = 6;

$day = date('l');
echo "<br><br> Hoje é " . $semana[$day] . " com indice alfanumerico <br><br>";

$usuario = ['nome' 	=> 	'Luiz Bono', 
            'idade' =>	25, 
            'peso' => 67.8, 
            'signo'	=> 'aquariano'];

echo "O professor " . $usuario['nome'] . " tem " . $usuario['idade'] . " anos, pesa " . number_format($usuario['peso'], 2, ',', '.') . " e é " . $usuario['signo'];

/* Mostrando arrays dentro de string especial 
    echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa  {$usuario['peso']} e é {$usuario['signo']} ";
*/

// Criando uma constante

define('NOME', 'Raimundo Nonato');
echo '<br><br> Olá ' . NOME;

define('RES_P_PAG', 10);
for ($i = 0; $i < RES_P_PAG ; $i++){
    echo "<br> Resultado $i";
}


$professores [0] = ['nome' => 'Luiz Bono', 'idade' => 25, 'peso' => 68.8, 'signo' => 'aquariano'];
$professores [1] = ['nome' => 'Thyago Claro', 'idade' => 26, 'peso' => 69.7, 'signo' => 'canceriano'];
$professores [2] = ['nome' => 'Thiago Quintas', 'idade' => 18, 'peso' => 60.4, 'signo' => 'sagitariano'];

?>

<table border="1px">
<tr><td>Nome</td> <td>Peso</td> <td>Idade</td> <td>Signo</td></tr>

<?PHP 
foreach ($professores as $linhas => $professor) {
    echo"<br><tr> 
        <td>{$professor['nome']}</td>
        <td>{$professor['idade']}</td> 
        <td>{$professor['peso']}</td> 
        <td>{$professor['signo']}</td>
        </tr>";
        
}
?>
</table>