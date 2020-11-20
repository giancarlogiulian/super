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
<title>Edição do Produto</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
</head>
<body bgcolor="#E6E8FA">
<?php
 include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
 $Query="SELECT * FROM produtos WHERE CodProduto='$CodProduto'";
 $Resultado=mysql_query($Query) or Die ("Não foi possível selecionar o produto");
 $Registro=mysql_fetch_array($Resultado);
 $Query2="SELECT * FROM categorias";
 $Resultado2=mysql_query($Query2, $ConexaoID) or Die ("Não foi possível selecionar a categoria");
?>
 <form name="form1" method="post"
      action="edt_produto1.php">
<table width="75%" border="0" align="center"
      cellpadding="1" cellspacing="3">
<tr>
 <td width="50%"><input name="CodProduto" type=hidden id="CodProduto"
 value="<?php print($Registro[CodProduto])?>"></td>
 </tr>

    <tr>
    <td width="50%" align="right">Categoria:</td>
    <td width="50%"><select name="categoria" id=categoria>
    <?php
    while($Registro2 = mysql_fetch_array($Resultado2)){
    print ("<option value=$Registro2[CodCategoria]>$Registro2[Descricao]</option>");
    }
    ?>
    </select>
    </td>
    </tr>
 
 <tr>
 <td width="50%" align="right">Nome:</td>
 <td width="50%"><input name="Nome" type="text" id="nome"
 value="<?php print($Registro[Nome])?>"></td>
 </tr>
 
 <tr>
 <td width="50%" align="right">Valor:</td>
 <td width="50%"><input name="Valor" type="text" id="valor"
 value="<?php print($Registro[Valor])?>"></td>
 </tr>

<td align="right">&nbsp;</td>
<td><input name="Editar" type="image" id="Editar" src="../botoes/cadastros/report_add.png"
          value="Editar">
<input class="limpar" type="submit" id="xx" name="xx" value="">
    <td>
</tr>
</table>
</form>
</body>
<a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administração do SGBD</a><br>
<a href=lista_produto.php><img src="../botoes/voltar/hand_point_180.png"></img> Voltar</a>
</html>
