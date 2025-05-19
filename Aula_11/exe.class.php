<?php

class Produtos {
    private $Nome;

    private $Preco;

    private $Quantidade;

    public function __construct ($nome, $preco = 0, $quantidade = 0) {
        $this->Nome = $nome;
        $this->Preco = $preco;
        $this->Quantidade = $quantidade;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setNome($nome) {
        return $this->$nome;
    }

    public function getPreco() {
        return $this->Preco;
    }

    public function setPreco($preco) {
        return $this->$preco;
    }

    public function adicionarEstoque($quantidade) {
        if ($quantidade > 0) {
            $this->Quantidade += $quantidade;}

    }

    public function removerEstoque($quantidade) {
        if ($quantidade > 0) {
            $this->Quantidade -= $quantidade;}

    }

    public function mostrarDetalhes(){
        echo "Produto: " . $this->Nome . "<br>";
        echo "Preço: R$" . number_format($this->Preco,2,',','.') . "<br>";
        echo "Quantidade: " . $this->Quantidade . "<br>";
    }
}



?>