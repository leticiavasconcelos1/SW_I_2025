<?php

include_once 'exe.class.php';

$produto = new Produtos ("mouse", 150.00, 10);
$produto->adicionarEstoque(5);
$produto->removerEstoque(3);
$produto->mostrarDetalhes();

echo "<hr>";
$produto2 = new Produtos ("teclado", 350.00, 20);
$produto2->adicionarEstoque(10);
$produto2->removerEstoque(2);
$produto2->mostrarDetalhes();

?>