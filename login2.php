<html>
<?php
session_start();
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+ 1;
else
    $_SESSION['views'] = 1;
echo "views = ". $_SESSION['views']";
?>
<head>
<style type="text/css">
       body {
       background: #E6E8FA url('planodefundo/planodefundo.png');
       background-repeat: repeat-y;
       }
</style>
<title>Login</title>
</head>
<body>
<form name="form1" method="POST" action="login.php">

<table width="51%" border="0" align="center"
                          cellpadding="1"
                          cellspacing="0">
<tr>
<td colspan="2"><div align="center">Login</div>
</td>
</tr>

<tr>
<td width="33%" align="right">Usu�rio:</td>
<td width="67%"><input name="userlogin" type="text"
           id="userlogin"></td>
</tr>

<tr>
<td align="right">Senha:</td>
<td><input name="userpassword" type="password"
           id="userpassword"></td>
</tr>

<tr>
    <td align="right">&nbsp;</td>
    <td>
    <input name="login" type="image" src="botoes/lock_off.png"
    id="login" value="ENVIAR">
    </td>
    </tr>
</table>
</form>
</body>
</html>
