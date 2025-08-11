<?php
require 'conexao.php';
$sql = "SELECT * FROM livro";
$stmt = $pdo->query($sql);
while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "ID: " . $livro['id'] . "<br>";
echo "Título: " . $livro['titulo'] . "<br>";
echo "Gênero: " . $livro['genero'] . "<br>";
echo "Ano: " . $livro['ano'] . "<br>";
echo "Autor: " . $livro['autor'] . "<br>";
echo "Páginas: " . $livro['paginas'] . "<br>
<br>";
}
?>