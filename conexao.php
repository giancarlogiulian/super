<?php
     $Host="localhost";
     $Usuario="root";
     $Senha="";
     $Banco="super2";
     
     $ConexaoID=mysql_connect($Host, $Usuario, $Senha) or
     Die ("N�o foi poss�vel conectar SGBD");
     $BancoDados = mysql_select_db($Banco,$ConexaoID) or
     Die ("N�o foi poss�vel selecionar o Banco");
?>
