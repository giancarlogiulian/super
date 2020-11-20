<html>
<style type="text/css">
       body {
       background-image: url("planodefundo/planodefundo.png");
       background-repeat: repeat-y;
       }
</style>
<head>
<title>Tela principal</title>
</head>
<body bgcolor="#E6E8FA">
<?php
  include ("conexao.php");
  if ($_POST){
  $userlogin = $_POST['userlogin'];
  $userpassword = $_POST['userpassword'];
  if (empty($userlogin) OR empty($userpassword)){
     print("<center>É necessário digitar login e senha<br>");
     print("<a href=login.htm><img src=botoes/voltar/hand_point_180.png></img>Voltar</a></center>");
     }
     else
     {
     $Query = ("SELECT * FROM clientes WHERE Login='$userlogin' AND Senha='$userpassword'");
     //$Query .= " Login='$userlogin' AND ";
     //$Query .= " Senha='$userpassword'";
     $Resultado = mysql_query($Query,$ConexaoID); // envia a consulta para o banco
     $Registro = mysql_fetch_array($Resultado); // vai retornar um registro
     if ($Registro['Login'] == $userlogin and $Registro['Senha'] == $userpassword)
     {
     //if ($Registro['Login'] == "giancarlo" AND $Registro['Senha'] = "giancarlo")
     //{
	 if ($Registro['Validado'] == 1)
	 {
     print("<center><a href='Adm/opcoes.html'><img src='botoes/login/database_process.png'</img></a></center>");
     print("<center>Administração do SGBD</center>");
     }
     else
     {
     print("<center><a href='ver_produto.php'><img src='botoes/login/shopping_cart.png'</img></a></center>");
     print("<center>Produtos</center>");
     }
     }
     else
     {
     print("<center>Login ou senha incorretos<BR>");
     print("<a href=login.htm><img src=botoes/voltar/hand_point_180.png></img>Voltar</a></center>");
     }
     }
     }
?>
</body>
</html>
     
     
