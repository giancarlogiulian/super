<html>
<head>
<style type="text/css">
       body {
       background-image: url("../planodefundo/planodefundo.png");
       background-repeat: repeat-y;
       }
</style>
</head>
<title>Cadastro de categoria</title>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[cadastrar]) // Se for o bot�o EXCLUIR
      {
      $Query="insert into categorias(Descricao) values ('$descricao');";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("N�o foi poss�vel cadastrar os dados");
      if ($Resultado)
      {
       print("Categoria $descricao cadastrado");
       }
       }
       ?>
       </body>
       <a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img></a>
       </html>
