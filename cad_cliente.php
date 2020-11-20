<html>
<head>
<title>Cadastro de clientes</title>
</head>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[cadastrar]) // Se for o botão EXCLUIR
      {
      $Query="insert into clientes(Nome, Cidade, Estado, Email, Login, Senha) values ('$nome','$cidade','$uf','$email','$login','$senha');";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("Não foi possível cadastrar os dados");
      if ($Resultado)
      {
       print("Cliente $Nome cadastrado");
       }
       }
       ?>
       </body>
       <BR><a href=Adm/opcoes.html>Opções administrador</a>
       </html>
