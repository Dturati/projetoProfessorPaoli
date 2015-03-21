<?php
session_start();
$dbServidor = 'localhost';
$bdUsuario = 'david';
$bdSenha = '123';
$bdBanco = 'bancodedados';


$conexao = mysqli_connect($dbServidor, $bdUsuario, $bdSenha, $bdBanco);
if(mysqli_connect_errno($conexao)){
    echo "Erro ao conectar ao banco de dados";
    die();
}else{
  //echo "Conectado";
}

function buscaDados($conexao){
  $sqlConsulta = 'SELECT * FROM cadastro';
  $resultado = mysqli_query($conexao, $sqlConsulta);

  $dados = array();
  $row = array();
  while($dados = mysqli_fetch_assoc($resultado)){
     $_GET['teste'][] = $dados;
  }
  return $_GET['teste'];

}

function gravarDados($conexao, $dados){
  
  $sqlGravar = "INSERT INTO
  cadastro(nome_aluno, email_aluno, login_aluno, senha_aluno)
  VALUES('{$dados['nome_aluno']}','{$dados['email_aluno']}','{$dados['login_aluno']}','{$dados['senha_aluno']}')";

  mysqli_query($conexao, $sqlGravar);

  echo "<script language='javascript'> alert('usúario cadastrado') </script>";

}
?>
