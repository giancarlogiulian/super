<html>
<body bgcolor="#E6E8FA">
<?php
      include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
      if ($_POST[Editar]) // Se for o bot�o SALVAR
      {
      $Query="UPDATE clientes SET Nome='$Nome', Cidade='$Cidade',
      Estado='$Estado',Email='$email',Login='$Login',
      Senha='$senha',Validado='0' WHERE CodCliente='$CodCliente'";
      $Resultado=mysql_query($Query,$ConexaoID) or
      Die ("N�o foi poss�vel atualizar os dados");
      if ($Resultado)
      {
       print("Cliente $Nome alterado");
       }
       }
       ?>
       </body>
       <BR><a href=opcoes.html>Op��es administrador</a>
       </html>
