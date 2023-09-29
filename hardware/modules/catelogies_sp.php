<?php
		$ma_loai = $_GET['ma_loai'];
		$ten_hieu = $_GET['ten_hieu'];
	// Nếu frame là catelogies và có mã loại
	if($_GET['frame'] = "catelogies" && isset($_GET['ma_loai']) )
	{
	
		$truyvan= mysql_query("SELECT Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat(Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong,' cái'),Ma_tb,Ngay_nhap FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and thietbi.Ma_loai='$ma_loai' ORDER BY Ngay_nhap DESC");
	}
	// Nếu farme là catelogies và có tên hiệu
	else if($_GET['frame'] = "catelogies" && isset($_GET['ten_hieu']) )
	{
		$truyvan= mysql_query("SELECT Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat(Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong,' cái'),Ma_tb,Ngay_nhap FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and Ten_hieu = '$ten_hieu' ORDER BY Ngay_nhap DESC ");
	}
	// Phân trang
	$sodong = 6;
	$tongsodong = mysql_num_rows($truyvan);
	$tongsotrang = ceil($tongsodong / $sodong);
	if(!isset($_GET["p"]))
	{
		$p = 1;
	}
	else
	{
		$p = intval($_GET["p"]);
	}
	$x = ($p -1)* $sodong;
	if($_GET['frame'] = "catelogies" && isset($_GET['ma_loai']) )
	{
		$truyvan_pages=mysql_query("SELECT Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat('$',Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong,' cái'),Ma_tb,Ngay_nhap,thietbi.Ma_loai FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and thietbi.Ma_loai='$ma_loai' ORDER BY Ngay_nhap DESC limit $x, $sodong");
	}
	else if($_GET['frame'] = "catelogies" && isset($_GET['ten_hieu']) )
	{
		$truyvan_pages=mysql_query("SELECT Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat('$',Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong,' cái'),Ma_tb,Ngay_nhap FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and Ten_hieu = '$ten_hieu' ORDER BY Ngay_nhap DESC limit $x, $sodong");
	}
?>
<table border="0" cellpadding="0" cellspacing="0"  width="100%">
	<tbody>
		<tr>
			<td>
				<div align="center">
					<table border="0" cellpadding="0" cellspacing="0"  width="99%">
						<tbody>
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0"  width="100%">
										<tbody>
											<tr>
												<td width="12">
													<img border="0" height="25" src="images/img/but_left.jpg" width="12" /></td>
												<td background="images/img/but_center.jpg">
													
														<b><font color="#ffff00">DANH MỤC SẢN PHẨM</font></b>
												</td>
												<td width="27">
													<img border="0" height="25" src="images/img/but_right.jpg" width="27" />
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td>
    
    
    	<table width="100%" border="1" bordercolor="#CCCCCC" class="table_border" cellspacing="0" cellpadding="0" >
        
         
			
				 <?php 
                    $dem = 1;
                    while($row = mysql_fetch_array($truyvan_pages))
                    {	
                      if($dem %2 ==1)
					  {
					  	echo "<tr>";
					  }
                            echo "<td bgcolor=\"#FFFFFF\" width='50%' class='phansp' height='250px' align='center'>
                                   
										 <h3><a href='?frame=chitiet&id_tb=$row[7]'>$row[1]</a></h3>
                                        <img border='1px' width='90px' height='90px' src='images/$row[0]'/><br>
                                      	 Giá bán: <span class='giaban'>$row[4] - $row[5]</span><br>
										<a href='?frame=chitiet&id_tb=$row[7]'> <img src='images/img/chitiet.gif' border='0' /></a> 
											<a href='modules/addcart.php?id_tb=$row[7]'>
											<img src='images/img/chon.gif' border='0' />
										</a>
                                   
                                </td>";
                    if($dem % 2 == 0)
					{
						echo "</tr>\n\n";
					}
                	$dem++;
                  }
                 ?>
 
             <tr align="center"  style="border-top: #CCCCCC 1px dotted; height:50px;">
              <td colspan="3"  class="phan_trang">
					 <?php  
			 
					// Lấy địa chỉ hiện tại
					if($_GET['frame'] && $_GET['ma_loai'])
					{
						$self ="?frame=catelogies&ma_loai=$ma_loai&";
					}
					else if($_GET['frame'] && $_GET['ten_hieu'])
					{
						$self ="?frame=catelogies&ten_hieu=$ten_hieu&";
					}
					page_record($self,$p,$tongsotrang);
				?>
                
              </td>
             </tr>
 
    </table>
  
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>