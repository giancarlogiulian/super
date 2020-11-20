<?php
     $Host="localhost";
     $Usuario="root";
     $Senha="";
     $Banco="super2";
     
     $ConexaoID=mysql_connect($Host, $Usuario, $Senha) or
     Die ("Não foi possível conectar SGBD");
     $BancoDados = mysql_select_db($Banco,$ConexaoID) or
     Die ("Não foi possível selecionar o Banco");
?>
