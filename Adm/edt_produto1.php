<html>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[Editar]) // Se for o bot�o SALVAR
      {
      $Query="UPDATE produtos SET Categoria='$categoria', Nome='$Nome', Valor='$Valor' WHERE CodProduto='$CodProduto'";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("N�o foi poss�vel atualizar os dados");
      if ($Resultado)
      {
       print("Produto $Nome alterado");
       }
       }
       ?>
       </body>
       <BR><a href=opcoes.html>Op��es administrador</a>
       </html>
