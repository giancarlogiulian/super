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
<title>Validação do Cliente</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
</head>
<body bgcolor="#E6E8FA">
<?php
 include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
 $Query="SELECT * FROM clientes WHERE CodCliente= $CodCliente";
 $Resultado=mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar o usuário");
 $Registro=mysql_fetch_array($Resultado);
?>
<form name="form1" method="post"
      action="validar_cliente.php">
<table width="75%" border="0" align="center"
      cellpadding="1" cellspacing="3">
<tr>
 <td width="50%" align="right">Código:</td>
 <td width="50%"><input name="CodCliente" id="CodCliente"
 readonly="true"
 value="<?php print($Registro[CodCliente])?>"></td>
 </tr>

 <tr>
 <td width="50%" align="right">Nome:</td>
 <td width="50%"><input name="Nome" type="text" id="nome"
 readonly="true" value="<?php print($Registro[Nome])?>"></td>
 </tr>

 <tr>
 <td align="right">Cidade:</td>
 <td><input name="Cidade" type="text" id="cidade"
 readonly="true" value="<?php print($Registro[Cidade])?>"></td>
 </tr>
 <tr>
 <td align="right">Estado:</td>
 <td><input name="Estado" type="text" id="estado"
 readonly="true" value="<?php print($Registro[Estado])?>"></td>
 </tr>
 
 <tr>
 <td align="right">E-Mail:</td>
 <td><input name="e-mail" type="text" id="email"
 readonly="true" value="<?php print($Registro[Email])?>"></td>
  </tr>
  
  <tr>
 <td align="right">Login:</td>
 <td><input name="Login" type="text" id="login"
 readonly="true" value="<?php print($Registro[Login])?>"></td>
  </tr>
 
 <tr>
 <td align="right">Senha:</td>
 <td><input name="senha" type="text" id="senha"
 readonly="true" value="<?php print($Registro[Senha])?>"></td>
  </tr>
  
  <tr>
 <td align="right">Validar Usuário:(s/n)</td>
 <td><input name="validado" type="text"
 value="<?php print (validado($Registro[Validado]))?>"></td>
  </tr>
    <tr>
<td align="right">&nbsp;</td>
<td><input name="Validar" type="image" id="Validar" src="../botoes/validacao/reseller_account_template.png"
          value="Validar">
<input class="limpar" name="xx" type="reset" id="xx" value="">
    <td>
</tr>
</table>
</form>


<?php
function validado ($Valor){
if($Valor == 0){
return('');
}
else
{
return ('');
}
}

if($_POST["Validar"])

{
if($validado == 's' OR $validado == 'S')
{
$Query="UPDATE Clientes SET Validado='1'
WHERE CodCliente='$CodCliente'";
$Resultado=mysql_query($Query,$ConexaoID)
or Die ("Não foi possivel atualizar os dados");
//if($Resultado){
//print("<BR>Cliente Validado")
//}
} else {
if ($validado == 'n' OR $validado == 'N')
{
$Query="UPDATE Clientes SET Validado='0' 
WHERE CodCliente='$CodCliente'";
$Resultado=mysql_query($Query,$ConexaoID)
or Die ("Não foi possível atualizar os dados");
}
}
}
?>
</body>
     <a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administração do SGBD</a><br>
     <a href=lista_cliente.php><img src="../botoes/voltar/hand_point_180.png"></img> Voltar</a>
</html>

