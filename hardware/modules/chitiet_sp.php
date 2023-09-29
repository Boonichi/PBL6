<?php

if($_GET['frame'] == "chitiet" && isset($_GET['id_tb']) )
{
	$id_tb = $_GET['id_tb'];
	$lenh = "select Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat(Gia_ban,' USD'), concat(Bao_hanh,' tháng'),concat(So_luong,' cái'),Dac_tinh,Ma_tb,Ngay_nhap FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and Ma_tb ='".$id_tb."'";
	$kq = mysql_query($lenh);
		
		
	echo "<table width='98%' border='0'  cellspacing='0' cellpadding='0'>
		  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='100%'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>THÔNG TIN CHI TIẾT SẢN PHẨM</font></b>
								</td>
								<td width='27'>
									<img border='0' height='25' src='images/img/but_right.jpg' width='27' />
								</td>
							</tr>
				</table>
			</td>
		 </tr>
		   <tr>
			<td colspan='3'>";
    	if(mysql_num_rows($kq)!=0)
		{
		echo "<table  width='100%' height='400px' border='0' align='center' cellpadding='0' cellspacing='0' class='table_border'";
		$row = mysql_fetch_row($kq);
		echo " <tr>
				<td class='chitiet_img'>
						<img src='images/".$row[0]."'/>
				</td>
				<td class='chitiet_sp'>
					<h2>$row[1]</h2>
					
					<p>	
						Loại sản phẩm: $row[2] - Mã sản phẩm: $row[8]<br>
						Nhà sản xuất: $row[3]<br>
						Ngày nhập: $row[9]<br>
						Số lượng còn trong kho: $row[6]<br>
						Đặc tính kỹ thuật: $row[7]<br>
					</p>
					
					<h4>	Giá bán:  <font color='red' size='4'>$row[4]</font> - Bảo hành: <font color='red' size='4'>$row[5]</font>
					<a href='modules/addcart.php?id_tb=$row[8]'>
											<img src='images/img/chonmua.gif' border='0' />
										</a>
					<br></h4>
					<h5> <a href='".$_SERVER['HTTP_REFERER']."'> <font size='3'>Quay về</font></a>
					
					</h5>	
				</td>	
			
			</tr>
			
			</table>
     </td>
  </tr>
  <tr height='20px'>
  </tr>
</table>";
	
	}
}
else
{
	echo "Access Denny";
}
?>

