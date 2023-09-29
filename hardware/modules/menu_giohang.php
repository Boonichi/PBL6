<table width="180px" border="0" cellspacing="0" cellpadding="0">
  <tr>
  
			<td>
				<table border="0" cellpadding="0" cellspacing="0"  width="180px">
							<tr>
								<td width="12">
									<img border="0" height="25" src="images/img/but_left.jpg" width="12" /></td>
								<td background="images/img/but_center.jpg">
									
										<b><font color="#ffff00">Giỏ hàng của bạn</font></b>
								</td>
								<td width="27">
									<img border="0" height="25" src="images/img/but_right.jpg" width="27" />
								</td>
							</tr>
				</table>
			</td>
  
  </tr>
  <tr>
    <td colspan="3">
    	<table width="180px" border="1" cellspacing="0" cellpadding="0"  style="border-collapse: collapse" bordercolor="#018BFF">
         <tr>
			<td align="left" style="padding-left:5px;padding-top:10px;font-size:13px;padding-bottom:10px">
              	<?php
					$giohang = $_SESSION['giohang'];
				if(count($giohang) != "")
				{
					$tongcong = 0;
					foreach($giohang as $id_sp => $sl)
					{
						// truy van lay thong tin san pham
						$truyvan_gh = mysql_query("SELECT Ten_tb,Ma_loai,Ten_hieu,concat(Gia_ban,' USD'),Bao_hanh,So_luong,Hinh_anh FROM thietbi WHERE Ma_tb in ('$id_sp')");
						$r_gh = mysql_fetch_row($truyvan_gh);
						echo "<a href='?frame=chitiet&id_tb=$id_sp'>".$r_gh[0]."</a><br> |--Số lượng: <font color='red'>$sl</font> - <font color='red'>".$sl*$r_gh[3]."</font> USD";
						echo "<hr width='80%'>";
						$tongcong += $sl*$r_gh[3];
					}
					
				?>
                 Thành tiền: <font color="#FF0000"><?php echo $tongcong; ?> USD</font>
                	<br><a href='?frame=giohang'>Xem giỏ hàng</a>&nbsp;&nbsp;<a href='modules/delcart.php?del_all=true'>Xóa giỏ hàng</a>
               <?php
			   }
			   else
			   {
				   ?>
				   Giỏ hàng đang trống!<br />
				   Hãy chọn 1 sản phẩm!
				   <?php
			   }
			   ?>
            </td>
		</tr>
		</table>
  </td>
  </tr>
  <tr height="15px">
  </tr>
</table>