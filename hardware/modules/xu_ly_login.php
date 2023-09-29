<?php
ob_start();
session_start();
header("Content-type: text/html; charset=utf-8");
?>
<table width='500' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td height='30' bgcolor='#0099FF' style='color:#FFFFFF;padding-left:15px; font-weight:600'>Redirect...</td>
  </tr>
  <tr>
  <td align="center" bgcolor="#FFFFCC">
    <img src="../images/img/loading.gif"  width="300" height="150px" /><br>
<?php
	include('../ketnoi.php');
	$trangtruoc = $_SERVER['HTTP_REFERER'];
	if($_GET['action'] == "login")
	{
		if(!$_SESSION['email'])
		{
			$email = $_POST['email'];
			$pass = md5($_POST['pass']);
			$query = mysql_query("SELECT * FROM thanh_vien WHERE Email='$email' and Password = '$pass' ");
			if(mysql_num_rows($query) == 1)
			{
				$_SESSION['email'] = $email;
				$r = mysql_fetch_array($query);
				echo "Chào mừng <font color='red'>".$r['Name']." </font>đã đăng nhập thành công!<br>";
		
			}
			else
			{
				echo "Email hoặc mật khẩu không đúng!<br>";
			
			}
		}
		else
		{
			echo "Access Denny!<br>";
		}
	
	}
	else if($_GET['action'] == "logout" )
	{
		if($_SESSION['email'])
		{
			$email = $_SESSION['email'];
			$query = mysql_query("SELECT * FROM khach_hang WHERE Email='$email'");
			$r = mysql_fetch_array($query);
			echo "Chào tạm biệt <font color='red'>".$r['Name']." </font> hẹn gặp lại!<br>";
			session_destroy();
		}
		else
		  {
			echo "Access Denny!<br>";
		  }
	}
	else if($_GET['action'] == "reg_success" )
	{
					
					   $email=$_POST['emailadd'];
					   $pass=$_POST['pass'];
					   $diachi=$_POST['diachi'];
					   $dienthoai=$_POST['dienthoai'];
					   $hoten = $_POST['hoten'];
					   $phai = $_POST['gt'];
					   
					   if(isset($_POST['emailadd']) && isset($_POST['pass']) && isset($_POST['dienthoai']) && isset($_POST['gt']))
					   {
							mysql_query("INSERT INTO khach_hang (Name,Password,Phai,Dia_chi,Dien_thoai,Email) values ('$hoten','$pass','$phai','$diachi','$dienthoai','$email')");
							echo "Chào mừng bạn $email đã đăng ký thành công!<br>";
							// Login
							$_SESSION['email'] = $email;
					  }
					  else
					  {
					  	echo "Access Denny!<br>";
					  }
	}
	else 
	{
		echo "Access Denny!<br>";
	}
?>
    <a href="../index.php">Click vào đây nếu cảm thấy quá lâu</a>
    <?php
			header("refresh:2;url=../index.php");
	?>
    </td>
  </tr>
</table>
