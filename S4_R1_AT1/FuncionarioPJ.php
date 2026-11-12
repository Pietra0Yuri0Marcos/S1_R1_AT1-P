<?php
require_once 'FuncionarioInterface.php';

class FuncionarioPJ implements FuncionarioInterface{
    private $tipo;
    private $nome;

    public function __construct($nome, $tipo)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    # [Override]
    public function contratar()
    {
        echo "Funcionário {$this->nome} ({$this->tipo}) contratado! :)"; 
    }

    # [Override]
    public function demitir()
    {
        echo "Funcionário {$this->nome} ({$this->tipo}) demitido... :(";
    }
}
?>