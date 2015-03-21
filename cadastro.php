<?php

include "templateBanco.php";
$consultaDados = buscaDados($conexao);
$nome = "";
$email = "";
$login = "";
$senha = "";
if(isset($_GET['textNome'])){
  $nome = $_GET["textNome"];
}

if(isset($_GET['textEmail'])){
  $email = $_GET['textEmail'];
}

if(isset($_GET['textLogin'])){
  $login = $_GET['textLogin'];
}

if(isset($_GET['textSenha'])){
  $senha = $_GET['textSenha'];
}

$dadosCadastro = array();
$dadosCadastro['nome_aluno'] = $nome;
$dadosCadastro['email_aluno'] = $email;
$dadosCadastro['login_aluno'] = $login;
$dadosCadastro['senha_aluno'] = $senha;

function cadastrar($consultaDados, $dadosCadastro, $conexao){
$logico = 0;
foreach ($consultaDados as $dados){
    if($dados['login_aluno'] == $_GET['textLogin']){
      echo "<script language='javascript'> alert('login existente') </script>";
      $logico = 1;
      break;
    }
  }

  if($logico == 0){
    gravarDados($conexao, $dadosCadastro);
  }
}



if(isset($_GET['submitCadastrar'])){
  cadastrar($consultaDados, $dadosCadastro, $conexao);
}

//gravarDados($conexao, $dadosCadastro,$consultaDados);


include "templateCadastro.php";
?>
