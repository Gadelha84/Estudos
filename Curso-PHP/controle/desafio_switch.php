<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km"> Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cls-frh">Celsius > Fahrenheit</option>
        <option value="frh-cls">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    /* elementos diretamente associados ao form */
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php


switch($_POST['conversao']) {
    case 'km-milha':
        $result = $_POST['param'] * 0.621371;
        echo $_POST['param'],' km ', 'convertido em milhas é: ', $result;
        break;
    case 'milha-km':
        $result = $_POST['param'] * 1.60934;
        echo $_POST['param'],' milhas ', 'convertido em km é: ', $result;
        break;
    case 'metro-km':
        $result = $_POST['param'] * 0.001;
        echo $_POST['param'],' metros ', 'convertido em km é: ', $result;
        break;
    case 'km-metro':
        $result = $_POST['param'] * 1000;
        echo $_POST['param'],' km ', 'convertido em metros é: ', $result;
        break;
    case 'cls-frh':
        $result = $_POST['param'] * 9/5 + 32;
        echo $_POST['param'],'º Celsius ', 'convertido em Fahrenheit é: ', $result;
        break;
    case 'frh-cls':
        $result = ($_POST['param'] - 32) * 5/9;
        echo $_POST['param'],'º Fahrenheit ', 'convertido em Celsius é: ', $result;
}
