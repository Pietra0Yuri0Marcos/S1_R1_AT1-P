<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$funcionarioCLT = new FuncionarioCLT("Jorge", "CLT");
$funcionarioPJ = new FuncionarioPJ("Marcos", "PJ");

//CLT
$funcionarioCLT->contratar();
echo "\n";
$funcionarioCLT->demitir();

echo "\n\n";

//PJ
$funcionarioPJ->contratar();
echo "\n";
$funcionarioPJ->demitir();
?>