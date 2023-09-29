<?php ob_start();
 session_start();
?>
<html>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-color: #999999;
	padding-top:200px;
}
-->
</style>

<?php
	include("../ketnoi.php");
	if(!$_SESSION['email'])
		{
			$email = $_POST['email'];
			$pass = md5($_POST['pass']);
			$query = mysql_query("SELECT * FROM thanh_vien WHERE Email='$email' and Password = '$pass' ");
			if(mysql_num_rows($query) == 1)
			{

				$r = mysql_fetch_array($query);
				if($r['Ma_cv'] == 1)
				{
					$_SESSION['email'] = $email;
					header("refresh:0;url= index.php");
				}
			}

	}

?>

<body>
<form name="form1" method="post" action="">
  <table width="200" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
    <tr>
      <td height="30" align="center" bgcolor="#0066CC"><span class="style1">Qu&#7843;n tr&#7883; n&#7897;i dung</span></td>
    </tr>
    <tr>
      <td><table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="53" height="30">Email:</td>
          <td width="147"><label>
            <input type="text" name="email" id="email">
          </label></td>
        </tr>
        <tr>
          <td height="30">Pass:</td>
          <td><input type="password" name="pass" id="pass"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label>
            <input type="submit" name="button" id="button" value="Login">
          </label></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#0066CC">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>