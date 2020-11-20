<html>
<body bgcolor="#E6E8FA">
<title>Carrinho</title>
<style type="text/css">
       body {
       background: #E6E8FA url('planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<!-- lista_produto.php -->
<!-- Sem HTML -->
<?php
     if ($_POST[Incluir]){
     include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php");
     $Query = "SELECT Nome, Valor FROM produtos WHERE CodProduto = '$_POST[CodProduto]'";
     $Resultado = mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar a base");
     $Colunas =   mysql_num_fields($Resultado);
     print("<center><img src=botoes/shopping_cart_accept.png></img></center><br>");
     print("<center><font color=red>Carrinho</font><BR><BR></center>");
     $Resultado = mysql_query($Query,$ConexaoID);
     print ("<center>");
     print("<TABLE Border = 1>");
     print("<TR>");
     print("<TH>Nome</TH><TH>Qnt.</TH><TH>Valor U</TH><TH>Valor T</TH><TH>CONFIRMAR</TH>"); // TH celula negritada
     print("</TR>");
     while ($Registros=mysql_fetch_array($Resultado))
     {
     $preco_total = ($_POST[Quantidade]*$Registros[Valor]);
     $preco_total_rs = 'R$ ' . number_format($preco_total,2,',','.');
          print("<TR>");
          print("<TD><font color=blue>$Registros[Nome]</font></TD>");
          $preco_unitario_rs = 'R$ ' . number_format($Registros[Valor],2,',','.');
          print("<TD><font color=blue>$_POST[Quantidade]</font></TD>");
          print("<TD><font color=blue>$preco_unitario_rs</font></TD>");
          print("<TD><font color=blue>$preco_total_rs</font></TD>");
          print("<TD><center><a href=final.html><img src=botoes/accept.png></img></a></center>");
          print ("</TR>");
     }
     print("</TABLE>");
     print("</center>");
     }
     ?>
     <br><center><a href=ver_produto.php><img src="botoes/voltar/hand_point_180.png"></img> Voltar</a></center>
</body>
</html>
