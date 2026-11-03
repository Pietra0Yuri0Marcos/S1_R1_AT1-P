<?php

// Classe Produto
class Produto {
    public $nome;
    public $preco;

    // Recebe os dados
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Mostra o produto
    public function mostrarProduto() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}

?>