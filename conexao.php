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
$nome_sistema = 'Nome Sistema';
$email_sistema = 'drajessicainoue@gmail.com';
$telefone_sistema = '(11) 98521-4534';

$query = $pdo->query("SELECT * from config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
    $pdo->query("INSERT INTO config SET nome = '$nome_sistema', email = '$email_sistema', telefone = '$telefone_sistema', logo = 'logo.png', logo_rel = 'logo.jpg', icone = 'icone.png'");

}else{
$nome_sistema = $res[0]['nome'];
$email_sistema = $res[0]['email'];
$telefone_sistema = $res[0]['telefone'];
$endereco_sistema = $res[0]['endereco'];
$logo_sistema = $res[0]['logo'];
$logo_rel_sistema = $res[0]['logo_rel'];
$icone_sistema = $res[0]['icone'];

}

?>