<div class="titulo">Desafio String</div>

<?php

echo 'Enunciado:';
echo '<br/>'. 'Avaliando os métodos da documentação string, qual o método que a posição do texto abc na string !AbcaBcabc retorne 1?'. '<br/>';

echo strpos('!AbcaBcabc', 'abc'). '<br/>';
echo stripos('!AbcaBcabc', 'abc'). '<br/>';
