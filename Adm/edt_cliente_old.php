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
<title>Edição do Cliente</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
</head>
<body bgcolor="#E6E8FA">
<?php
 include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
 $Query="SELECT * FROM clientes WHERE CodCliente='$CodCliente'";
 $Resultado=mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar o usuário");
 $Registro=mysql_fetch_array($Resultado);
?>
 <form name="form1" method="post"
      action="edt_cliente1.php">
<table width="75%" border="0" align="center"
      cellpadding="1" cellspacing="3">
<tr>
 <td width="50%"><input name="CodCliente" type=hidden id="CodCliente"
 value="<?php print($Registro[CodCliente])?>"></td>
 </tr>

 <tr>
 <td width="50%" align="right">Nome:</td>
 <td width="50%"><input name="Nome" type="text" id="nome"
 value="<?php print($Registro[Nome])?>"></td>
 </tr>

 <tr>
 <td align="right">Cidade:</td>
 <td><input name="Cidade" type="text" id="cidade"
 value="<?php print($Registro[Cidade])?>"></td>
 </tr>

 <tr>
 <td align="right">Estado:</td>
 <td><select name="Estado" id="estado">
 <option value="<?php print($Registro[Estado])?>">
 <?php print($Registro['Estado']);?></option>
 <option value="SC">SC</option>
 <option value="PR">PR</option>
 <option value="RS">RS</option>
 <option value="SP">SP</option>
 </select></td>
 </tr>

 <tr>
 <td align="right">E-Mail:</td>
 <td><input name="email" type="text" id="email"
 value="<?php print($Registro[Email])?>"></td>
  </tr>

  <tr>
 <td align="right">Login:</td>
 <td><input name="Login" type="text" id="login"
 value="<?php print($Registro[Login])?>"></td>
  </tr>

 <tr>
 <td align="right">Senha:</td>
 <td><input name="senha" type="text" id="senha"
 value="<?php print($Registro[Senha])?>"></td>
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
<a href=lista_cliente.php><img src="../botoes/voltar/hand_point_180.png"></img> Voltar</a>
</html>
