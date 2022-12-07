<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

echo '<p class="divisao">Relacionais no If/Else</p><hr/>';
$idade = 35;
if($idade < 18) {
    echo "Menor de idade<br/>";
}
else if($idade <= 65)
{
    echo "Adulto<br/>";
}
else
{
echo "Terceira idade!";
}

echo '<p class="divisao">Spacechip</p><hr/>';
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);