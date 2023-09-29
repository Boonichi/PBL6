<?php
	$truyvan= mysql_query("SELECT Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat(Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong,' cái'),Ma_tb,Ngay_nhap FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp ORDER BY Ngay_nhap DESC");
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
	$truyvan_1=mysql_query("SELECT Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat('$',Gia_ban,' USD'), concat(Bao_hanh,'T'),concat(So_luong,' cái'),Ma_tb FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp ORDER BY Ngay_nhap DESC limit $x, $sodong");
?>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='100%'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>SẢN PHẨM MỚI</font></b>
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
    
    

    
    
    
    	<table width="100%" border="1" bordercolor="#CCCCCC" class="table_border" cellspacing="0" cellpadding="0" >
        
         
			
				 <?php 
                    $dem = 1;
                    while($row = mysql_fetch_array($truyvan_1))
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
              <td colspan="3" class='phan_trang'>
              
             	<?php
					// Lấy địa chỉ hiện tại
					$self = "index.php?";
					page_record($self,$p,$tongsotrang);
				?>
                
              </td>
             </tr>
 
    </table>
   </td>
  </tr>
  <tr height="20px">
  </tr>
</table>