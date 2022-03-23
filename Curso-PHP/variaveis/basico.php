<div class="titulo">Variáveis</div>

<?php

$num = 15;
echo $num, '<br/>';
var_dump($num);

echo '<br/>';
$a = 7;
$b = 14;
$soma = $a + $b;
echo $soma;
echo '<br/>';

echo isset($soma);

unset($soma);
echo '<br/>';
var_dump($soma);

$var = 10;
echo '<br/>'. $var;

$var = "Agora sou uma string";
echo '<br/>'. $var;

