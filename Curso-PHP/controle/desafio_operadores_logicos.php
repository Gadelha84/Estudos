<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável! 
 -->

 <form action="#" method="post">
    <!-- Div relacionado à execução do trabalho 1 -->
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <!-- Div realcionado a execução do trabalho 2 -->
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
 </form>

 <style>
    button, select {
        font-size: 1.8rem;
    }
 </style>

 <?php

 $trabalho1 = !!$_POST['t1'];
 $trabalho2 = !!$_POST['t2'];

 if($trabalho1 && $trabalho2)
   {
        echo 'Vamos comprar a TV de 50" e tomar sorvete';
   }
   elseif ($trabalho1 || $trabalho2) {
        echo 'Vamos comprar a TV de 32" e tomar sorvete';
   }
   else
   {
        echo 'Vamos ficar em casa. Mais saudável';
   }