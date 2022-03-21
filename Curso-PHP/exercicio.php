<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="/assets/css/estilo.css"/>
    <link rel="stylesheet" href="/assets/css/exercicio.css"/>
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href= <?= "{$_GET['dir']}/{$_GET['file']}.php";?> class="verde">Sem Formatação</a>
        <a href="\index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        C0D3R & ALUNOS &copy; <?= date('Y'); ?>
    </footer>
</body>
</html>