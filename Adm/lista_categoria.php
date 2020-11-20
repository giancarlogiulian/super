<html>
<body bgcolor="#E6E8FA">
<style type="text/css">
       body {
       background: #E6E8FA url('../planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<title>Categorias</title>
<!-- lista_cliente.php -->
<!-- Sem HTML -->
<?php
     include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
     $Query = "SELECT * FROM categorias";
     $Resultado = mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar a base");
     $Colunas =   mysql_num_fields($Resultado);
     $LPP = 10;
     $Total = mysql_num_rows($Resultado);
     $Paginas = ceil($Total/$LPP);
     print("<BR><center><font color=red>Categorias</font><BR><BR></center>");
     if (!isset($Pagina))
     {
     $Pagina = 0;
     }
     $Inicio = $Pagina * $LPP;
     $Query = "SELECT * FROM categorias LIMIT $Inicio, $LPP";
     $Resultado = mysql_query($Query,$ConexaoID);
     print("<center>");
     print("<TABLE Border = 1>");
     print("<TR>");
     print("<TH>Código</TH><TH>Descrição</TH><TH>Editar</TH><TH>Deletar</TH>");
     print("</TR>");
     while ($Registros=mysql_fetch_array($Resultado)) {
     print("<TR>");
     for ($Cont=0;$Cont<$Colunas;$Cont++){
     print("<TD><font color=blue>$Registros[$Cont]</font></TD>");
     }
     print("<TD><a href=edt_categoria_old.php?CodCategoria=$Registros[CodCategoria]><center><img src=../botoes/listas/application_form_edit.png></img></center></a></TD>");
     print("<TD><a href=del_categoria.php?CodCategoria=$Registros[CodCategoria]><center><img src=../botoes/listas/application_form_delete.png></img></center></a></TD>");
     print ("</TR>");
     }
     print("</TABLE>");
     print("</center>");
     if($Pagina >0){
     $Menos = $Pagina -1;
     $Link = "$PHP_SELF?Pagina=$Menos";
     print("<a href=$Link>Anterior</a>");
     }
     for($Cont=1;$Cont<$Paginas;$Cont++){
     $Link = "$PHP_SELF?Pagina=$Cont";
     print(" | <a href=$Link>$Cont</a>");
     }
     if ($Pagina <$Paginas -1){
     $Mais = $Pagina + 1;
     $Link = "$PHP_SELF?Pagina=$Mais";
     print(" | <a href=$Link>Próxima</a>");
     }
?>
</body>
     <br><center><a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administração do SGBD</a></center>
</html>
