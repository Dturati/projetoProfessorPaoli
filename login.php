<?php
include "templateBanco.php";
$login = '';
$senha = '';
$vetor_dados = array();
$vetor_dados = buscaDados($conexao);

if(isset($_GET['inputLogin'])){
  $login = $_GET['inputLogin'];
}

if(isset($_GET['inputSenha'])){
  $senha = $_GET['inputSenha'];
}

#função que efetua login
function efetuaLogin($vetor_dados, $login){
  $logico = FALSE;
  foreach ($vetor_dados as $dados){
    if($dados['login_aluno'] == $login){
      $logico = TRUE;
      break;
    }
  }
  if($logico == TRUE){
    echo "<script language='javascript'> alert('login efetuado com sucesso');  </script>";
    header('location:formularioDeperguntas.php');
  }else{
    echo "<script language='javascript'> alert('login e senha errados')</script>";
  }
}

#chama função para efetuar login
if(isset($_GET['enviar'])){
  efetuaLogin($vetor_dados, $login);
}

include "templateLogin.php";
?>
