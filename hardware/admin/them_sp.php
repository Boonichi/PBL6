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
		$ma_tb = $_POST['ma_tb'];
		$ten_tb = $_POST['ten_tb'];
		$tenloai = $_POST['tenloai'];
		$tenhieu = $_POST['tenhieu'];
		$giaban = $_POST['giaban'];
		$baohanh = $_POST['baohanh'];
		$dactinh = $_POST['dactinh'];
		$soluong = $_POST['soluong'];
		$file = "thietbi/".$_FILES['file']['name'];
		$ngaynhap = date("Y")."-".date("m")."-".date("d");

			$kq_query = mysql_query("INSERT INTO thietbi (Ma_tb, Ten_tb , Ma_loai , Ten_hieu, Dac_tinh , Gia_ban , So_luong,Bao_hanh, Hinh_anh,Ngay_nhap) VALUES ('$ma_tb','$ten_tb','$tenloai','$tenhieu','$giaban','$baohanh','$dactinh','$soluong','$file','$ngaynhap')");
		
			move_uploaded_file($_FILES['file']['tmp_name'],"../images/thietbi/".$_FILES['file']['name']);
		if($kq_query == "")
		{
			$tb = "Thêm thất bại do mã thiết bị \"$ma_tb\" trùng";
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
      <td height="23" colspan="2" align="center" bgcolor="#0066CC" class="style1">THÊM SẢN PHẨM</td>
    </tr>

    <tr>
      <td width="37%" align="right" bgcolor="#CCCCCC" class="ten_field">Mã thiết bị: </td>
      <td width="63%" bgcolor="#CCCCCC"><label>
        <input name="ma_tb" type="text" id="ma_tb"  value="<?php echo $_POST['ma_tb'];  ?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên thiết bị:</td>
      <td bgcolor="#CCCCCC"><input name="ten_tb" type="text" id="ten_tb" value="<?php echo $_POST['ten_tb']; ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên loại:</td>
      <td bgcolor="#CCCCCC"><label>
        <select name="tenloai" id="tenloai">
        <?php
		

			$query_loai = mysql_query("SELECT * FROM loai_sp");
         	while($ql = mysql_fetch_row($query_loai))
			{
				echo "<option value='".$ql[0]."'>".$ql[1]."</option>";
		  	}
		 ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên hiệu:</td>
      <td bgcolor="#CCCCCC"><input name="tenhieu" type="text" id="ten_tb" value="<?php echo $_POST['tenhieu']; ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Giá bán:</td>
      <td bgcolor="#CCCCCC"><input name="giaban" type="text" id="giaban" value="<?php echo $_POST['giaban']; ?>" size="20" />
        USD </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Bảo hành:</td>
      <td bgcolor="#CCCCCC"><input name="baohanh" type="text" id="baohanh" value="<?php echo $_POST['baohanh'];  ?>" size="20" />
        Tháng </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Đặc tính kỹ thuật:</td>
      <td bgcolor="#CCCCCC"><label>
        <textarea name="dactinh" id="dactinh" cols="45" rows="4"><?php echo $_POST['dactinh'];  ?>
        </textarea>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Số lượng còn:</td>
      <td bgcolor="#CCCCCC"><input name="soluong" type="text" id="soluong" value="<?php $_POST['soluong'];  ?>" size="20" /></td>
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
        <input type="submit" name="them" id="them" value="Thêm sản phẩm" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
