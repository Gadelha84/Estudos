<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

// Atribuição por valor
$variavelValor = $variavel;
echo "<br/>$variavelValor";
$variavelValor = 'novo valor';
echo "<br/>$variavel";
echo "<br/>$variavelValor";

//Atribuição por referência
$variavel = 'novo valor inicial';
$variavelValor = &$variavel;
echo "<br/>$variavelValor";
$variavelValor = 'novo conteudo';
Echo "<br/>$variavelValor";
Echo "<br/>$variavel";