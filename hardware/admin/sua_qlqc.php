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
	$id_qc = $_GET['id_qc'];
	// Cập nhật
	// Neu co an nut cap nhat
	if(isset($_GET['id_qc']) && $_POST['capnhat'])
	{
		$ma_qc = $_POST['ma_qc'];
		$ten_qc = $_POST['ten_qc'];
		$lienket = $_POST['lienket'];
		$hienthi = $_POST['ht'];
		$file = "flash/".$_FILES['file']['name'];
		
		// Neu khong chon file
		if($_FILES['file']['name'] == "")
		{
			mysql_query("UPDATE quangcao SET Ma_qc = '$ma_qc', Ten_qc = '$ten_qc', Hien_thi= '$hienthi',Lien_ket_qc = '$lienket' WHERE Ma_qc = '$id_qc'");
		}
		else
		{
			mysql_query("UPDATE quangcao SET Ma_qc = '$ma_qc', Ten_qc = '$ten_qc', Hien_thi= '$hienthi',Lien_ket_qc = '$lienket',Hinh_qc = '$file' WHERE Ma_qc = '$id_qc'");
			move_uploaded_file($_FILES['file']['tmp_name'],"../images/flash/".$_FILES['file']['name']);
		}
		$tb = "Cập nhật thành công!";
	}
	$truyvan_qlqc = mysql_query("SELECT * FROM quangcao WHERE Ma_qc = '$id_qc'");
	
	$r = mysql_fetch_array($truyvan_qlqc);

?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center" bgcolor="#0066CC" class="style1">CẬP NHẬT SẢN PHẨM</td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#C1E7FF">
      <?php
	 		 $hinh_qc = explode(".",$r['Hinh_qc']); // tach duong dan
          	$dem  = count($hinh_qc); // dem so phan tu cua mang hinh
			$duoi_hinh = $hinh_qc[$dem-1]; // lay ten hinh bang phan tu cuoi cung cua mang
			if($duoi_hinh == "swf")
			{	
			  echo "<embed src='../images/".$r['Hinh_qc']."' quality='high' pluginspage='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' width='170' height='90'></embed>";
			 }
			 else
			 {
				echo "<a href='".$r['Lien_ket_qc']."'> <img width='180px' src='../images/".$r['Hinh_qc']."' border='0' /></a>";
			 }
	  ?>     
     </td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#CCCCCC" class="ten_field">Mã quảng cáo: </td>
      <td width="63%" bgcolor="#CCCCCC"><label>
        <input name="ma_qc" type="text" id="ma_qc" style="background-color:#FFFFCC" readonly="readonly" value="<?php if(isset($_GET['id_qc'])) { echo $r['Ma_qc']; } else {echo $_POST['ma_qc']; } ?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Tên quảng cáo:</td>
      <td bgcolor="#CCCCCC"><input name="ten_qc" type="text" id="ten_qc" value="<?php if(isset($_GET['id_qc'])) { echo $r['Ten_qc']; } else {echo $_POST['ten_qc']; } ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field"> Liên kết quảng cáo: </td>
      <td bgcolor="#CCCCCC"><label>
      <input name="lienket" type="text" id="lienket" value="<?php if(isset($_GET['id_qc'])) { echo $r['Lien_ket_qc']; } else {echo $_POST['lienket']; } ?>" size="40" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCCCCC" class="ten_field">Hiển thị:</td>
      <td bgcolor="#CCCCCC">
      <?php 
	  if($r['Hien_thi'] == 1)
	  {
		echo " <label>
			<input type=\"radio\" name=\"ht\" id=\"radio\" value=\"1\" checked='checked' />
		  Có </label><label>
		  <input type=\"radio\" name=\"ht\" id=\"radio2\" value=\"0\" />
		  Không</label>";
	  }
	  else
	  {
		  echo "<label>
			<input type=\"radio\" name=\"ht\" id=\"radio\" value=\"1\" />
		  Có </label><label>
		  <input type=\"radio\" name=\"ht\" id=\"radio2\" value=\"0\"  checked='checked' />
		  Không</label>";
	  }
	  ?>
	  </td>
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
