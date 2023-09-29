<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {color: #FFFFFF}
.ten_field{
padding-right:15px;
}
-->
</style>
</head>

<body>
<?php
	include("../ketnoi.php");
	// Neu co an nut thêm
	if($_POST['them'])
	{
		$ma_qc = $_POST['ma_qc'];
		$ten_qc = $_POST['ten_qc'];
		$lienket = $_POST['lienket'];
		$hienthi = $_POST['ht'];
		$file = "flash/".$_FILES['file']['name'];
		$kq_query = mysql_query("INSERT INTO quangcao (Ma_qc,Lien_ket_qc ,Ten_qc, Hinh_qc,Hien_thi) VALUES ('$ma_qc','$ten_qc','$lienket','$file','$hienthi')");
		move_uploaded_file($_FILES['file']['tmp_name'],"../images/flash/".$_FILES['file']['name']);
		if($kq_query == "")
		{
			$tb = "Thêm thất bại do mã quảng cáo \"$ma_qc\" trùng";
		}
		else
		{
			$tb = "Thêm thành công!";
		}
	}


?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="23" colspan="2" align="center" bgcolor="#0066CC" class="style1">THÊM QUẢNG CÁO</td>
    </tr>

    <tr>
      <td width="37%" align="right" bgcolor="#CCCCCC" class="ten_field">Mã quảng cáo: </td>
      <td width="63%" bgcolor="#CCCCCC"><label>
        <input name="ma_qc" type="text" id="ma_qc"  value="<?php echo $_POST['ma_qc'];  ?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên quảng cáo:</td>
      <td bgcolor="#CCCCCC"><input name="ten_qc" type="text" id="ten_qc" value="<?php echo $_POST['ten_qc']; ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Liên kết quảng cáo:</td>
      <td bgcolor="#CCCCCC"><label>
      <input name="lienket" type="text" id="lienket" value="<?php echo $_POST['lienket']; ?>" size="40" />
      </label></td>
    </tr>

    
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Hiển thị trang chủ:</td>
      <td bgcolor="#CCCCCC"><label>
        <input type="radio" name="ht" id="radio" value="1" />
      Có </label>
      <label>
      <input type="radio" name="ht" id="radio2" value="0" />
      Không</label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Hình ảnh:</td>
      <td bgcolor="#CCCCCC"><label>
        <input type="file" name="file" id="file" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#0099CC" class="style2">&nbsp;</td>
      <td bgcolor="#0099CC" class="style2"><?php echo $tb; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><label>
        <input type="submit" name="them" id="them" value="Thêm quảng cáo" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
