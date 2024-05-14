<?php
require_once ("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->query("SELECT * from usuarios where email = '$usuario'and senha = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);
echo $linhas;
?>