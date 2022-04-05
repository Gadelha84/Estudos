<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
const NOVA_TAXA = 2.5;
echo '<br/>', NOVA_TAXA;

$valorVAriavel = 2.8;
define('NOVISSIMA_TAXA', $valorVAriavel);
//const NOVISSIMA_TAXA = $valorVariavel; não funciona em 'const';
echo '<br/>', NOVISSIMA_TAXA;
const OUTRA_TAXA = 2.8 +1.2;
echo '<br/>', OUTRA_TAXA;