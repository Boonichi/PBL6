<?php
	session_start();
	ob_start();
	if(isset($_GET['id_tb']))
	{
		unset($_SESSION['giohang'][$_GET['id_tb']]);
		header("location: ../index.php?frame=giohang");
	}
	if($_GET['del_all'] == "true" && count($_SESSION['giohang']))
	{
		foreach($_SESSION['giohang'] as $id_sp => $sl)
		{
			unset($_SESSION['giohang'][$id_sp]);	
		}
		header("location: ../index.php?frame=giohang");
	}	

?>