<span class="menu_left">
	<span> <a href="index.php">TRANG CHỦ</a> </span>
    <span> | <a href="#">DIỄN ĐÀN</a> </span>
    <span> | <a href="?frame=search">TÌM KIẾM</a> </span>
   <?php 
   if(!$_SESSION['email'])
   {
    	echo "<span> | <a href=\"?frame=register\">ĐĂNG KÝ </a></span>";
   }
   ?>
</span>