<?php
	session_start();
	$giohang = $_SESSION['giohang'];
	// Nếu người dùng cập nhật lại giỏ hàng (ấn nút cập nhật)
	if(isset($_POST['capnhat']) && 	count($giohang) != "")
	{
		$soluong_cn = $_POST['soluong'];
		print_r ($soluong_cn);
		foreach($soluong_cn as $id_sp => $sl)
		{
			
			// Nếu như người dùng đặt lại số lượng  = 0  ==> thì ta hủy luôn sản phẩm đó ($id_sp) trong giỏ hàng ($_SESSION['giohang']) 
			if($sl == 0)
			{
				unset($_SESSION['giohang'][$id_sp]);
			}
			// Nguoc lại số lượng sp phải là số ta cập nhật lại số lượng giỏ hàng
			
			else if($sl > 0 && is_numeric($sl))
			{
				$_SESSION['giohang'][$id_sp] = $sl;
			}
			// Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
			// refresh lại giỏ hàng
			header("location: ".$_SERVER['REQUEST_URI']."");
		}
	}
?>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='100%'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>GIỎ HÀNG CỦA BẠN</font></b>
								</td>
								<td width='27'>
									<img border='0' height='25' src='images/img/but_right.jpg' width='27' />
								</td>
							</tr>
				</table>
			</td>
  </tr>
  <tr>
    <td colspan="3">
    	<table width="100%" border="1" cellspacing="0" cellpadding="0"  style="border-collapse: collapse" bordercolor="#018BFF">
         <tr>
			<td align="center">
        	<?php
				// nếu giỏ hàng có sản phẩm
				if(count($giohang))
				{
			?>
       
           	  <form action="" method="post">
           		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <?php
					// Duyệt hết giỏ hàng
					$tongcong =0;
					foreach($giohang as $id_sp => $sl)
					{
						// truy van lay thong tin san pham
						$truyvan_gh = mysql_query("SELECT Ten_tb,Ma_loai,Ten_hieu,concat(Gia_ban,' USD'),Bao_hanh,So_luong,Hinh_anh FROM thietbi WHERE Ma_tb in ('$id_sp')");
						$r_gh = mysql_fetch_row($truyvan_gh);
					?>
                    	
                    
                      <tr>
                        <td width="219" height="100px" align="center"><a href="index.php?frame=chitiet&id_tb=<?php echo $id_sp; ?>"><img src="images/<?php echo $r_gh[6]; ?>" border="1" width="70" height="70" /></a> </td>
                        <td width="532" style="font-size:14px">
                        Tên sản phẩm: <br><a href="index.php?frame=chitiet&id_tb=<?php echo $id_sp; ?>"><?php echo $r_gh[0]; ?> </a><br> Mã SP: <?php echo $id_sp; ?><br>
                        Giá bán: <font color="#FF0000"><?php echo $r_gh[3]; ?>  - BH: <?php echo $r_gh[4]." T"; ?> </font>
                        
                        </td>
      <td width="296" align="center"><label>
                          Số lượng: 
                          <input name="soluong[<?php echo $id_sp; ?>]" type="text" id="soluong" size="5" value="<?php echo $sl; ?>"> cái
                          <br>Thành tiền: <font color="#FF0000"><?php echo $sl*$r_gh[3]; ?> USD</font>
                          <br>
                          <a href="modules/delcart.php?id_tb=<?php echo $id_sp; ?>"> Xóa sản phẩm </a>
                          
                          
                        </label> 
                        </td>
                      </tr>
                       <tr>
                        <td colspan="3"><hr style="border:1px solid #CCCCCC;"></td>
                      </tr>
                    <?php
					$tongcong += $sl*$r_gh[3];
					}

					?>
                     <tr>
                        <td colspan="3" align="right" style="font-size:16px; font-weight:bold;">Tổng cộng: <font color="#FF0000"><?php echo $tongcong; ?></font> USD</td>
                      </tr>
                    </table>
               		<input type='button' style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" onClick="location='index.php'" value="Mua thêm" />
                    <input name="capnhat" style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" type="submit" value="Cập nhật giỏ hàng">
                    <input type='button' style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" onClick="location='modules/delcart.php?del_all=true'" value="Xóa giỏ hàng" /><p></p>
              </form>
                
              <?php
			  	} // end if gio hang co sp
			  	else
				{
			  ?>
                <div id="giohang">
                	Bạn chưa có sản phẩm nào. Hãy quay về <a href="index.php">trang chủ</a> và mua sản phẩm 
                </div>
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

