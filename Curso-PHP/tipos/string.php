<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br/>';
var_dump("Eu também");

//Concatenação
echo '<br/>';
echo "Nós também". ' somos';
echo '<br/>', "Também aceito", " vírgulas";

echo '<br/>';
echo "'Teste' ". '"Teste"';

print("<br/>Também existe a função print");
printf("<br/>E a função printf");

//Funções
echo '<br/>'. strtoupper('maximizado');
echo '<br/>'. strtolower('MINIMIZADO');
echo '<br/>'. ucfirst('só a primeira letra maiúsculala');
echo '<br/>'. ucwords('todos os ínicios de palavras maiúsculas');
echo '<br/>'. mb_strlen('Eu também');
echo '<br/>'. substr('Só uma paste mesmo', 13, 6);
echo '<br/>'. str_replace('isso', 'aquilo', 'Trocar isso');