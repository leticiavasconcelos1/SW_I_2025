<?php
require 'conexao.php';
$titulo = "As cortes do Infinito";
$genero = "Ficção";
$ano = 2022;
$autor = "Akemi Dawn Bowman";
$paginas = 432;

$sql = "INSERT INTO livro (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':paginas', $paginas);

if ($stmt->execute()) {
echo "livro inserido com sucesso!";
} else {
echo "Erro ao inserir produto.";
}
?>