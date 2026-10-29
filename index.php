<?php
// Importa os arquivos
require_once 'Pessoa.php';
require_once 'Produto.php';

// Cadastra a pessoa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['tipo'] == 'cliente') {
        $c1 = new Cliente($_POST['nome'], $_POST['idade'], $_POST['peso'], $_POST['altura']);
    } else {
        $f1 = new Funcionario($_POST['nome'], $_POST['idade'], $_POST['cargo'], $_POST['salario']);
    }
}

// Cria dois produtos
$p1 = new Produto("Notebook", 3500);
$p2 = new Produto("Mouse", 79.90);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h1>Cadastro de Pessoas</h1>

<form method="post">

    Tipo:
    <select name="tipo">
        <option value="cliente">Cliente</option>
        <option value="funcionario">Funcionário</option>
    </select>
    <br><br>

    Nome: <input type="text" name="nome" required>
    <br><br>

    Idade: <input type="number" name="idade" required>
    <br><br>

    Peso: <input type="number" step="0.01" name="peso">
    <br><br>

    Altura: <input type="number" step="0.01" name="altura">
    <br><br>

    Cargo: <input type="text" name="cargo">
    <br><br>

    Salário: <input type="number" step="0.01" name="salario">
    <br><br>

    <input type="submit" value="Cadastrar">

</form>

<?php
// Mostra os dados cadastrados
if (isset($c1)) {
    $c1->cadastrar();
    $c1->mostrarDados();
}

if (isset($f1)) {
    $f1->mostrarDados();
}
?>

<hr>

<h1>Produtos cadastrados</h1>

<?php
// Mostra os produtos
$p1->mostrarProduto();
echo "<br>";
$p2->mostrarProduto();
?>

</body>
</html>