<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("ketnoi.php");
	$truyvan = mysql_query("SELECT * FROM khach_hang");
	
	

?>
<table width="900" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="center" valign="middle" bgcolor='blue' style='color:#FFFFFF;font-weight:bold'>THÔNG TIN KHÁCH HÀNG</td>
  </tr>
  <tr bgcolor='#FF9999'>
    <td width="120" align="center" valign="middle">MÃ HS</td>
    <td width="120" align="center" valign="middle">TÊN KH</td>
    <td width="120" align="center" valign="middle">GIỚI TÍNH</td>
    <td width="120" align="center" valign="middle">ĐIỆN THOẠI</td>
    <td width="120" align="center" valign="middle">EMAIL</td>
  </tr>
 <?php 
	$mau =1;
 	while($row = mysql_fetch_row($truyvan))
	{
		if($row[2] == 0)
		{
			$gt = "<img width='40px' height='40px' src='images/img/be_trai_2.jpg' />";
		}
		else
		{
			$gt = "<img width='40px' height='40px' src='images/img/be_gai_2.jpg' />";
		}
		if($mau % 2 == 0)
		{
		   echo "<tr bgcolor='#FF9999'>";
		}
		else if($mau % 2 != 0)
		{
			echo "<tr  bgcolor='#CC9966'>";
		}
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td align='center'>".$gt."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "</tr>";
		$mau++;
  }
 ?>
</table>
</body>
</html>
