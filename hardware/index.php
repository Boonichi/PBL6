<?php 
include("ketnoi.php");
// Bộ đếm
include("modules/bodem.php");
// Thanh record
include('modules/pages_record.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vi Tinh Phong Phu</title>
<link rel="stylesheet" type="text/css" href="images/img/style.css">
<link rel="stylesheet" type="text/css" href="images/styles/cssverticalmenu.css" />
<script type="text/javascript" src="images/styles/cssverticalmenu.js"></script>
</head>

<body>
<table width="990px" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="130" colspan="3" valign="top" id='banner'>
   	 <img src="images/img/banner.jpg" border="0" width="100%" height="132" />    </td>
  </tr>
  <tr>
    <td colspan="3"  valign="top" id="menu">
   		 <?php
			include("modules/menu.php");
		?>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" id="nav" bgcolor="#FFFFFF">
       	<?php
			include("modules/nav.php");
		?> 
    </td>
  </tr>
  <div align="center">
  <tr>
    <td width="200" valign="top" bgcolor="#FFFFFF" style="padding-left:10px;">
    	<?php
			include("modules/danhmuc_sp.php");
			include("modules/danhmuc_bc.php");
			include("modules/tuvan_tructuyen.php");
		?>    
        </td>
    <td valign="top" bgcolor="#FFFFFF" width="100%" style="padding-left:12px; padding-right:2px;">
<?php
			if($_GET['frame'] == "catelogies")
			{
				include("modules/catelogies_sp.php");
			}
			else if ($_GET['frame'] == "chitiet")
			{
				include("modules/chitiet_sp.php");
			}
			else if ($_GET['frame'] == "giohang")
			{
				include("modules/cart.php");
			}
			else if ($_GET['frame'] == "search")
			{
				include("modules/timkiem.php");
			}
			else if($_GET['frame'] == "register")
			{
				if(!$_SESSION['email'])
				{
					include("modules/register.php");
				}
				else
				{
					header("refresh:0;url=index.php");
				}
			}
			else if($_GET['frame'] == "chuyentrang")
			{
				include("modules/chuyentrang.php");
			}
			else 
			{
				include("modules/content.php");
				include("modules/sanpham_moi.php");
			}
		?>
    
    </td>
    <td width="200" valign="top" style="padding-right:10px;" bgcolor="#FFFFFF">
    	<?php
			include("modules/login.php");
			include("modules/menu_giohang.php");
			include("modules/quangcao_r.php");
			include("modules/thongke.php");
		?>    </td>
  </tr>
  </div>
  <tr>
    <td height="70" colspan="3" id="footer">
    <?php
	include("footer.php");
	mysql_close($conn);
	?>  
    
    </td>
  </tr>
</table>
</body>
</html>
