<table width="180px" border="0" cellspacing="0" cellpadding="0">
  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='180px'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>ĐĂNG NHẬP</font></b>
								</td>
								<td width='27'>
									<img border='0' height='25' src='images/img/but_right.jpg' width='27' />
								</td>
							</tr>
				</table>
			</td>
  </tr>
  <tr>
    <td colspan="3" align="center">
    	
          <div class="border_div">
          
          <?php
		  if(!$_SESSION['email'])
		  {
			echo "<form method='post' action='modules/xu_ly_login.php?action=login'>
				   <p>Email: <input type='text' name='email' size='10' /> </p>
				   <p>Pass: <input type='password' name='pass' size='10' /> </p> 
					<p> <input type='submit' name='submit' value='Đăng nhập' /> </p> 
			  </form>";
		  }	
		  else
		  {
		  	$email = $_SESSION['email'];
		  	$query = mysql_query("SELECT Name,thanh_vien.Ma_cv,Ten_cv FROM thanh_vien,nhom WHERE Email='$email' and nhom.Ma_cv = thanh_vien.ma_cv");
			$r = mysql_fetch_array($query);
		  	echo "Hi ".$r['Name']." !";
			if($r['Ma_cv'] == 1)
			{
				echo "<br> <a href='./admin/'>".$r['Ten_cv']."</a>";
			}
			echo "<br><a href='modules/xu_ly_login.php?action=logout'>Thoát</a>";
		  }
		  ?>
      
          </div>
                
          
  </td>
  </tr>
  <tr height="15px">
  </tr>
</table>
