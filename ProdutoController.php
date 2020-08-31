<?php
    require_once(__DIR__."/Produto.php");
    require_once(__DIR__."/Fornecedor.php");

    $produto1 = new Produto("Martelo", 10.5, 40, "Tramontina", "Ferreamenta");
    $produto2 = new Produto("Chave-Pilips", 17.5, 60, "Tramontina", "Ferramenta");
    $produto3 = new Produto("Torneira", 3.5, 15, "Tigre", "Peça");

    $produtos = [$produto1, $produto2, $produto3];

    require(__DIR__."/index.php");
    //header("Location: http://localhost:8081");


