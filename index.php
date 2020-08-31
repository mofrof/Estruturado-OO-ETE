<?php
    require_once(__DIR__."/Produto.php");
    require_once(__DIR__."/Fornecedor.php");

    $produto1 = new Produto("Martelo", 10.5, 40, "Tramontina", "Ferreamenta");
    $produto2 = new Produto("Chave-Pilips", 17.5, 60, "Tramontina", "Ferramenta");
    $produto3 = new Produto("Torneira", 3.5, 15, "Tigre", "Peça");

    $produtos = [$produto1, $produto2, $produto3];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">

    <title>Principal</title>
</head>
<header>

</header>

<body>
    <div>
        <div class="jumbotron">
            <h1>App de venda de produtos de Zezinho</h1>
            <h3>Pagina inicial</h3>
        </div>
        <div class="container">
            <div class="row">
                <h3 class="col-md-10">Lista de Produtos</h3>
                <a href="adicionarProduto.html" type="button" class="btn btn-outline-primary col-md-2">Add Produto</a>
            </div>
           <br>
        <table class="table">
            <tr>
                <th>Nome Produto</th>
                <th>Quantidade Produto</th>
                <th>Valor Produto</th>
                <th>Nome Fornecedor</th>
                <th>Tipo Fornecedor</th>
                <th>Ação</th>
            </tr>
            <?php
                foreach($produtos as $value){
                    echo "<tr>";
                    echo "<td>$value->nome</td>";
                    echo "<td>$value->quantidade</td>";
                    echo "<td>$value->valor</td>";
                    echo "<td>".$value->fornecedor->nome."</td>";
                    echo "<td>".$value->fornecedor->tipo."</td>";
            ?>
             <td><button class="btn btn-success"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                    <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                    <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                  </svg> Vender</button></td>
            <?php
                }
            ?>
        </table>
        </div>
    </div>



    <script type="text/javascript" src="bootstrap-4.5.2-dist/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>

</body>

<footer>

</footer>

</html>