<table width="180px" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='180px'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>DANH MỤC BÁN CHẠY</font></b>
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
    <table width="180px" border="1" cellspacing="0" cellpadding="0"  style="border-collapse: collapse" bordercolor="#018BFF">
      <tr>
        <td align="center">
<center>
<marquee align="middle" style="overflow:hidden"  direction="up" height="180px" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="2" behavior="alternate" scrolldelay="10">

 <?php
	$query_bc = mysql_query("select Hinh_anh,Ten_tb,thietbi.Ma_tb, count(thietbi.Ma_tb) as soluong
								from thietbi,ct_hoadon
								where thietbi.Ma_tb = ct_hoadon.Ma_sp
								group by Ten_tb
								order by soluong desc
								limit 0,10");

	while($row=mysql_fetch_row($query_bc))
	{
		
		
		echo "&nbsp;<center><a href='?frame=chitiet&id_tb=$row[2]'><img src='images/$row[0]' border='0' widht='100px' height='100px' /></a><br>";
		echo "<font color='red'>$row[1]</font> <br><br> </center>";
		
	}
 		
  ?>      
  </marquee>
 </center>

	      </td>
      </tr>
    </table>
   </td>
 </tr>
 <tr height="15px">
 </tr>
</table>
