
<table width="180px" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='180px'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>QUẢNG CÁO</font></b>
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
    	<table width="170px" border="1" cellspacing="0" cellpadding="0"  style="border-collapse: collapse" bordercolor="#018BFF">
         <tr>
			<td align="center" height="20">
   	<?php

		$query_qc = mysql_query("SELECT * FROM quangcao");
		while($r=mysql_fetch_array($query_qc))
		{
			if($r['Hien_thi'] == 1)
			{
				$hinh_qc = explode(".",$r['Hinh_qc']); // tach duong dan
				$dem  = count($hinh_qc); // dem so phan tu cua mang hinh
				$duoi_hinh = $hinh_qc[$dem-1]; // lay ten hinh bang phan tu cuoi cung cua mang
				if($duoi_hinh == "swf")
				{	
				  echo "<embed src='images/".$r['Hinh_qc']."' quality='high' pluginspage='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' width='170' height='90'></embed><br>";
				 }
				 else
				 {
					echo "<a href='".$r['Lien_ket_qc']."'> <img width='180px' src='images/".$r['Hinh_qc']."' border='0' /></a><br>";
				 }
			}
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

