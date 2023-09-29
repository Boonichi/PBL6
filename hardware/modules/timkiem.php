<?php
	if($_GET['kq'])
	{	
		$ten_sp = $_GET['kq'];
	}	
	else
	{
		$ten_sp = $_POST['search'];
	}
	if((isset($_POST['search']) && $_POST['search']!="") || $_GET['kq'])
	{
	
		$query = mysql_query("select Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat('$',Gia_ban,' USD'), concat(Bao_hanh,' tháng'),concat(So_luong,' cái'),Ma_tb FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and Ten_tb like '%".$ten_sp."%'");
		$tongsodl = mysql_num_rows($query);
		if($tongsodl == 0)
		{
			$tb = "Không tìm thấy từ khóa: \"<font color='orange'>$ten_sp</font>\" trong cơ sở dữ liệu!";
		}
		else
		{
			$tb = "Có <font color='orange'> $tongsodl</font> kết quả được tìm thấy";
		}

	// Phan trang
	$sodong = 4;
	$tongsodong = mysql_num_rows($query);
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

		$truyvan_pages=mysql_query("select Hinh_anh,Ten_tb,Ten_loai_sp,Ten_hieu,concat('$',Gia_ban,' USD'), concat(Bao_hanh,' tháng'),concat(So_luong,' cái'),Ma_tb FROM thietbi,loai_sp WHERE thietbi.Ma_loai=loai_sp.Ma_loai_sp and Ten_tb like '%".$ten_sp."%' limit $x, $sodong");

}
else
{
	$tb ="Bạn chưa nhập từ khóa tìm kiếm";
}
?>
		<table width='98%' border='0'  cellspacing='0' cellpadding='0'>
		  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='100%'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>THÔNG TIN TÌM KIẾM SẢN PHẨM</font></b>
								</td>
								<td width='27'>
									<img border='0' height='25' src='images/img/but_right.jpg' width='27' />
								</td>
							</tr>
				</table>
			</td>
		 </tr>
		   <tr>
			<td colspan='3'>
	 <table  width='100%' border='1' align='center' cellpadding='0' cellspacing='0' class='table_border'>
		<tr> <td colspan="2" align="center" valign="top">
		
<form action="" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#C5DDEB;">
  <tr height="70px">
    <td width="20%"><span class="khung_search">Tìm kiếm</span></td>
    <td colspan="2"><label>
      <input name="search" type="text" value="<?php echo $_POST['search']; ?>" size="50" />
    </label></td>
   
    <td width="45%"><label>
      <input type="submit" name="button" id="button" value=" TÌM KIẾM " />
    </label></td>
  </tr>
  <tr>
    <td align="right" class="khung_search_chon">Tìm kiếm theo:</td>
    <td width="18%" class="khung_search_chon"><label>
      <input type="radio" name="radio" id="radio" value="radio" />
    Tìm theo tên sản phẩm</label></td>
   
    <td width="21%" class="khung_search_chon"><label><input type="radio" name="radio" id="radio2" value="radio" />
	Tìm loại sản phẩm</label></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>

</td>
<tr>
    <td colspan="2" class="ketqua_search">
    	       <?php
			  	if(isset($_POST['search']) || isset($_GET['kq']))
				{
					 echo "Kết quả tìm kiếm: $tb";
                }
               ?>    </td>
 </tr>
				                
<?php
	if((isset($_POST['search']) && $_POST['search']!="")|| isset($_GET['kq']))
		{
					while($row=mysql_fetch_row($truyvan_pages))
					{
						
					 echo "<tr class='chitiet_sp'>
							<td align='center' width='120px'>
								<a href='?frame=chitiet&id_tb=$row[7]'><img src='images/".$row[0]."' width='100px' height='100px' border='0px' /></a>
						    </td>
					
						   <td>
							<h3><a href='?frame=chitiet&id_tb=$row[7]'>$row[1]</a></h3>
					
						  <h5>	
						Loại sản phẩm: $row[2] - Mã sản phẩm: $row[7]<br>
						Nhà sản xuất: $row[3]<br>
						Số lượng còn trong kho: $row[6]<br>
						Giá: <font color='red'>$row[4]</font> - BH: <font color='red'>$row[5]</font>
			    		</h5>
					
						
						</td>
					</tr>";
					}
		}
?>
         
		<tr align="center"  style="border-top: #CCCCCC 1px dotted; height:50px;">
              <td colspan="4" class="phan_trang" >
 <?php  

					// Lấy địa chỉ hiện tại
					$self = "?frame=search&kq=$ten_sp&";
					page_record($self,$p,$tongsotrang);
			
?>      
           </td>
             </tr>
    </table>
 </td>
  </tr>
  <tr height='20px'>
  </tr>
</table>