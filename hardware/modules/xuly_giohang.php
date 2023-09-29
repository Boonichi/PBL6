<?php
	//session_register("giohang");
	if($_GET['frame'] == "dathang" && isset($_GET['id_tb']))
	{
		
		//if($_SESSION['giohang'][$_GET['id_tb']]['ID'] != $_GET['id_tb'])
		// Điều kiện nếu trong giỏ hàng đã có sản phẩm này rồi thì không thêm vào giỏ nữa
		{
			$giohang[] =$_SESSION['giohang'][$_GET['id_tb']] = array("ID"=>$_GET['id_tb'],"SL"=>$_POST['soluong']);
		}
		echo $_POST['soluong'];
		print_r($giohang);
		session_destroy();
		
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
            	<form action="" method="post">
              		<table width="100%" border="1" cellspacing="0" cellpadding="0">
                    <?php
					$n = 0;
					foreach($giohang as $gt)
					{
						// kiểm tra xem sp có trong giỏ hàng chưa
						$old =  array_search($gt,$giohang);
						if($gt != $old)
						{
					?>
                    
                      <tr>
                        <td width="219" height="100px">&nbsp;</td>
                        <td width="532">Sản phẩm ID: <?php echo $gt['ID']; ?></td>
      <td width="296" align="center"><label>
                          Số lượng: 
                          <input name="soluong" type="text" id="soluong" size="5" value="<?php echo $gt['SL']; ?>">
                          cái
                        </label></td>
                      </tr>
                    <?php
						}
						
					}
					?>
                    </table>
                    <input name="" type="submit">
                </form>
		  </td>
		</tr>
   	 </table>
  </td>
  </tr>
  <tr height="15px">
  </tr>
</table>

