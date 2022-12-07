<div class="titulo">Switch</div>

<!-- Inclusão própria do código para melhorar a interação do exercício -->
<form action="#" method="post">
    <div>
        <label for="car">Categoria:</label>
        <select name="car" id="car">
            <option value="Luxo">Luxo</option>
            <option value="SUV">SUV</option>
            <option value="Sedan">Sedan</option>
            <option value="Básico">Básico</option>
        </select>
    </div>
    <button>Enviar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
    button, hr {
        margin-top: 15px;
    }
</style>

<hr>

<?php
$categoria = $_POST['car'];
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
}elseif ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
}elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = $_POST['car'];
switch($categoria) {
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'SUV':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'Sedan':
        $carro = 'Etios'; 
        $preco = 55000;
        break;
    default: 
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";