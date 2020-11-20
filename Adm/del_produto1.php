<html>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[Excluir]) // Se for o botão EXCLUIR
      {
      $Query="DELETE from produtos where CodProduto='$CodProduto'";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("Não foi possível excluir os dados");
      if ($Resultado)
      {
       print("Produto $Nome excluido");
       }
       }
       ?>
       </body>
       <BR><a href=opcoes.html>Opções administrador</a>
       </html>
