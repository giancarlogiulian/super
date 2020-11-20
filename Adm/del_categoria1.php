<html>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[Excluir]) // Se for o botão EXCLUIR
      {
      $Query="DELETE from categorias where CodCategoria='$CodCategoria'";
      $Resultado=mysql_query($Query,$ConexaoID)
      or Die ('Não foi possível excluir. Contate o administrador para as atitudes cabíveis. <br>' . mysql_error());
      if ($Resultado)
      {
       print("Categoria $Descricao excluido" . mysql_error());
       }
       }
       ?>
       </body>
       <BR><a href=opcoes.html>Opções administrador</a>
       </html>
