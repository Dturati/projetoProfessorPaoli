<DOCTYPE HTML>

<html>
<head>
  <title> <?php echo date('d/m/y'); ?> </title>
</head>

<body>
<form align="center">
<p> Login de usuário </p>
<fildset>
<label>
  Login:<br>
  <input type="text" name="inputLogin"/>
</label><br><br>

<label>
  Senha:<br>
  <input type="password" name="inputSenha" />
</label><br><br>

<input type="submit" value="login" name="enviar"/>
</fildset>
</form>

<table>
  <tr>
    <th>  </th>
    <th>  </th>
  </tr>
<?php foreach($_GET['teste'] as $dados) : ?>
  <tr>
    <td> <?php //echo $dados['id_aluno']; ?></td>
    <td> <?php //echo $dados['nome_aluno']; ?></td>
  </tr>
<?php endforeach; ?>

</table>

</body>

</html>
