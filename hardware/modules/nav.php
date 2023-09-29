<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="175" height="86"  background="images/img/timkiembox.gif" style="background-repeat:no-repeat">
    
    			<table border="0" width="100%"  cellspacing="0" cellpadding="0">
                <tr>
                    <td>&nbsp;</td>
                    <td align="center">
                    
                    <form method="post" action="?frame=search">
                    	<input type="text" name="search"  style="background-color:#99CCFF" />
               				<input value="" type="submit" style="background-image:url(images/img/timkiem.gif); height:26px; width:73px" />
                    </form>
                 
                    </td>
                    <td>
                    </td>  
                 </tr>
				</table>
    </td>
    <td width="33">
    	<a href="#" onMouseOver="javascript:xoay.direction='right';xoay.start();">
    		<img src="images/img/bar_chay_l.gif" width="33" height="85" border="0">
    	</a>
     </td>
    <td background="images/img/bar_chay_c.gif" height="84" >
   		<marquee id='xoay' direction="right" onMouseOver="xoay.stop()" onMouseOut="this.start()" scrollamount="2" behavior="alternate" scrolldelay="10" >
        <?php
			$sanpham = mysql_query("SELECT Hinh_anh, Ten_tb, Ma_loai,Ten_hieu,Ma_tb,Ngay_nhap FROM thietbi GROUP BY Ten_hieu ORDER BY Ngay_nhap ");
			while (	$r = mysql_fetch_row($sanpham))
			{
				echo "&nbsp;<a href='?frame=chitiet&id_tb=$r[4]'><img border='0' src='./images/".$r[0]."' title='$r[1]' width='84' height='74' /></a>";
			}
		?>					
							
        </marquee>
    	

    </td>
    <td width="33">
  		 <a href="#" onMouseOver="javascript:xoay.direction='left';xoay.start();">
    		<img src="images/img/bar_chay_r.gif" width="33" height="85" border="0">
        </a>
    </td>
  </tr>
</table>
