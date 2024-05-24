<?php
$tabela = 'usuarios';
require_once("../conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$conf_senha = $_POST['conf_senha'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);
$id = $_POST['id'];

if($conf_senha != $senha) {
    echo'As senhas não se coincidem';
    exit();


}

$query = $pdo->query("SELECT * from usuarios where email = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res)>0){
    echo 'Email já Cadastrado';
    exit();


}

if($id == ""){
$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, email = :email,senha = '$senha', senha_crip = '$senha_crip', nivel ='$nivel', ativo ='Sim', foto = 'sem-foto.jpg', telefone = :telefone, data =curDate(), endereco = :endereco");

}else{
$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, nivel ='$nivel',      telefone = :telefone, , endereco = :endereco where id = '$id'");

}
$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->execute();

echo 'Salvo com Sucesso';
?>