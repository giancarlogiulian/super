<html>
<head>
<style type="text/css">
       body {
       background: #E6E8FA url('../planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<title>Excluir Categoria</title>
</head>
<body bgcolor="#E6E8FA">
<?php
include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
 $Query="SELECT * FROM categorias WHERE CodCategoria='$CodCategoria'";
 $Resultado=mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar o usuário");
 $Registro=mysql_fetch_array($Resultado);
?>

 <form name="form1" method="post"
      action="del_categoria1.php">
<table width="75%" border="0" align="center"
      cellpadding="1" cellspacing="3">

<tr>
<td colspan="2"<div align="center">Exclusão de Categorias</div>
</td>
</tr>


<tr>
 <td width="50%" align="right">Código:</td>
 <td width="50%"><input name="CodCategoria" type="text" id="CodCategoria"
 value="<?php print("$CodCategoria")?>"
 readonly="true"></td>
 </tr>

 <tr>
 <td width="50%" align="right">Descrição:</td>
 <td width="50%"><input name="Descricao" type="text" id="descricao"
 value="<?php print($Registro[Descricao])?>"></td>
 </tr>

 <tr>
 <td align="right">&nbsp;</td>
 <td><input name="Excluir" type="image" id="excluir" src="../botoes/cadastros/report_add.png"
 value="Excluir">
 <input type="image" value="" src="../botoes/cadastros/report_delete.png"
 Onclick="window.location='lista_categoria.php'">
 </td>
 </tr>
 </table>
 </form>
 </body>
 <a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administração do SGBD</a><br>
 <a href=lista_categoria.php><img src="../botoes/voltar/hand_point_180.png"></img> Voltar</a>
</html
