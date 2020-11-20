<html>
<head>
<style type="text/css">
       body {
       background-image: url("../planodefundo/planodefundo.png");
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
<title>Cadastro de Produtos</title>
</head>
<body bgcolor="#E6E8FA">
<?php
  include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
  $Query = "select * from categorias";
  $Resultado = mysql_query($Query, $ConexaoID);
  /*
  * $Res = mysql_fetch_array($Resultado);   // Tira essa linha, e coloca as variaveis existentes no while, ou nem precisa
  * Perceber que o $Res já está chamando o primeiro registro da variável $Resultado, fazendo com que não apareça dentro no WHILE
  */
?>
<form name="form1" method="post" action="cad_produto1.php">
<table width="75%" border="0" align="center" cellpading="1" cellspacing="3">
<tr>
    <td colspan="2">
    <div align="center">Cadastro de Produtos</div>
    </td>
    </tr>
    
    <tr>
    <td width="50%" align="right">Categoria:</td>
    <td width="50%"><select name="categoria" id=categoria>
    <?php
    while($Categoria = mysql_fetch_array($Resultado)){
    print ("<option value=$Categoria[CodCategoria]>$Categoria[Descricao]</option>");
    }
    ?>
    </select>
    </td>
    </tr>

     <!--
     <tr>
     <td width="50%" align="right">Categoria:</td>
     <td width="50%"><input name="categoria" type="text" id="categoria"</td>
     </tr>
     -->


     <tr>
     <td width="50%" align="right">Nome:</td>
     <td width="50%"><input name="nome" type="text" id="nome"</td>
     </tr>

     <tr>
     <td width="50%" align="right">Valor:</td>
     <td width="50%"><input name="valor" type="text" id="valor"</td>
     </tr>

     <tr>
     <td align="right">&nbsp;</td>
     <td><input name="cadastrar" type="image" src="../botoes/cadastros/report_add.png"
     id="cadastrar" value="Cadastrar">
     <input class="limpar" type="reset" name="xx" id="xx"
     value="">
     <input name="cancelar" type="image" id="Cancelar" src="../botoes/cadastros/report_delete.png"
     value="Cancelar">
     </td>
     </tr>

     <a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administração do SGBD</a>

</body>
</html>
