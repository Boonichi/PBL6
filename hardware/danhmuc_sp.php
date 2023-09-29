<table width="180px" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='180px'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00' size='1'>DANH MỤC SẢN PHẨM</font></b>
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
        <td>
 <?php
	$query_dmsp = mysql_query("SELECT Ma_loai_sp,Ten_loai_sp FROM loai_sp");
 echo "<ul id='verticalmenu' class='glossymenu'>";
 while($r = mysql_fetch_row($query_dmsp))
 {
 	$query_lsp = mysql_query("SELECT Ten_hieu FROM thietbi WHERE Ma_loai='".$r[0]."' GROUP BY Ten_hieu  ");
	//$so_loai = mysql_num_rows($query_lsp);
	//if($so_loai >=2 )
	echo "<li><a href='?frame=catelogies&ma_loai=$r[0]' >$r[1]</a>";
	$loai = mysql_fetch_row($query_lsp);
	if($loai[0] != NULL)
	{
		echo " <ul> ";
			echo "<li><a href='?frame=catelogies&ten_hieu=$loai[0]' >$loai[0]</a></li>";
			while ($tl = mysql_fetch_row($query_lsp))
			{
				echo "<li><a href='?frame=catelogies&ten_hieu=$tl[0]' >$tl[0]</a></li>";
			}
		echo " </ul>";
	}
	echo "</li>";
	
}
echo "</ul>";
  ?>      
	      </td>
      </tr>
    </table>
   </td>
 </tr>
 <tr height="15px">
 </tr>
</table>

