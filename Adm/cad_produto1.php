<html>
<body bgcolor="#E6E8FA">
<title>Cadastro de produtos</title>
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[cadastrar]) // Se for o bot�o EXCLUIR
      {
      $Query="insert into produtos(Categoria, Nome, Valor) values ('$categoria','$nome','$valor');";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("N�o foi poss�vel cadastrar os dados + Query: $Query");
      if ($Resultado)
      {
       print("Produto $nome cadastrado");
       }
       }
       ?>
       </body>
       <BR><a href=opcoes.html>Op��es administrador</a>
       </html>
