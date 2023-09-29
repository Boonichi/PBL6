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
	$id_sp = $_GET['id_sp'];
	// Cập nhật
	// Neu co an nut cap nhat
	if(isset($_GET['id_sp']) && $_POST['capnhat'])
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
		
										
		// Neu khong chon file
		if($_FILES['file']['name'] == "")
		{
			mysql_query("UPDATE thietbi SET Ma_tb = '$ma_tb', Ten_tb = '$ten_tb', Ma_loai = '$tenloai', Ten_hieu= '$tenhieu', Dac_tinh ='$dactinh', Gia_ban = '$giaban', Bao_hanh = '$baohanh', So_luong= '$soluong' WHERE Ma_tb = '$id_sp'");
		}
		else
		{
			mysql_query("UPDATE thietbi SET Ma_tb = '$ma_tb', Ten_tb = '$ten_tb', Ma_loai = '$tenloai', Ten_hieu= '$tenhieu', Dac_tinh ='$dactinh', Gia_ban = '$giaban', So_luong= '$soluong',Bao_hanh = '$baohanh', Hinh_anh = '$file' WHERE Ma_tb = '$id_sp' ");
			move_uploaded_file($_FILES['file']['tmp_name'],"../images/thietbi/".$_FILES['file']['name']);
		}
		$tb = "Cập nhật thành công!";
	}
	$truyvan_qlsp = mysql_query("SELECT Ma_tb,Ten_tb,thietbi.Ma_loai,Ten_hieu,Dac_tinh,Gia_ban,Bao_hanh,So_luong,Hinh_anh,loai_sp.Ma_loai_sp,Ten_loai_sp FROM thietbi,loai_sp WHERE loai_sp.Ma_loai_sp = thietbi.Ma_loai and Ma_tb = '$id_sp'");
	
	$r = mysql_fetch_array($truyvan_qlsp);

?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center" bgcolor="#0066CC" class="style1">CẬP NHẬT SẢN PHẨM</td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#C1E7FF">
      <?php
	  	echo "<img src='../images/".$r['Hinh_anh']."' width='150px' height='150px' border='0' />";
	  ?>      </td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#CCCCCC" class="ten_field">Mã thiết bị: </td>
      <td width="63%" bgcolor="#CCCCCC"><label>
        <input name="ma_tb" type="text" id="ma_tb" style="background-color:#FFFFCC" readonly="readonly" value="<?php if(isset($_GET['id_sp'])) { echo $r['Ma_tb']; } else {echo $_POST['ma_tb']; } ?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên thiết bị:</td>
      <td bgcolor="#CCCCCC"><input name="ten_tb" type="text" id="ten_tb" value="<?php if(isset($_GET['id_sp'])) { echo $r['Ten_tb']; } else {echo $_POST['ten_tb']; } ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên loại:</td>
      <td bgcolor="#CCCCCC"><label>
        <select name="tenloai" id="tenloai">
        <?php
		
        	echo "<option value='".$r[9]."'>".$r[10]."</option>";
			$query_loai = mysql_query("SELECT * FROM loai_sp");
         	while($ql = mysql_fetch_row($query_loai))
			{
				if($ql[0] != $r[9])
				echo "<option value='".$ql[0]."'>".$ql[1]."</option>";
		  	}
		 ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên hiệu:</td>
      <td bgcolor="#CCCCCC"><input name="tenhieu" type="text" id="ten_tb" value="<?php if(isset($_GET['id_sp'])) { echo $r['Ten_hieu']; } else {echo $_POST['tenhieu']; } ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Giá bán:</td>
      <td bgcolor="#CCCCCC"><input name="giaban" type="text" id="giaban" value="<?php if(isset($_GET['id_sp'])) { echo $r['Gia_ban']; } else {echo $_POST['giaban']; } ?>" size="20" />
        USD </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Bảo hành:</td>
      <td bgcolor="#CCCCCC"><input name="baohanh" type="text" id="baohanh" value="<?php if(isset($_GET['id_sp'])) { echo $r['Bao_hanh']; } else {echo $_POST['baohanh']; } ?>" size="20" />
        Tháng </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Đặc tính kỹ thuật:</td>
      <td bgcolor="#CCCCCC"><label>
        <textarea name="dactinh" id="dactinh" cols="45" rows="4"><?php if(isset($_GET['id_sp'])) { echo $r['Dac_tinh']; } else {echo $_POST['dactinh']; } ?>
        </textarea>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Số lượng còn:</td>
      <td bgcolor="#CCCCCC"><input name="soluong" type="text" id="soluong" value="<?php if(isset($_GET['id_sp'])) { echo $r['So_luong']; } else {echo $_POST['soluong']; } ?>" size="20" /></td>
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
        <input type="submit" name="capnhat" id="capnhat" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
