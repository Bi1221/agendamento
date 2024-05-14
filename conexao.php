<?php 
//definir fuso horário
date_default_timezone_set('America/Sao_Paulo');

//dados banco de dados local
$servidor = 'localhost';
$banco = 'agendamento';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
    echo 'Erro ao envontrar ao banco de dados!<br>';
    echo $e;
    

}
//variaveis globais
$nome_sistema = 'Nome do Sistema';
$email_sistema = 'biancabartole23@gmail.com';
$telefone_sistema = '(12) 99225-3453';

?>