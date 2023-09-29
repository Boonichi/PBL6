<?php 
session_start();
?>
<table width="180px" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='180px'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>THỐNG KÊ TRUY CẬP</font></b>
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
			<td align="center" height="20">
     
            	 Đang online: <?php echo online(); ?> <br>
          		Truy cập hôm nay: <?php echo today(); ?> <br>
                Truy cập hôm qua: <?php echo yesterday(); ?> <br>
                Tổng số truy cập: <?php total(); ?> <br>
                Truy cập trung bình: <?php avg(); ?> <br>
               
            </td>
		</tr>
   	 </table>
  </td>
  </tr>
  <tr height="15px">
  </tr>
</table>

