<html>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[Excluir]) // Se for o bot�o EXCLUIR
      {
      $Query="DELETE from produtos where CodProduto='$CodProduto'";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("N�o foi poss�vel excluir os dados");
      if ($Resultado)
      {
       print("Produto $Nome excluido");
       }
       }
       ?>
       </body>
       <BR><a href=opcoes.html>Op��es administrador</a>
       </html>
