<?php
require_once("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * from usuarios where email = :email and senha = :senha");
$query->bindValue(":email", "$usuario");       //Aula26
$query->bindValue(":senha", "$senha");         //Aula26
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);

if($linhas > 0){                 //Aula26
    echo 'Login permitido';      //Aula26

}
