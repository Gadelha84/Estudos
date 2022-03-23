<div class="titulo">Dasafio Equação</div>

<?php
// primeiro bloco da expressão
$num1 = pow(6 * (3 + 2), 2);
$num2 = 3*2;
$eq1 = $num1 / $num2;


//segundo bloco da expressão
$num3 = (1 - 5) * (2 - 7) / 2;
$rq2 = pow($num3, 2);

//ultimo bloco da expressão
$num3 = $eq1 - $rq2;
$div = $num3 / 10;
$tot =  pow($div, 3);
echo '<br/>', "O resultado da equação é: ". $tot;


