<html>
<head>
<style type="text/css">
       body {
       background: #E6E8FA url('../planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
.limpar{
 background-image: url(../botoes/cadastros/report_edit.png);
border: 0;
height: 32;
width: 32;
cursor: pointer;
}
</style>
<title>Edição da Categoria</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
</head>
<body bgcolor="#E6E8FA">
<?php
 include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
 $Query="SELECT * FROM categorias WHERE CodCategoria='$CodCategoria'";
 $Resultado=mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar o usuário");
 $Registro=mysql_fetch_array($Resultado);
?>
 <form name="form1" method="post"
      action="edt_categoria1.php">
<table width="75%" border="0" align="center"
      cellpadding="1" cellspacing="3">
<tr>
 <td width="50%"><input name="CodCategoria" type=hidden id="CodCategoria"
 value="<?php print($Registro[CodCategoria])?>"></td>
 </tr>

 <tr>
 <td width="50%" align="right">Descricao:</td>
 <td width="50%"><input name="Descricao" type="text" id="descricao"
 value="<?php print($Registro[Descricao])?>"></td>
 </tr>
 
<td align="right">&nbsp;</td>
<td><input name="Editar" type="image" id="Editar" src="../botoes/cadastros/report_add.png"
          value="Editar">
<input class="limpar" name="xx" type="submit" id="xx" value="">
    <td>
</tr>
</table>
</form>
</body>
 <a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administração do SGBD</a><br>
 <a href=lista_categoria.php><img src="../botoes/voltar/hand_point_180.png"></img> Voltar</a>
</html>
