<?php
	include("../ketnoi.php");
	if (!$_SESSION['email'])
	{
		if($_SESSION['Ma_cv'] != "1")
		{
			header("Location: login.php");
		}
	}
	else if($_SESSION['email'] && $_GET['action'] == "logout")
	{
					session_destroy();
					header("refresh:0;url= index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị Website</title>
<style>
A:link {
	COLOR: #0099CC; TEXT-DECORATION: none
}
A:visited {
	COLOR: #0099CC; TEXT-DECORATION: none
}
A:active {
	COLOR: #0099CC; TEXT-DECORATION: none
}
A:hover {
	COLOR: #3bac00; TEXT-DECORATION: none
}
.style1 {
padding-left:15px;
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {color: #FFFFFF}

.style3 {
	color: #0099CC;
	font-size: 16px;
	border-bottom:solid 1px #CCCCCC;
	padding-left:15px;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 19px;
}
.style5 {font-size: 14px}
-->
</style>
</head>

<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
  <tr>
    <td height="30" bgcolor="#0066CC" class="style1">C.PANEL</td>
    <td height="30" align="left" bgcolor="#0066CC" class="style1"> VI TÍNH PHONG PHÚ</td>
    <td align="right" bgcolor="#0066CC" class="style1 style5">Hi: <?php echo $_SESSION['email']."  | <a href='?action=logout'> <font color=\"#FFFFFF\"> Thoát </font> </a>"; ?> | <a href="../index.php" class="style2" target="_blank"><font color="#FFFFFF">Trang chủ</font></a></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" bgcolor="#0066CC" class="style4">Sản phẩm</td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=sua_sp">Cập nhật sản phẩm</a></td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=them_sp">Thêm sản phẩm mới</a></td>
      </tr>
    </table></td>
    <td width="85%" colspan="2" rowspan="2">
    <?php
		if($_GET['action'] == "sua_sp")
		{
			if($_GET['id_sp'])
			{
				include("sua_qlsp.php");
			}
			else
			{
				include("ql_sp.php");
			}
		}
		else if($_GET['action'] == "them_sp")
		{

			include("them_sp.php");
		}
		else if($_GET['action'] == "sua_qc")
		{
			if($_GET['id_qc'])
			{
				include("sua_qlqc.php");
			}
			else
			{
				include("ql_qc.php");
			}
			
		}
		else if($_GET['action'] == "them_qc")
		{
			include("them_qc.php");
		}
	?>    </td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" bgcolor="#0066CC" class="style4">Quảng cáo</td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=them_qc">Thêm quảng cáo</a></td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=sua_qc">Cập nhập quảng cáo</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="#0066CC" class="style2"> Copyright 2010 @ Powered by Phong Phú</td>
  </tr>
</table>
</body>
</html>
