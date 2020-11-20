<html>
<body bgcolor="#E6E8FA">
<head>
<style type="text/css">
       body {
       background: #E6E8FA url('planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<title>Compra</title>
</head>

<?php

  include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
  $Query1 = "SELECT * FROM produtos WHERE CodProduto='$CodProduto'";
  $Resultado1 = mysql_query($Query1,$ConexaoID) or Die ("Não foi possível selecionar a base");
  $Registro1 = mysql_fetch_array($Resultado1);
  
  $Query2 = "SELECT * FROM categorias";
  $Resultado2 = mysql_query($Query2,$ConexaoID) or Die ("Não foi possível selecionar a base");
  $Registro2 = mysql_fetch_array($Resultado2);
?>

 <form name="form1" method="post"
      action="carrinho1.php">
<table width="75%" border="0" align="center"
      cellpadding="1" cellspacing="3">

<tr>
 <td width="50%"><input name="CodProduto" type=hidden id="CodProduto"
 value="<?php print($Registro1[CodProduto])?>"></td>
 </tr>
 
 <tr>
 <td width="50%" align="right">Nome:</td>
 <td width="50%"><input name="Nome" disabled="disabled" type="text" id="nome"
 value="<?php print($Registro1[Nome])?>"></td>
 </tr>
 
  <tr>
 <td width="50%" align="right">Valor:</td>
 <td width="50%"><input name="Valor" disabled="disabled" type="text" id="valor"
 value="<?php print($Registro1[Valor])?>"></td>
 </tr>
 
  <tr>
 <td width="50%" align="right">Quantidade:</td>
 <td width="50%"><input name="Quantidade" type="text" id="quantidade"
 </td>
 </tr>
 
 <td align="right">&nbsp;</td>
<td><input name="Incluir" type="image" id="Incluir" src="botoes/cadastros/report_add.png"
          value="Incluir">
     <input name="cancelar" type="image" id="Cancelar" src="botoes/cadastros/report_delete.png"
     value="Cancelar"></td>
</form>
<a href="ver_produto.php"><img src="botoes/voltar/hand_point_180.png"></img> Voltar</a>
</body>
</html>
