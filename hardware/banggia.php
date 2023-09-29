<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thông tin sản phẩm</title>
<style>
.dong_ttsp{
}
</style>
</head>

<body>
<?php
	include("ketnoi.php");
	$truyvan_sp = mysql_query("SELECT Ma_tb,Ten_tb, Ten_loai_sp, Ten_hieu, concat(Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong, ' cái') FROM thietbi, loai_sp WHERE thietbi.Ma_loai = loai_sp.Ma_loai_sp") or die ("Truy vấn không thành công!");
	
?>
<table width="800" border="1" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="7" align="center" valign="middle" bgcolor="#999999">THÔNG TIN SẢN PHẨM</td>
      </tr>
      <tr align="center" bgcolor="#CC9999">
        <td>Mã thiết bị</td>
        <td>Tên thiết bị</td>
        <td>Loại sản phẩm</td>
        <td>Nhà sản xuất</td>
        <td>Giá bán</td>
        <td>Bảo hành</td>
        <td>Số lượng còn</td>
      </tr>
 <?php
 	while($dong = mysql_fetch_row($truyvan_sp))
	{
      echo "<tr>
        <td width='80'>$dong[0]</td>
        <td>$dong[1]</td>
        <td>$dong[2]</td>
        <td>$dong[3]</td>
        <td width='65'>$dong[4]</td>
        <td>$dong[5]</td>
        <td width='60'>$dong[6]</td>
      </tr>";
	}
?>
    </table>
</body>
</html>
