<?php
	session_start();
	ob_start();
?>
<head>
    <meta http-equiv="content-type" content="text/html charset=utf-8" />
</head>
<?php
	// connect to db
	$id_tb = $_GET['id_tb'];
	if($id_tb != "") //  Nếu có ID truyền vào
	{
		require('../ketnoi.php');
		// Kiểm tra xem id này có trong CSDL hay k?
		$q = mysql_query("SELECT Ma_tb FROM thietbi WHERE Ma_tb in ('$id_tb')");
		$num_q = mysql_num_rows($q);
		// Nếu tồn tại
		if($num_q == 1)
		{
			//session_register("giohang");
			//  nếu id này có trong giỏ hàng rồi
			if(isset($_SESSION['giohang'][$id_tb]))
			{
				// Tăng số lượng nó lên
				$_SESSION['giohang'][$id_tb] ++;
			}
			else // Chưa có trong giỏ hàng (mới chọn)
			{
				$_SESSION['giohang'][$id_tb] = 1; // Số lượng mặc định là 1
			}
			// Chuyển tức khắc qua trang giỏ hàng
			header("location: ../index.php?frame=giohang");
		}
		else
		{
			echo "<p align='center' style='font-size:18;color:red'>Không tồn tại sản phẩm này!</p>";
			header("refresh:3;../index.php?frame=giohang");
		}
	}
	else // Nếu không có id truyền vào
	{
		echo "<p align='center' style='font-size:18;color:red'>Access Denny!</p>";
	}

?>