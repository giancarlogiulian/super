<html>
<body bgcolor="#E6E8FA">
<style type="text/css">
       body {
       background: #E6E8FA url('../planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<title>Produtos</title>
<!-- lista_produto.php -->
<!-- Sem HTML -->
<?php
     $PHP_SELF = isset($PHP_SELF) ? $PHP_SELF : "";
     include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php"); // Inclui o arquivo PHP que chama a conexão com o BD
     $Query = "SELECT * FROM produtos"; // Comando para fazer a consulta armazenada na variável $Query
     $Resultado = mysql_query($Query,$ConexaoID) or Die ("Não foi possível selecionar a base"); // Executa a consulta com o banco
     $Colunas =   mysql_num_fields($Resultado); // Pega o número de colunas existentes na tabela
     $LPP = 10; // Mostra quantos registros quer ser mostrado por página
     $Total = mysql_num_rows($Resultado); // Conta o total de registros da tabela do BD, número de linhas
     $Paginas = ceil($Total/$LPP); // Quantas páginas vai mostrar os registros, arredonda para o prox numero inteiro
     print("<BR><center><font color=red>Produtos</font></center><BR><BR>");
     if (!isset($Pagina)){ // Se estiver vazia
     $Pagina = 0;
     }
     $Inicio = $Pagina * $LPP;
     $Query = "SELECT * FROM Produtos LIMIT $Inicio, $LPP";
     $Resultado = mysql_query($Query,$ConexaoID);
     print("<center>");
     print("<TABLE Border = 1>");
     print("<TR>");
     print("<TH>Código</TH><TH>Categoria</TH><TH>Nome</TH><TH>Valor</TH><TH>N° Categoria</TH><TH>EDITAR</TH><TH>DELETAR</TH>"); // TH celula negritada
     print("</TR>");
     while ($Registros=mysql_fetch_array($Resultado))
     {
          print("<TR>");
          
          $SQL = "SELECT Descricao From Categorias WHERE CodCategoria='$Registros[Categoria]'";
          $Result = mysql_query($SQL, $ConexaoID);
          $Categoria = mysql_fetch_array($Result);
          for ($Cont=0;$Cont<$Colunas;$Cont++)
          {
              if($Cont==1)
              {
                print("<TD>$Categoria[Descricao]</TD>");
                print("<TD>$Registros[Nome]</TD>");
              }
              else
              {
                  print("<TD><font color=blue>$Registros[$Cont]</font></TD>");
              }
         }
          print("<TD><a href=edt_produto_old.php?CodProduto=$Registros[CodProduto]><center><img src=../botoes/listas/application_form_edit.png></img></center></a></TD>");
          print("<TD><a href=del_produto.php?CodProduto=$Registros[CodProduto]><center><img src=../botoes/listas/application_form_delete.png></img></center></a></TD>");
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
