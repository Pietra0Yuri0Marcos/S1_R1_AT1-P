<?php
// Classe Pessoa
class Pessoa {
    public $nome;
    public $idade;
}

// Classe Cliente
class Cliente {
    public $nome;
    public $idade;
    public $peso;
    public $altura;

    // Recebe os dados
    public function __construct($nome, $idade, $peso, $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Cadastra o cliente
    public function cadastrar() {
        $this->nome = $this->nome;
    }

    // Mostra os dados
    public function mostrarDados() {
        echo "<h2>Cliente</h2>";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "Peso: " . $this->peso . "\n";
        echo "Altura: " . $this->altura . "\n";
    }
}

// Classe Funcionario
class Funcionario {
    public $nome;
    public $idade;
    public $cargo;
    public $salario;

    // Recebe os dados
    public function __construct($nome, $idade, $cargo, $salario) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    // Mostra os dados
    public function mostrarDados() {
        echo "<h2>Funcionário</h2>";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "Cargo: " . $this->cargo . "\n";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "\n";
    }
}

?>