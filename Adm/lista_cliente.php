<html>
<body bgcolor="#E6E8FA">
<style type="text/css">
       body {
       background: #E6E8FA url('../planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<title>Clientes</title>
<!-- lista_cliente.php -->
<!-- Sem HTML -->
<?php
     //$PHP_SELF = isset($PHP_SELF) ? $PHP_SELF : "";
     include ("C:\Program Files\Apache Group\Apache2\htdocs\super\conexao.php"); // Inclui o arquivo PHP que chama a conex�o com o BD
     $Query = "SELECT * FROM clientes"; // Comando para fazer a consulta armazenada na vari�vel $Query
     $Resultado = mysql_query($Query,$ConexaoID) or Die ("N�o foi poss�vel selecionar a base"); // Executa a consulta com o banco
     $Colunas =   mysql_num_fields($Resultado); // Pega o n�mero de colunas existentes na tabela
     $LPP = 10; // Mostra quantos registros quer ser mostrado por p�gina
     $Total = mysql_num_rows($Resultado); // Conta o total de registros da tabela do BD, n�mero de linhas
     $Paginas = ceil($Total/$LPP); // Quantas p�ginas vai mostrar os registros, arredonda para o prox numero inteiro
     print("<BR><center><font color=red>Clientes</font><BR><BR></center>");
     if (!isset($Pagina)){ // Se estiver vazia
     $Pagina = 0;
     }
     $Inicio = $Pagina * $LPP;
     $Query = "SELECT * FROM Clientes LIMIT $Inicio, $LPP";
     $Resultado = mysql_query($Query,$ConexaoID);
     print("<center>");
     print("<TABLE Border = 1>");
     print("<TR>");
     print("<TH>C�digo</TH><TH>Nome</TH><TH>Cidade</TH><TH>UF</TH>
     <TH>Email</TH><TH>Login</TH><TH>Senha</TH><TH>Validado</TH>
     <TH>Validar</TH><TH>Editar</TH><TH>Excluir</TH>"); // TH celula negritada
     print("</TR>");
     while ($Registros=mysql_fetch_array($Resultado)) {
     print("<TR>");
     for ($Cont=0;$Cont<$Colunas;$Cont++){
     print("<TD><font color=blue>$Registros[$Cont]</font></TD>");
     }
     print("<TD><a href=validar_cliente.php?CodCliente=$Registros[CodCliente]><center><img src=../botoes/listas/user_add.png></img></center></a></TD>");
     print("<TD><a href=edt_cliente_old.php?CodCliente=$Registros[CodCliente]><center><img src=../botoes/listas/application_form_edit.png></img></center></a></TD>");
     print("<TD><a href=del_cliente.php?CodCliente=$Registros[CodCliente]><center><img src=../botoes/listas/application_form_delete.png></img></center></a></TD>");
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
     print(" | <a href=$Link>Pr�xima</a>");
     }
     
     
?>
</body>
     <center><a href=opcoes.html><img src="../botoes/administrador/administrator.png"></img>Administra��o do SGBD</a></center>
</html>
