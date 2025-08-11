<?php
require 'conexao.php';
$id = 3;
$sql = "DELETE FROM livro WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "livro excluído com sucesso!";
} else {
echo "Erro ao excluir produto.";
}
?>